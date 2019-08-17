<?php 
ob_start();
//session start so this will be above Doctype tag
session_start();

// Configure the database connection by setting constant server varibles
defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);

defined("RESOURCES") ? null : define("RESOURCES", DS . __DIR__);

defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT", __DIR__ . DS . "templates/front");

defined("TEMPLATE_BACK") ? null : define("TEMPLATE_BACK", __DIR__ . DS . "templates/back");

error_reporting(1);

require_once("pdoFunction.php");
?>