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

// Original query
$sql = "select name, gdp from countrydata_table;";
$conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL, "$sslcert", NULL, NULL);
mysqli_real_connect($conn, "$host", "$username", "$password", "$db_name", 3306, MYSQLI_CLIENT_SSL);

if ($conn->connect_error) {
    error_log('Connection error: ' . $conn->connect_error);
    var_dump('Connection error: ' . $conn->connect_error);
} else {
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo '<h3>Legacy GDP Data</h3>';
        echo '<table style="width: 80%">';
        echo '<tr><th style="text-align:left">This is a Country Name</th><th style="text-align:left">Gross Domestic Product</th></tr>';
        while($row = $result->fetch_assoc()) {
            echo '<tr><td>' . $row["name"] . '&nbsp</td><td>' . $row["gdp"] . '&nbsp</td></tr>';
        }
        echo '</table>';
    }

    // New GDP table integration
    $sql2 = "SELECT country, year, gdp_per_capita FROM gdp ORDER BY year ASC";
    $result2 = $conn->query($sql2);
    if ($result2->num_rows > 0) {
        echo '<h3>Updated GDP per Capita</h3>';
        echo '<table style="width: 80%">';
        echo '<tr><th style="text-align:left">Country</th><th style="text-align:left">Year</th><th style="text-align:left">GDP per Capita</th></tr>';
        while($row = $result2->fetch_assoc()) {
            echo '<tr><td>' . $row["country"] . '</td><td>' . $row["year"] . '</td><td>' . $row["gdp_per_capita"] . '</td></tr>';
        }
        echo '</table>';
    }
}
?>



