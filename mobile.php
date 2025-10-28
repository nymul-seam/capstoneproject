<?php
// mobile.php — minimal, robust version to prove live data renders

// 1) Show useful errors (temporarily; turn off later)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// 2) Connect once, via our TLS helper
require_once __DIR__ . '/db_connect.php';

// 3) Query the table directly (no assumptions about column names yet)
$table = 'mobile';

try {
    // Quick count (for a sanity check)
    $cnt = $conn->query("SELECT COUNT(*) AS c FROM `$table`")->fetch_assoc()['c'] ?? 0;

    // Fetch first 100 rows
    $res = $conn->query("SELECT * FROM `$table` LIMIT 100");
    $rows = $res->fetch_all(MYSQLI_ASSOC);
    $cols = array_keys($rows[0] ?? []);   // derive column names dynamically
} catch (mysqli_sql_exception $e) {
    http_response_code(500);
    echo "<p><b>Database error:</b> " . htmlspecialchars($e->getMessage()) . "</p>";
    exit;
}
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Mobile — Results</title>
  <style>
    #pickquery { height:50px; width:180px; }
    table { width: 90%; border-collapse: collapse; margin-top: 16px; }
    th, td { border: 1px solid #ddd; padding: 6px 8px; text-align: left; }
    th { background: #f6f6f6; }
    body { font-family: system-ui, Arial, sans-serif; }
  </style>
</head>
<body>
  <form action="query.php"><input type="submit" id="pickquery" value="Pick another query"></form>

  <h2>Mobile table (first 100 rows)</h2>
  <p>Total rows in table: <?= (int)$cnt ?></p>

  <?php if (!$rows): ?>
    <p>No data found in <code>mobile</code>.</p>
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
</body>
</html>


