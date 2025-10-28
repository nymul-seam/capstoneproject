<style>
#pickquery {
    height: 50px;
    width: 150px;
}
table {
    width: 80%;
    border-collapse: collapse;
    margin-top: 20px;
}
th, td {
    text-align: left;
    padding: 8px;
    border-bottom: 1px solid #ccc;
}
</style>

<form action='query.php'>
  <input type="submit" id="pickquery" value="Pick another query">
</form>

<?php
$jsonData = file_get_contents('./data/mobile.json');
$data = json_decode($jsonData, true);

if ($data && count($data) > 0) {
    echo '<h3>Mobile Subscriptions per 100 People (Demo Data)</h3>';
    echo '<table>';
    echo '<tr><th>Country</th><th>Year</th><th>Subscriptions per 100</th></tr>';
    foreach ($data as $row) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($row["country"]) . '</td>';
        echo '<td>' . htmlspecialchars($row["year"]) . '</td>';
        echo '<td>' . htmlspecialchars($row["subscriptions_per_100"]) . '</td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo "<p>No demo data available.</p>";
}
?>


