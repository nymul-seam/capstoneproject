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

// Legacy query for birthrate and life expectancy
$sql = "SELECT name, birthrate, lifeexpectancy FROM countrydata_table;";
$conn = mysqli_init();
mysqli_ssl_set($conn, NULL, NULL, "$sslcert", NULL, NULL);
mysqli_real_connect($conn, "$host", "$username", "$password", "$db_name", 3306, MYSQLI_CLIENT_SSL);

if ($conn->connect_error) {
    error_log('Connection error: ' . $conn->connect_error);
    var_dump('Connection error: ' . $conn->connect_error);
} else {
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo '<h3>Legacy Life Expectancy Data</h3>';
        echo '<table style="width: 100%">';
        echo '<tr><th style="text-align:left">Country Name</th><th style="text-align:left">Birth Rate</th><th style="text-align:left">Life Expectancy</th></tr>';
        while ($row = $result->fetch_assoc()) {
            echo '<tr><td>' . $row["name"] . '</td><td>' . $row["birthrate"] . '</td><td>' . $row["lifeexpectancy"] . '</td></tr>';
        }
        echo '</table>';
    }

    // New query from lifeexpectancy table
    $sql2 = "SELECT country, year, life_expectancy FROM lifeexpectancy ORDER BY year ASC";
    $result2 = $conn->query($sql2);
    if ($result2->num_rows > 0) {
        echo '<h3>Updated Life Expectancy Data</h3>';
        echo '<table style="width: 100%">';
        echo '<tr><th style="text-align:left">Country</th><th style="text-align:left">Year</th><th style="text-align:left">Life Expectancy</th></tr>';
        while ($row = $result2->fetch_assoc()) {
            echo '<tr><td>' . $row["country"] . '</td><td>' . $row["year"] . '</td><td>' . $row["life_expectancy"] . '</td></tr>';
        }
        echo '</table>';
    }
}
?>


