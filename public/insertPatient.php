<?php
require_once("../resources/pdoConfig.php");

$patientFname = ($_POST['patientFname']);

$patientLname = ($_POST['patientLname']);
$patientAddress = ($_POST['patientAddress']);

$patientPhone1 = ($_POST['patientPhone1']);
$patientPhone2 = ($_POST['patientPhone2']);

$patientZipcode = ($_POST['patientZipcode']);
$patientDOB = ($_POST['patientDOB']);
$patientGender = ($_POST['patientGender']);

$patientSS = ($_POST['patientSS']);
$patientEmerContact = ($_POST['patientEmerContact']);
$patientEmerPhone = ($_POST['patientEmerPhone']);

$stmt = $conn->prepare('SELECT patientFname, patientLname, patientAddress, patientPhone1, patientPhone2,  patientZipcode, patientDOB, patientGender, patientSS, patientEmerContact, patientEmerPhone
                                FROM patients 
                                WHERE patientFname = ?
                                AND patientLname = ?');
$stmt->execute();
$sqlPatientInfo = "INSERT INTO patients (patientFname, patientLname, patientAddress, patientPhone1, patientPhone2, patientZipcode, patientDOB, patientGender, patientSS,patientEmerContact,patientEmerPhone)
                       VALUE (?,?,?,?,?,?,?,?,?,?,?)";
$stmt = $conn->prepare($sqlPatientInfo);
$stmt->execute([$patientFname,$patientLname,$patientAddress,$patientPhone1,$patientPhone2, $patientZipcode,$patientDOB,$patientGender,$patientSS,$patientEmerContact,$patientEmerPhone]);

echo $patientFname;
echo $patientLname;
echo $patientAddress;
echo $patientPhone1;
?>