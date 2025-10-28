<?php
require_once __DIR__ . '/db_connect.php';

// Strict mapping (only these tables are allowed)
$map = [
  'gdp'             => 'gdp',
  'lifeexpectancy'  => 'lifeexpectancy',
  'mobile'          => 'mobile',
  'mortality'       => 'mortality',
  'population'      => 'population',
];

$key = $_GET['dataset'] ?? '';
if (!isset($map[$key])) {
    http_response_code(400);
    exit('Invalid dataset.');
}

$table = $map[$key];  // safe table name from whitelist

// Pagination
$page   = max(1, (int)($_GET['page'] ?? 1));
$limit  = 100;
$offset = ($page - 1) * $limit;

// Count rows (for pager)
$total = (int)$mysqli->query("SELECT COUNT(*) AS c FROM `$table`")->fetch_assoc()['c'];

// Fetch rows
$res   = $mysqli->query("SELECT * FROM `$table` LIMIT $limit OFFSET $offset");
$rows  = $res->fetch_all(MYSQLI_ASSOC);
$cols  = array_keys($rows[0] ?? []);

?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title><?= htmlspecialchars(ucfirst($key)) ?> — Results</title>
  <style>
    body { font-family: system-ui, Arial, sans-serif; }
    table { border-collapse: collapse; width: 100%; }
    th, td { border: 1px solid #ddd; padding: 6px 8px; text-align: left; }
    th { background: #f6f6f6; }
    .pager { margin: 12px 0; }
  </style>
</head>
<body>
  <h1><?= htmlspecialchars(ucfirst($key)) ?> — Results</h1>

  <div class="pager">
    <?php
      $pages = max(1, (int)ceil($total / $limit));
      if ($pages > 1) {
        if ($page > 1) {
          $prev = $page - 1;
          echo '<a href="?dataset='.urlencode($key).'&page='.$prev.'">← Prev</a> ';
        }
        echo " Page $page of $pages ";
        if ($page < $pages) {
          $next = $page + 1;
          echo ' <a href="?dataset='.urlencode($key).'&page='.$next.'">Next →</a>';
        }
      }
    ?>
  </div>

  <?php if (!$rows): ?>
    <p>No data found.</p>
  <?php else: ?>
    <table>
      <thead>
        <tr>
          <?php foreach ($cols as $c): ?>
            <th><?= htmlspecialchars($c) ?></th>
          <?php endforeach; ?>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($rows as $r): ?>
          <tr>
            <?php foreach ($cols as $c): ?>
              <td><?= htmlspecialchars((string)$r[$c]) ?></td>
            <?php endforeach; ?>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  <?php endif; ?>

  <p><a href="query.php">Pick another query</a></p>
</body>
</html>
?>
