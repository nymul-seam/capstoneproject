<style>
#pickquery {
     height: 50px;
     width: 150px;
}
</style>

<form action='query.php' size=20px>          
  <input type="submit" id="pickquery" value="Pick another query">
</form>

<?php
include 'get-parameters.php';

// Legacy query for childhood mortality
$sql = "SELECT name, mortalityunder5 FROM countrydata_table;";
$conn = mysqli_init();
mysqli_ssl_set($conn, NULL, NULL, "$sslcert", NULL, NULL);
mysqli_real_connect($conn, "$host", "$username", "$password", "$db_name", 3306, MYSQLI_CLIENT_SSL);

if ($conn->connect_error) {
    error_log('Connection error: ' . $conn->connect_error);
    var_dump('Connection error: ' . $conn->connect_error);
} else {
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo '<h3>Legacy Childhood Mortality Data</h3>';
        echo '<table style="width: 80%">';
        echo '<tr><th style="text-align:left">Country Name</th><th style="text-align:left">Childhood Mortality</th></tr>';
        while ($row = $result->fetch_assoc()) {
            echo '<tr><td>' . $row["name"] . '</td><td>' . $row["mortalityunder5"] . '</td></tr>';
        }
        echo '</table>';
    }

    // New query from mortality table
    $sql2 = "SELECT country, year, mortality_rate_per_1000 FROM mortality ORDER BY year ASC";
    $result2 = $conn->query($sql2);
    if ($result2->num_rows > 0) {
        echo '<h3>Updated Mortality Rate Data</h3>';
        echo '<table style="width: 80%">';
        echo '<tr><th style="text-align:left">Country</th><th style="text-align:left">Year</th><th style="text-align:left">Mortality Rate per 1,000</th></tr>';
        while ($row = $result2->fetch_assoc()) {
            echo '<tr><td>' . $row["country"] . '</td><td>' . $row["year"] . '</td><td>' . $row["mortality_rate_per_1000"] . '</td></tr>';
        }
        echo '</table>';
    }
}
?>

