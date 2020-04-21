<?php 
require_once("../resources/pdoConfig.php");


if(isset($_SESSION['runId'])) {
    fillPDF();
    
}
?>

