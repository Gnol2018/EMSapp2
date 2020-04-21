<?php 
if(isset($_POST['medicSubmit'])) {
    //set Dispatch form inputs to Session Varible for printing
    $mileTotal = trim_input($_POST['mileTotal']);
    $dispatchDate = trim_input($_POST['dispatchDate']);
    $runId = trim_input($_POST['runId']);
    $vehId = trim_input($_POST['vehId']);
    $dispatchAgency = trim_input($_POST['dispatchAgency']);
    $dispatchLocation = trim_input($_POST['dispatchLocation']);
    $lCode = trim_input($_POST['lCode']);
    $dispatchInfo = trim_input($_POST['dispatchInfo']);
    $lType = trim_input($_POST['lType']);
    $dispatchCross = trim_input($_POST['dispatchCross']);
    $timeReceived = trim_input($_POST['timeReceived']);
    $timeRoute = trim_input($_POST['timeRoute']);
    $timeAtScene = trim_input($_POST['timeAtScene']);
    $timeFromScene = trim_input($_POST['timeFromScene']);
    $timeAtDes = trim_input($_POST['timeAtDes']);
    $timeInService = trim_input($_POST['timeInService']);
    $timeInQuarter = trim_input($_POST['timeInQuarter']);
    $dispatchCallType = trim_input($_POST['dispatchCallType']);
    $dispatchPatientNumb = trim_input($_POST['dispatchPatientNumb']);
    $dispatchMethod = trim_input($_POST['dispatchMethod']);
    
    //Set Demographic form inputs to SEssion Variable for printing
    $patientFname = ($_POST['patientFname']);
    $patientMname = ($_POST['patientMname']);
    $patientLname = ($_POST['patientLname']);
    $patientAddress = ($_POST['patientAddress']);
    $patientApt = ($_POST['patientAptUnit']);
    $patientPhone1 = ($_POST['patientPhone1']);
    $patientPhone2 = ($_POST['patientPhone2']);
    $patientCity = ($_POST['patientCity']);
    $patientState = ($_POST['patientState']);
    $patientZipcode = ($_POST['patientZipcode']);
    $patientDOB = ($_POST['patientDOB']);
    $patientAge = ($_POST['patientAge']);
    $patientGender = ($_POST['patientGender']);
    $patientSS = ($_POST['patientSS']);
    $patientEmerContact = ($_POST['patientEmerContact']);
    $patientEmerPhone = ($_POST['patientEmerPhone']);
    
    //Set Insurance Company Input to Session
    $insurPolicy1 = $_POST['insurPolicy1'];
    $insurCompany1 = $_POST['insurCompany1'];
    $insurAddress1 = $_POST['insurAddress1'];
    $insurPhone1 = $_POST['insurPhone1'];
    $insurGroup1 = $_POST['insurGroup1'];
    $insurPol1 = $_POST['insurPol1'];
    $insurHolder1 = $_POST['insurHolder1'];
    $insurSS1 = $_POST['insurSS1'];
    $insurDOB1 = $_POST['insurDOB1'];
    $insurMedicare1 = $_POST['insurMedicare1'];
    $insurMedicaid1 = $_POST['insurMedicaid1'];
    $insurClaim1 = $_POST['insurClaim1'];
    
    $insurPolicy2 = $_POST['insurPolicy2'];
    $insurCompany2 = $_POST['insurCompany2'];
    $insurAddress2 = $_POST['insurAddress2'];
    $insurPhone2 = $_POST['insurPhone2'];
    $insurGroup2 = $_POST['insurGroup2'];
    $insurPol2 = $_POST['insurPol2'];
    $insurHolder2 = $_POST['insurHolder2'];
    $insurSS2 = $_POST['insurSS2'];
    $insurDOB2 = $_POST['insurDOB2'];
    $insurMedicare2 = $_POST['insurMedicare2'];
    $insurMedicaid2 = $_POST['insurMedicaid2'];
    $insurClaim2 = $_POST['insurClaim2'];
    
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
    
    //---------------Vital Sign Form Input---------------
    $row = explode("_", $_POST['rowNumber']);
    if($row[1] > 0){
        $maxRow =  $row[1];
        $_SESSION['maxRow'] = $maxRow;
    }
    
    $vitalTime = $_POST['vitalTime'];
    $vitalResRate = $_POST['vitalResRate'];
    $vitalPulseRate = $_POST['vitalPulseRate'];
    $txtBP = $_POST['txtBP'];
    for($i= 0; $i <= $maxRow; $i++) {
        $radConsIndex = array('radCons' . $i);
        $radRightPupilIndex = array('radRightPupil' . $i);
        $radLeftPupilIndex = array('radLeftPupil' . $i);
        $radSkinIndex = array('radSkin' . $i);
        $radStatusIndex = array('radStatus' . $i);
        
        
        $vitalResIndex = 'vitalResCheck' . $i;
        $vitalPulseIndex = 'chkPulse' . $i;
        
        //Assign declared Variable to POST variable
        $radCons = $_POST[$radConsIndex[0]];
        $radRightPupil = $_POST[$radRightPupilIndex[0]];
        $radLeftPupil = $_POST[$radLeftPupilIndex[0]];
        $radSkin = $_POST[$radSkinIndex[0]];
        $radStatus = $_POST[$radStatusIndex[0]];
        
        $vitalResCheck = $_POST[$vitalResIndex];
        $vitalPulseCheck = $_POST[$vitalPulseIndex];
        
        $_SESSION['radCons'. $i] = $radCons;
        $_SESSION['radRightPupil'. $i] = $radRightPupil;
        $_SESSION['radLeftPupil'. $i] = $radLeftPupil;
        $_SESSION['radSkin'. $i] = $radSkin;
        $_SESSION['radStatus'. $i] = $radStatus;
        
        $_SESSION['vitalResCheck' . $i] = $vitalResCheck;
        $_SESSION['chkPulse' . $i] = $vitalPulseCheck;
        
    }
    $_SESSION['vitalTime'] = $vitalTime;
    $_SESSION['vitalResRate'] = $vitalResRate;
    $_SESSION['vitalPulseRate'] = $vitalPulseRate;
    $_SESSION['txtBP'] = $txtBP;
    
    
    //--------------Vital Sign Form Input End---------------
    //Disposition Form Input
    $chkALStransport = $_POST['chkALStransport'];
    $txtDisCode = $_POST['txtDisCode'];
    $selDisDes = $_POST['selDisDes'];
    $radALStran = $_POST['radALStran'];
    $selDisPurpose = $_POST['selDisPurpose'];
    $selDisRequester = $_POST['selDisRequester'];
    $selDisType = $_POST['selDisType'];
    $txtDisWeight = $_POST['txtDisWeight'];
    $txtDisRound = $_POST['txtDisRound'];
    $txtDisStretcher = $_POST['txtDisStretcher'];
    
    $chkDisDeath = $_POST['chkDisDeath'];
    if (isset($_POST['chkDistxt1'])) {
        $txtTrans1 = $_POST['txtTrans1'];
    }
    if (isset($_POST['chkDistxt2'])) {
        $txtOther2 = $_POST['txtOther2'];
    }
    
    $chkDisTransport = $_POST['chkDisTransport'];
    if (isset($_POST['chkDistxt3'])) {
        $txtDisOther3 = $_POST['txtDisOther3'];
    }
    
    $inChargeName= $_POST['inChargeName'];
    $radInCharge = $_POST['radInCharge'];
    $inChargeNum= $_POST['inChargeNum'];
    
    $driverName = $_POST['driverName'];
    $radDriver = $_POST['radDriver'];
    $driverNumber= $_POST['driverNumber'];
    
    
    $otherDriver1 = $_POST['otherDriver1'];
    $radOtherDriver1 = $_POST['radOtherDriver1'];
    $otherDriverNum1 = $_POST['otherDriverNum1'];
    
    $otherDriver2 = $_POST['otherDriver2'];
    $radOtherDriver2 = $_POST['radOtherDriver2'];
    $otherDriverNum2 = $_POST['otherDriverNum2'];
    
    
    //Narrative Notes Form Input
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
    echo "Your Run Id is not available";
}
?>