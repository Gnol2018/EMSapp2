<?php
//Convert Local Variables to Session Variables
//Dispatch SESSION variable
$mileage = $_SESSION['mileage'];
$dispatchDate = $_SESSION['dispatchDate'];
$runId = $_SESSION['runId'];
$vehId = $_SESSION['vehId'];
$agencyName = $_SESSION['agencyName'];
$agencyLocation = $_SESSION['agencyLocation'] ;
$locationCode = $_SESSION['locationCode'];
$dispatchinfo = $_SESSION['dispatchinfo'];
$locationType = $_SESSION['locationType'];
$crossStreet = $_SESSION['crossStreet'];
$timeReceived = $_SESSION['timeReceived'];
$timeRoute = $_SESSION['timeRoute'] ;
$timeAtScene = $_SESSION['timeAtScene'] ;
$timeFromScene = $_SESSION['timeFromScene'];
$timeAtDes = $_SESSION['timeAtDes'] ;
$timeInService = $_SESSION['timeInService'];
$timeInQuarter = $_SESSION['timeInQuarter'];
$dispatchCallType = $_SESSION['dispatchCallType'];
$dispatchPatientNumb = $_SESSION['dispatchPatientNumb'];
$dispatchMethod = $_SESSION['dispatchMethod'];


//Assign Session Variable to Local Variable from fillDemographic()
$patientFname = $_SESSION['patientFname'];
$patientLname = $_SESSION['patientLname'];
$patientAddress = $_SESSION['patientAddress'];
$patientPhone1 = $_SESSION['patientPhone1'];
$patientPhone2 = $_SESSION['patientPhone2'];
$patientCity = $_SESSION['patientCity'];
$patientState = $_SESSION['patientState'];
$patientZipcode = $_SESSION['patientZipcode'];
$patientDOB = $_SESSION['patientDOB'];
$patientGender = $_SESSION['patientGender'];
$patientSS = $_SESSION['patientSS'];
$patientEmerContact = $_SESSION['patientEmerContact'];
$patientEmerPhone = $_SESSION['patientEmerPhone'];

?>