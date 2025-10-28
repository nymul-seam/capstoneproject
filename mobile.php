<style>
#pickquery {
     height: 50px;
     width: 150px;
}
table {
     width: 80%;
     border-collapse: collapse;
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
// ✅ Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// ✅ Include connection parameters
include './parameters/get-parameters.php';

// ✅ Connect to MySQL (no SSL for now)
$conn = new mysqli($host, $username, $password, $db_name, 3306);

if ($conn->connect_error) {
    die("<p>❌ Connection failed: " . $conn->connect_error . "</p>");
} else {
    echo "<p>✅ Connected to amandadb successfully.</p>";

    // ✅ Query the mobile table
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
}
?>

