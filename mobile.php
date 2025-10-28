<style>
#pickquery {
     height: 50px;
     width: 150px;
}
</style>

<form action='query.php'>
  <input type="submit" id="pickquery" value="Pick another query">
</form>

<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'get-parameters.php';

// Connect to amandadb
$conn = mysqli_init();
mysqli_ssl_set($conn, NULL, NULL, "$sslcert", NULL, NULL);
mysqli_real_connect($conn, "$host", "$username", "$password", "$db_name", 3306, MYSQLI_CLIENT_SSL);

if ($conn->connect_error) {
    die("<p>❌ Connection failed: " . $conn->connect_error . "</p>");
} else {
    echo "<p>✅ Connected to amandadb successfully.</p>";

    // Legacy query (optional)
    $sql = "SELECT name, mobilephones FROM countrydata_table;";
    $result = $conn->query($sql);
    if ($result && $result->num_rows > 0) {
        echo '<h3>Legacy Mobile Data</h3>';
        echo '<table style="width: 80%">';
        echo '<tr><th>Country Name</th><th>Mobile Phone Providers</th></tr>';
        while ($row = $result->fetch_assoc()) {
            echo '<tr><td>' . htmlspecialchars($row["name"]) . '</td><td>' . htmlspecialchars($row["mobilephones"]) . '</td></tr>';
        }
        echo '</table>';
    } else {
        echo "<p>⚠️ No legacy data found or query failed.</p>";
    }

    // New mobile table query
    $sql2 = "SELECT country, year, subscriptions_per_100 FROM mobile ORDER BY year ASC;";
    $result2 = $conn->query($sql2);
    if ($result2 && $result2->num_rows > 0) {
        echo '<h3>Updated Mobile Subscriptions</h3>';
        echo '<table style="width: 80%">';
        echo '<tr><th>Country</th><th>Year</th><th>Subscriptions per 100</th></tr>';
        while ($row = $result2->fetch_assoc()) {
            echo '<tr><td>' . htmlspecialchars($row["country"]) . '</td><td>' . htmlspecialchars($row["year"]) . '</td><td>' . htmlspecialchars($row["subscriptions_per_100"]) . '</td></tr>';
        }
        echo '</table>';
    } else {
        echo "<p>⚠️ No mobile table data found or query failed.</p>";
    }
}
?>






