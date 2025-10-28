<?php
// Read from App Settings first; fallback values are only for local/dev.
$host = getenv('DB_HOST') ?: 'mysql-amanda-md.mysql.database.azure.com';
$user = getenv('DB_USER') ?: 'webapp';
$pass = getenv('DB_PASS') ?: 'Test1234';
$db   = getenv('DB_NAME') ?: 'amandadb';
$port = 3306;
?>

