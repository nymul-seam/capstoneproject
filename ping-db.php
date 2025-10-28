<?php
header('Content-Type: text/plain');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$host = getenv('DB_HOST');
$user = getenv('DB_USER');
$pass = getenv('DB_PASS');
$db   = getenv('DB_NAME');

echo "Env:\n";
var_export(['DB_HOST'=>$host,'DB_USER'=>$user,'DB_NAME'=>$db,'DB_PASS_len'=>strlen((string)$pass)]);
echo "\n\nConnecting...\n";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $conn = mysqli_init();
    mysqli_options($conn, MYSQLI_OPT_SSL_VERIFY_SERVER_CERT, true);
    if (!mysqli_real_connect($conn, $host, $user, $pass, $db, 3306, null, MYSQLI_CLIENT_SSL)) {
        echo "mysqli_real_connect returned false\n";
        exit;
    }

    $ver = $conn->query("SELECT VERSION() v")->fetch_assoc()['v'] ?? 'unknown';
    $cur = $conn->query("SELECT CURRENT_USER() u")->fetch_assoc()['u'] ?? 'unknown';
    $dbn = $conn->query("SELECT DATABASE() d")->fetch_assoc()['d'] ?? 'unknown';

    echo "✅ Connected\nVersion: $ver\nUser: $cur\nDatabase: $dbn\n\nTables:\n";
    $r = $conn->query("SHOW TABLES");
    while ($row = $r->fetch_array()) echo "- {$row[0]}\n";
} catch (Throwable $e) {
    echo "ERROR: ".$e->getMessage()."\n";
}
