<?php
require_once __DIR__ . '/parameters/get-parameters.php';

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$mysqli = mysqli_init();
mysqli_options($mysqli, MYSQLI_OPT_SSL_VERIFY_SERVER_CERT, true);

if (!mysqli_real_connect(
    $mysqli,
    $host,
    $user,
    $pass,
    $db,
    $port,
    null,
    MYSQLI_CLIENT_SSL
)) {
    http_response_code(500);
    exit('Database connection failed: ' . mysqli_connect_error());
}

$mysqli->set_charset('utf8mb4');
?>
