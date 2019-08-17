<?php 
session_start();
$patientFname = ($_POST['patientFname']);
$patientLname = ($_POST['patientLname']);
$patientAddress = ($_POST['patientAddress']);
$patientPhone1 = ($_POST['patientPhone1']);
$patientPhone2 = ($_POST['patientPhone2']);


$_SESSION['patientFname'] = $patientFname;
$_SESSION['patientLname'] = $patientLname;
$_SESSION['patientAddress'] = $patientAddress;
$_SESSION['patientPhone1'] = $patientPhone1;
$_SESSION['patientPhone2'] = $patientPhone2;

echo $_SESSION['patientFname'] ;

?>