<?php 
//setup for PDO Connection
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "emsapp";

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

?>