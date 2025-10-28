<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once __DIR__ . '/db_connect.php';

$table = 'mobile';
$res = $conn->query("SELECT * FROM `$table` LIMIT 100");
$rows = $res ? $res->fetch_all(MYSQLI_ASSOC) : [];
$cols = array_keys($rows[0] ?? []);
?>
<!doctype html><html><head><meta charset="utf-8"><title>Mobile — Results</title>
<style>
#pickquery{height:50px;width:180px}
table{width:90%;border-collapse:collapse;margin-top:16px}
th,td{border:1px solid #ddd;padding:6px 8px;text-align:left}
th{background:#f6f6f6}
body{font-family:system-ui,Arial,sans-serif}
</style></head><body>
<form action="query.php"><input type="submit" id="pickquery" value="Pick another query"></form>
<h2>Mobile table (first 100 rows)</h2>
<?php if (!$rows): ?>
  <p>No data found in <code>mobile</code>.</p>
<?php else: ?>
  <table><thead><tr>
    <?php foreach ($cols as $c): ?><th><?= htmlspecialchars($c) ?></th><?php endforeach; ?>
  </tr></thead><tbody>
    <?php foreach ($rows as $r): ?><tr>
      <?php foreach ($cols as $c): ?><td><?= htmlspecialchars((string)$r[$c]) ?></td><?php endforeach; ?>
    </tr><?php endforeach; ?>
  </tbody></table>
<?php endif; ?>
</body></html>
