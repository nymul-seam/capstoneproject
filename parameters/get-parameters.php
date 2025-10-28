<?php
// Read from App Settings first; fallback values are only for local/dev.
$host     = getenv('DB_HOST') ?: 'mysql-amanda-md.mysql.database.azure.com';
$username = getenv('DB_USER') ?: 'webapp';             // Flexible Server: no @server
$password = getenv('DB_PASS') ?: 'Replace_Me_Now!';
$db_name  = getenv('DB_NAME') ?: 'amandadb';
$port     = 3306;
?>

