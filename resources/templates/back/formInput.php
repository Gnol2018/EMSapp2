<?php 
if(isset($_POST['dispatchSubmit'])) {   
    //set Dispatch form inputs to Session Varible for printing
    $mileTotal = escape_string($_POST['mileTotal']);
    $dispatchDate = escape_string($_POST['dispatchDate']);
    $runId = escape_string($_POST['runId']);
    $vehId = escape_string($_POST['vehId']);
    $dispatchAgency = escape_string($_POST['dispatchAgency']);
    $dispatchLocation = escape_string($_POST['dispatchLocation']);
    $lCode = escape_string($_POST['lCode']);
    $dispatchInfo = escape_string($_POST['dispatchInfo']);
    $lType = escape_string($_POST['lType']);
    $dispatchCross = escape_string($_POST['dispatchCross']);
    $timeReceived = escape_string($_POST['timeReceived']);
    $timeRoute = escape_string($_POST['timeRoute']);
    $timeAtScene = escape_string($_POST['timeAtScene']);
    $timeFromScene = escape_string($_POST['timeFromScene']);
    $timeAtDes = escape_string($_POST['timeAtDes']);
    $timeInService = escape_string($_POST['timeInService']);
    $timeInQuarter = escape_string($_POST['timeInQuarter']);
    $dispatchCallType = escape_string($_POST['dispatchCallType']);
    $dispatchPatientNumb = escape_string($_POST['dispatchPatientNumb']);
    $dispatchMethod = escape_string($_POST['dispatchMethod']);
    
    //Set Demographic form inputs to SEssion Variable for printing
    $patientFname = escape_string($_POST['patientFname']);
    $patientMname = escape_string($_POST['patientMname']);
    $patientLname = escape_string($_POST['patientLname']);
    $patientAddress = escape_string($_POST['patientAddress']);
    $patientApt = escape_string($_POST['patientAptUnit']);
    $patientPhone1 = escape_string($_POST['patientPhone1']);
    $patientPhone2 = escape_string($_POST['patientPhone2']);
    $patientCity = escape_string($_POST['patientCity']);
    $patientState = escape_string($_POST['patientState']);
    $patientZipcode = escape_string($_POST['patientZipcode']);
    $patientDOB = escape_string($_POST['patientDOB']);
    $patientAge = escape_string($_POST['patientAge']);
    $patientGender = escape_string($_POST['patientGender']);
    $patientSS = escape_string($_POST['patientSS']);
    $patientEmerContact = escape_string($_POST['patientEmerContact']);
    $patientEmerPhone = escape_string($_POST['patientEmerPhone']);
    
    //Set Insurance Company Input to Session
    
    //Set Presenting Problem form to Session Variable
    $traumaComplaint = $_POST['traumaComplaint'];
    $traumaInjury = $_POST['trauma_injury'];
    $presentProblem = $_POST['present_problem'];
    $medicalComplaint = $_POST['medicalComplaint'];
    $pastMedical = $_POST['past_medical'];
    $patientMedication = $_POST['patientMedication'];
    
    //Set Treament Given from to Session Variable
    $chkALS = $_POST['chkALS'];
    foreach($_POST['chkAlStxt1'] as $id) {
        $chkALStxt1 = $_POST['data'][$id]['name'];
    }
    $radEKG = $_POST['radEKG'];
    foreach($_POST['chkAlStxt2'] as $id) {
        $chkALStxt2 = $_POST['data'][$id]['name'];
    }
   
    foreach($_POST['chkAlStxt3'] as $id) {
        $chkALStxt3 = $_POST['data'][$id]['name'];
    }
    $txtCath = $_POST['txtCath'];
    
    $chkBLS = $_POST['chkBLS'];

    if(isset($_POST['chkBLStxt1'])) {
        $txtArtificial = $_POST['txtArtificial'];
    }
    if(isset($_POST['chkBLStxt2'])) {
        $txtCPR = $_POST['radCPR'];
    }
    if (isset($_POST['chkBLStxt3'])) {
        $txtCPRstart = $_POST['txtCPRstart'];
        $txtCPRarrest = $_POST['txtCPRarrest'];
    }
    if (isset($_POST['chkBLStxt4'])) {
        $numDef = $_POST['numDef'];
        $radBLS4 = $_POST['radBLS4'];
    }
    if (isset($_POST['chkBLStxt2'])) {
        $txtMast = $_POST['txtMast'];
    }
    if (isset($_POST['chkBLStxt3'])) {
        $txtBleedCtrl = $_POST['txtBleedCtrl'];
    }
    if (isset($_POST['chkBLStxt4'])) {
        $txtVomit = $_POST['txtVomit'];
        $txtVomitMethod = $_POST['txtVomitMethod'];
    }
    if (isset($_POST['chkBLStxt5'])) {
        $txtRestraints = $_POST['txtRestraints'];
    }
    if (isset($_POST['chkBLStxt6'])) {
        $txtBabyDelivery = $_POST['txtBabyDelivery'];
        $txtBabyCountry = $_POST['txtBabyCountry'];
        $radBaby = $_POST['radBaby'];
    }
    if (isset($_POST['chkBLStxt7'])) {
        $txtAEDshock = $_POST['txtAEDshock'];
    }
    if (isset($_POST['chkBLStxt8'])) {
        $txtBLSother = $_POST['txtBLSother'];
    }
    if (isset($_POST['chkBLSrad1'])) {
        $radLimb = $_POST['radLimb'];
    }
    if (isset($_POST['chkBLSrad2'])) {
        $radBackBoard = $_POST['radBackBoard'];
    }
    
    //Set Map Items
    $traumaMapItems = $_POST['traumaMapItems'];
    //Vital Sign Form Input
    $vitalTime = $_POST['vitalTime_1'];
    
    //Narrative Notes 
    $txtNarrativeNote = $_POST['txtNarrativeNote'];
    $signOut1= $_POST['signOut1'];
    $signOut2 = $_POST['signOut2'];
    
    //Authorization Panel
    $signSec1 = $_POST['signSec1'];
    $signSec2 = $_POST['signSec2'];
    $signSec3 = $_POST['signSec3'];
    $signSec4 = $_POST['signSec4'];
    $signSec5 = $_POST['signSec5'];
    $txtWitnessName = $_POST['txtWitnessName'];
    $txtReasonII = $_POST['txtReasonII'];
    $chkSecII = $_POST['chkSecII'];
    $txtRepName = $_POST['txtRepName'];
    $txtReasonIII = $_POST['txtReasonIII'];
    $txtFacilityIII = $_POST['txtFacilityIII'];
    $txtFacilityTime = $_POST['txtFacilityTime'];
    $txtCrewIII = $_POST['txtCrewIII'];
    $txtRepIII = $_POST['txtRepIII'];
    $chkSecIII = $_POST['chkSecIII'];
    
    //APCFP Panel Variables
    $chkScheduleApp = $_POST['chkScheduleApp'];
    if(isset($_POST['chkAPCFtxt0'])) {
        $txtOtherApp = $_POST['txtOtherApp'];
    }
    if(isset($_POST['chkAPCFtxt1'])) {
        $txtAmbulance1 = $_POST['txtAmbulance1'];
    }
    $chkAmbulance = $_POST['chkAmbulance'];
    if(isset($_POST['chkAPCFtxt2'])) {
        $txtAmbulance2 = $_POST['txtAmbulance2'];
    }
    $chkUlcer = $_POST['chkUlcer'];
    if(isset($_POST['chkUlcertxt'])) {
        $chkUlcerOther = $_POST['chkUlcerOther'];
    }
    if(isset($_POST['chkAPCFtxt3'])) {
        $txtUlcer3 = $_POST['txtUlcer3'];
    }
    $chkPara = $_POST['chkPara'];
    $chkFracture = $_POST['chkFracture'];
    if(isset($_POST['chkAPCFtxt4'])) {
        $txtFracture4 = $_POST['txtFracture4'];
    }
    $chkContractures = $_POST['chkContractures'];
    if(isset($_POST['chkAPCFtxt5'])) {
        $txtSeverePain5 = $_POST['txtSeverePain5'];
    }
    $chkPsychic = $_POST['chkPsychic'];
    $chkPatientRequire = $_POST['chkPatientRequire'];
    $chkIsolation = $_POST['chkIsolation'];
    if(isset($_POST['chkAPCFtxt6'])) {
        $txtIsolation6 = $_POST['txtIsolation6'];
    }
    $txtAPCFother = $_POST['txtAPCFother'];
    $txtPhysicianName = $_POST['txtPhysicianName'];
    $chkPhysician = $_POST['chkPhysician'];
    $txtIncEmt = $_POST['txtIncEmt'];
    $signAPCF = $_POST['signAPCF'];
} else {
    return false;
}

$_SESSION['mileTotal'] = $mileTotal;
$_SESSION['dispatchDate'] = $dispatchDate;
$_SESSION['runId'] = $runId;
$_SESSION['vehId'] = $vehId;
$_SESSION['dispatchAgency'] = $dispatchAgency;
$_SESSION['dispatchLocation'] = $dispatchLocation;
$_SESSION['lCode'] = $lCode;
$_SESSION['dispatchInfo'] = $dispatchInfo;
$_SESSION['lType'] = $lType;
$_SESSION['dispatchCross'] = $dispatchCross;
$_SESSION['timeReceived'] = $timeReceived;
$_SESSION['timeRoute'] = $timeRoute;
$_SESSION['timeAtScene'] = $timeAtScene;
$_SESSION['timeFromScene'] = $timeFromScene;
$_SESSION['timeAtDes'] = $timeAtDes;
$_SESSION['timeInService'] = $timeInService;
$_SESSION['timeInQuarter'] = $timeInQuarter;
$_SESSION['dispatchCallType'] = $dispatchCallType;
$_SESSION['dispatchPatientNumb'] = $dispatchPatientNumb;
$_SESSION['dispatchMethod'] = $dispatchMethod;

//Demographic Session Variable
$_SESSION['patientFname'] = $patientFname;
$_SESSION['patientMname'] = $patientMname;
$_SESSION['patientLname'] = $patientLname;
$_SESSION['patientAddress'] = $patientAddress;
$_SESSION['patientAptUnit'] = $patientApt;
$_SESSION['patientPhone1'] = $patientPhone1;
$_SESSION['patientPhone2'] = $patientPhone2;
$_SESSION['patientCity'] = $patientCity;
$_SESSION['patientState'] = $patientState;
$_SESSION['patientZipcode'] = $patientZipcode;
$_SESSION['patientDOB'] = $patientDOB;
$_SESSION['patientAge'] = $patientAge;
$_SESSION['patientGender'] = $patientGender;
$_SESSION['patientSS'] = $patientSS;
$_SESSION['patientEmerContact'] = $patientEmerContact;
$_SESSION['patientEmerPhone'] = $patientEmerPhone;


/*
$patientPhone1 = escape_string($_POST['patientPhone1']);
$patientPhone2 = escape_string($_POST['patientPhone2']);
$patientCity = escape_string($_POST['patientCity']);
$patientState = escape_string($_POST['patientState']);
$patientZipcode = escape_string($_POST['patientZipcode']);
$patientDOB = escape_string($_POST['patientDOB']);
$patientName = escape_string($_POST['patientName']);
$patientGender = escape_string($_POST['patientGender']);
$patientSS = escape_string($_POST['patientSS']);*/

//Presenting Problems
$_SESSION['traumaComplaint'] = $traumaComplaint;
$_SESSION['traumaInjury'] = $traumaInjury;
$_SESSION['presentProblem'] = $presentProblem;
$_SESSION['medicalComplaint'] = $medicalComplaint;
$_SESSION['pastMedical'] = $pastMedical;
$_SESSION['patientMedication'] = $patientMedication;
$_SESSION['traumaMapItems'] = $traumaMapItems;

//Treatment Given
$_SESSION['chkALS'] = $chkALS;
$_SESSION['chkALStxt1'] = $chkALStxt1;
$_SESSION['radEKG'] = $radEKG;
$_SESSION['chkALStxt2'] = $chkALStxt2;
$_SESSION['chkALStxt3'] = $chkALStxt3;
$_SESSION['txtCath'] = $txtCath;
$_SESSION['chkBLS'] = $chkBLS;
$_SESSION['txtArtificial'] = $txtArtificial;
$_SESSION['txtCPR'] = $txtCPR;
$_SESSION['txtCPRstart'] = $txtCPRstart;
$_SESSION['txtCPRarrest'] = $txtCPRarrest;
$_SESSION['numDef'] = $numDef;
$_SESSION['radBLS4'] = $radBLS4;
$_SESSION['txtMast'] = $txtMast;
$_SESSION['txtBleedCtrl'] = $txtBleedCtrl;
$_SESSION['radLimb'] = $radLimb;
$_SESSION['radBackBoard'] = $radBackBoard;
$_SESSION['txtVomit'] = $txtVomit;
$_SESSION['txtVomitMethod'] = $txtVomitMethod;
$_SESSION['txtRestraints'] = $txtRestraints;
$_SESSION['txtBabyDelivery'] = $txtBabyDelivery;
$_SESSION['txtBabyCountry'] = $txtBabyCountry;
$_SESSION['radBaby'] = $radBaby;
$_SESSION['txtAEDshock'] = $txtAEDshock;
$_SESSION['txtBLSother'] = $txtBLSother;

//Narrate Note
$_SESSION['txtNarrativeNote'] = $txtNarrativeNote;
$_SESSION['signOut1'] = $signOut1;
$_SESSION['signOut2'] = $signOut2;

//Authorization Form
$_SESSION['signSec1'] = $signSec1;
$_SESSION['signSec2'] = $signSec2;
$_SESSION['signSec3'] = $signSec3;
$_SESSION['signSec4'] = $signSec4;
$_SESSION['signSec5'] = $signSec5;

$_SESSION['txtWitnessName'] = $txtWitnessName;
$_SESSION['txtReasonII'] = $txtReasonII;
$_SESSION['chkSecII'] = $chkSecII;
$_SESSION['txtRepName'] = $txtRepName;
$_SESSION['txtReasonIII'] = $txtReasonIII;
$_SESSION['txtFacilityIII'] = $txtFacilityIII;
$_SESSION['txtFacilityTime'] = $txtFacilityTime;
$_SESSION['txtCrewIII'] = $txtCrewIII;
$_SESSION['txtRepIII'] = $txtRepIII;
$_SESSION['chkSecIII'] = $chkSecIII;

//APCF Form
$_SESSION['chkScheduleApp'] = $chkScheduleApp;
$_SESSION['txtOtherApp'] = $txtOtherApp;
$_SESSION['txtAmbulance1'] = $txtAmbulance1;
$_SESSION['txtAmbulance2'] = $txtAmbulance2;
$_SESSION['chkAmbulance'] = $chkAmbulance;
$_SESSION['chkUlcer'] = $chkUlcer;
$_SESSION['chkUlcerOther'] = $chkUlcerOther;
$_SESSION['txtUlcer3'] = $txtUlcer3;
$_SESSION['chkPara'] = $chkPara;
$_SESSION['chkFracture'] = $chkFracture;
$_SESSION['txtFracture4'] = $txtFracture4;
$_SESSION['chkContractures'] = $chkContractures;
$_SESSION['txtSeverePain5'] = $txtSeverePain5;
$_SESSION['chkPsychic'] = $chkPsychic;
$_SESSION['chkPatientRequire'] = $chkPatientRequire;
$_SESSION['chkIsolation'] = $chkIsolation;
$_SESSION['txtIsolation6'] = $txtIsolation6;
$_SESSION['txtAPCFother'] = $txtAPCFother;
$_SESSION['txtPhysicianName'] = $txtPhysicianName;
$_SESSION['chkPhysician'] = $chkPhysician;
$_SESSION['txtIncEmt'] = $txtIncEmt;
$_SESSION['signAPCF'] = $signAPCF;

echo implode(", ", $_SESSION['chkScheduleApp']);

?>