<?php

/**
 * ####################################################################################
 * SECTION 1 BELOW IS FOR PHP APP RUNNING ON AZURE VM
 * ####################################################################################
 * # ++++++++++
 * # SECTION 1
 * # ++++++++++
 */

 /**
 * Install PHP Composer on Ubuntu
 * https://linuxhint.com/install-and-use-php-composer-ubuntu-22-04/
 * Install the required package - eg: below - wapacro/az-keyvault-php
 * IMPORTANT STEP: INCLUDE -  Autoload script
 * Before any class instantiation, it is required to include the “vendor/autoload.php” in your PHP scripts
 *   # require __DIR__ . '/vendor/autoload.php';
 * 
 */

 /**
 * Azure Key Vault Library - for PHP on VM or Azure Webapp
 * This library allows easy integration of Azure Key Vault in PHP applications.
 * https://github.com/wapacro/az-keyvault-php.git
 * 
 * https://github.com/wapacro/az-keyvault-php#how-to-use
 * Get started in three simple steps!

 * 1. Add a system-assigned identity to your Azure App Service and assign permissions to your application to read & list secrets from Key Vault
 * 2. Install this package in your project using Composer
 *     # composer require wapacro/az-keyvault-php 
 * 3. Access your secrets & keys in Key Vault using the simple API Script below:
 * 
 */

/* ###############################======================> UNDO THIS LINE TO ACTIVATE SECTION 1 ( Remove "/ star" in start of tis line )  <================================================#######################

 require __DIR__ . '/vendor/autoload.php';

 // ************ STUDENTS UPDATE BELOW PARAMETER SECTION *********** //
// *******************PARAMETER SECTION *************************** //


# Secrets

// STEP 1 : LEARNERS TO UPDATE - KEYVAULT ENDPOINT URL
$secret = new AzKeyVault\Secret('https://capstoneproject-kv.vault.azure.net/');
$secrets = $secret->getSecrets();

// STEP 2: LEARNERS TO MAKE SURE - PARAMETER NAME BELOW MATCHES WITH THE PARAMETER NAME CONFIGURED IN KEYVAULT IN AZURE PORTAL
$host  = $secret->getSecret('kv-db1-host');
$username  = $secret->getSecret('kv-db1-username');
$password = $secret->getSecret('kv-db1-password');
$db_name  = $secret->getSecret('kv-db1-dbname');

// STEP 3: LEARNERS TO DOWNLOAD AND UPLOAD PEM  CERT FOR THE MYSQL DATABASE YOU CREATED  ( From Azure Portal ) & Import to SSL folder with the same name as below
$sslcert    = 'ssl/DigiCertGlobalRootCA.crt.pem';




// *******************PARAMETER SECTION *************************** //
// ************ STUDENTS UPDATE ABOVE PARAMETER SECTION *********** //



# ++++++++++
# SECTION 2
# ++++++++++




/**
 * #################################################################################################################################
 * BELOW CONFIGURATION ( SECTION 2 ) IS REQUIRED IF STUDENT RUN  PHP APP  ON AZURE WEB APP ( APP SERVICE PLAN ) Instead of as a VM
 * #################################################################################################################################
 */

 /* <**********  DELETE THIS LINE IF YOU WANT TO ENABLE THIS SECTION    ****** 

// ************ STUDENTS UPDATE ABOVE PARAMETER SECTION *********** //

// *******************PARAMETER SECTION *************************** //

 */ ###############################======================> ADD  "star /" TO DISABLE SECTION 2 ( Remove "star /" in start of tis line )  <================================================#######################



// Configuration for database connection

# REMOTE DECLARATION
$host       = getenv('DB_HOST');
$username   = getenv('DB_USERNAME');
$password   = getenv('DB_PASSWORD');
$db_name     = getenv('DB_DATABASE');
$sslcert    = 'ssl/DigiCertGlobalRootCA.crt.pem';
#$sslcert   = getenv('DB_SSLCERT');

# LOCAL DECLARATION - for Testing only
#$host       = 'SQLdbENDPOINT';
#$username   = 'USERNAME';
#$password   = 'PASSWORD';
#$db_name    = 'DBNAME';
#$sslcert    = 'ssl/DigiCertGlobalRootCA.crt.pem';


# Local file creation - for testing only
#$sslcertstring   = getenv('DB_SSLCERT');
#$var_str = var_export($sslcertstring , true);
#$testpemcontent = "$var_str";
#file_put_contents('testcertsb.pem', $testpemcontent);
#$sslcert    = "testcertsb.pem";
?>

 
