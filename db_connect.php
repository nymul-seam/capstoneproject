<?php
require_once __DIR__ . '/parameters/get-parameters.php';

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$conn = mysqli_init();
mysqli_options($conn, MYSQLI_OPT_SSL_VERIFY_SERVER_CERT, true);

// TLS required on Azure MySQL. No client certs needed.
if (!mysqli_real_connect($conn, $host, $username, $password, $db_name, $port, null, MYSQLI_CLIENT_SSL)) {
    http_response_code(500);
    exit('Database connection failed: ' . mysqli_connect_error());
}

$conn->set_charset('utf8mb4');
?>
