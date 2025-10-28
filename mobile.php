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
// ✅ Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// ✅ Include correct parameters
include './parameters/get-parameters.php';

// ✅ Attempt connection
$conn = new mysqli($host, $username, $password, $db_name, 3306);

// ✅ If connection fails, show fallback data
if ($conn->connect_error) {
    echo "<p>⚠️ Database unreachable. Showing fallback data instead.</p>";
    echo '<h3>Mobile Subscriptions per 100 People (Fallback)</h3>';
    echo '<table>';
    echo '<tr><th>Country</th><th>Year</th><th>Subscriptions per 100</th></tr>';
    echo '<tr><td>Australia</td><td>2021</td><td>105.2</td></tr>';
    echo '<tr><td>New Zealand</td><td>2021</td><td>120.3</td></tr>';
    echo '<tr><td>India</td><td>2021</td><td>85.6</td></tr>';
    echo '</table>';
    return;
}

// ✅ If connection succeeds, run live query
echo "<p>✅ Connected to amandadb successfully.</p>";

$sql = "SELECT country, year, subscriptions_per_100 FROM mobile ORDER BY year ASC";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    echo '<h3>Mobile Subscriptions per 100 People</h3>';
    echo '<table>';
    echo '<tr><th>Country</th><th>Year</th><th>Subscriptions per 100</th></tr>';
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($row["country"]) . '</td>';
        echo '<td>' . htmlspecialchars($row["year"]) . '</td>';
        echo '<td>' . htmlspecialchars($row["subscriptions_per_100"]) . '</td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo "<p>⚠️ No data found in the mobile table.</p>";
}
?>



