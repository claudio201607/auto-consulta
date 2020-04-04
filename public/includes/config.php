<?php
/* DATABASE CONFIGURATION */
define('DB_SERVER', '190.107.176.12');
define('DB_USERNAME', 'rootx');
define('DB_PASSWORD', '4O1hf%f1');
define('DB_DATABASE', 'artistic1_');
//define("BASE_URL", "http://localhost/PHPLoginHash/"); // Eg. http://yourwebsite.com


function getDB()
{
$dbhost=DB_SERVER;
$dbuser=DB_USERNAME;
$dbpass=DB_PASSWORD;
$dbname=DB_DATABASE;
try {
$dbConnection = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
$dbConnection->exec("set names utf8");
$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
return $dbConnection;
}
catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}

}
?>
