<?php
$host = 'mysql-amanda-md.mysql.database.azure.com';
$dbname = 'mysql-amanda-md'; // Replace this with your actual DB name
$username = 'amanda@mysql-amanda-md'; // This is your admin login format
$password = 'Test1234'; // Use your actual password here

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

