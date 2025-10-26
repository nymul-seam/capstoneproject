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
        //Query for the population data
	$sql = "select name, population, populationurban from countrydata_table;";

	$conn = mysqli_init();
        mysqli_ssl_set($conn,NULL,NULL, "$sslcert", NULL, NULL);
        mysqli_real_connect($conn, "$host", "$username", "$password", "$db_name", 3306, MYSQLI_CLIENT_SSL);

        if ($conn->connect_error) {
            error_log('Connection error: ' . $conn->connect_error);
            var_dump('Connection error: ' . $conn->connect_error);
        }
        else {
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
              //echo "success";
              echo '<table style="width: 80%">';
              echo '<tr>';
              echo '<th style="text-align:left">Country Name</th>';
              echo '<th style="text-align:left">Population</th>';
              echo '<th style="text-align:left">Urban Population</th>';
              echo '</tr>';

              while($row = $result->fetch_assoc()) {
              //echo '<p>';

              echo '<tr>';
              //echo 'Country_Name  Mobile_phone_subscribers  Mortality_under5';
              echo '<td>';
              echo $row["name"];
              echo '&nbsp';
              echo '<td>';
              echo $row["population"];
              echo '&nbsp';
              echo '<td>';
              echo $row["populationurban"];
              echo '<br';
              echo '</tr>';
              }
              echo '</table>';
          }
        }
    ?>
