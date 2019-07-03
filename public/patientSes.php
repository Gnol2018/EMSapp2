<?php 

$patientFname = ($_POST['patientFname']);
$patientLname = ($_POST['patientLname']);

$_SESSION['patientFname'] = $patientFname;
$_SESSION['patientLname'] = $patientLname;
echo $patientFname;
echo $patientLname;
?>