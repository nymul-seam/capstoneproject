<?php
// =====================================================================================
// CONFIGURATION FOR PHP APP RUNNING ON AZURE VM OR LOCAL TESTING
// =====================================================================================

// ************ ACTIVE DATABASE CONNECTION PARAMETERS ************ //
// These values should match your Azure MySQL configuration

$host     = 'mysql-amanda-md.mysql.database.azure.com';       // Your MySQL server hostname
$username = 'mysqladmin@mysql-amanda-md';                     // Your MySQL username
$password = 'Test1234';                                       // Your MySQL password
$db_name  = 'amandadb';                                       // Your database name           
// =====================================================================================
// OPTIONAL: If you later switch to Azure Key Vault, uncomment and configure below
// =====================================================================================

/*
require __DIR__ . '/vendor/autoload.php';

$secret = new AzKeyVault\Secret('https://capstoneproject-kv.vault.azure.net/');
$secrets = $secret->getSecrets();

$host     = $secret->getSecret('kv-db1-host');
$username = $secret->getSecret('kv-db1-username');
$password = $secret->getSecret('kv-db1-password');
$db_name  = $secret->getSecret('kv-db1-dbname');
$sslcert  = 'ssl/DigiCertGlobalRootCA.crt.pem';
*/

// =====================================================================================
?>

