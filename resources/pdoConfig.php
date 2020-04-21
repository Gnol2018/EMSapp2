<?php 
ob_start();
//session start so this will be above Doctype tag
session_start();

// Configure the database connection by setting constant server varibles

//setup for PDO Connection
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "emsintercity";

//setup DSN
$dsn = "mysql:host=$host;dbname=$db_name";

//executes connection
try {
    $conn = new PDO($dsn, $user, $pass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
}
//catches any errors in above and displays error message
catch(PDOException $e)
{
    echo 'You are not connected!';
    exit;
}



// Configure the database connection by setting constant server varibles
defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);

defined("RESOURCES") ? null : define("RESOURCES", DS . __DIR__);

defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT", __DIR__ . DS . "templates/front");

defined("TEMPLATE_BACK") ? null : define("TEMPLATE_BACK", __DIR__ . DS . "templates/back");

error_reporting(1);

require_once("pdoFunction.php");
?>