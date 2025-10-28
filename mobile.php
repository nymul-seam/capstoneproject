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

$sql = "select name, mobilephones from countrydata_table;";
$conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL, "$sslcert", NULL, NULL);
mysqli_real_connect($conn, "$host", "$username", "$password", "$db_name", 3306, MYSQLI_CLIENT_SSL);

if ($conn->connect_error) {
    error_log('Connection error: ' . $conn->connect_error);
    var_dump('Connection error: ' . $conn->connect_error);
} else {
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo '<h3>Legacy Mobile Data</h3>';
        echo '<table style="width: 80%">';
        echo '<tr><th style="text-align:left">This is a Country Name</th><th style="text-align:left">Number of mobile phone providers</th></tr>';
        while($row = $result->fetch_assoc()) {
            echo '<tr><td>' . $row["name"] . '&nbsp</td><td>' . $row["mobilephones"] . '&nbsp</td></tr>';
        }
        echo '</table>';
    }

    $sql2 = "SELECT country, year, subscriptions_per_100 FROM mobile ORDER BY year ASC";
    $result2 = $conn->query($sql2);
    if ($result2->num_rows > 0) {
        echo '<h3>Updated Mobile Subscriptions</h3>';
        echo '<table style="width: 80%">';
        echo '<tr><th>Country</th><th>Year</th><th>Subscriptions per 100</th></tr>';
        while ($row = $result2->fetch_assoc()) {
            echo '<tr><td>' . $row["country"] . '</td><td>' . $row["year"] . '</td><td>' . $row["subscriptions_per_100"] . '</td></tr>';
        }
        echo '</table>';
    }
}
?>



