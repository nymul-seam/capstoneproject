<style>
#pickquery { height:50px; width:150px; }
table { width:80%; border-collapse:collapse; margin-top:20px; }
th, td { text-align:left; padding:8px; border-bottom:1px solid #ccc; }
</style>

<form action='query.php'><input type="submit" id="pickquery" value="Pick another query"></form>

<?php
require_once __DIR__ . '/db_connect.php';

$sql = "SELECT country, year, subscriptions_per_100 FROM mobile ORDER BY year ASC";
$result = $conn->query($sql);

echo '<h3>Mobile Subscriptions per 100 People</h3>';
if ($result && $result->num_rows) {
  echo '<table><tr><th>Country</th><th>Year</th><th>Subscriptions per 100</th></tr>';
  while ($row = $result->fetch_assoc()) {
    echo '<tr><td>'.htmlspecialchars($row["country"]).'</td><td>'.htmlspecialchars($row["year"]).'</td><td>'.htmlspecialchars($row["subscriptions_per_100"]).'</td></tr>';
  }
  echo '</table>';
} else {
  echo '<p>No data found.</p>';
}




