<style>
#pickquery{height:50px;width:150px}
table{width:80%;border-collapse:collapse;margin-top:20px}
th,td{text-align:left;padding:8px;border-bottom:1px solid #ccc}
</style>

<form action="query.php"><input type="submit" id="pickquery" value="Pick another query"></form>

<?php
$path = __DIR__ . '/data/mobile.json';
$data = file_exists($path) ? json_decode(file_get_contents($path), true) : [];

if (!$data) { echo "<p>No demo data available.</p>"; exit; }

echo '<h3>Mobile Subscriptions per 100 People (Demo)</h3>';
echo '<table><tr><th>Country</th><th>Year</th><th>Subscriptions per 100</th></tr>';
foreach ($data as $row) {
  echo '<tr>',
       '<td>', htmlspecialchars($row['country']), '</td>',
       '<td>', htmlspecialchars($row['year']), '</td>',
       '<td>', htmlspecialchars($row['subscriptions_per_100']), '</td>',
       '</tr>';
}
echo '</table>';
