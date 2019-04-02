 <?php 
//include autoloader
ob_start();
session_start();
error_reporting(0);
$mileTotal = $_SESSION['mileTotal'];
$dispatchDate = $_SESSION['dispatchDate'];
$runId = $_SESSION['runId'];
$vehId = $_SESSION['vehId'];
$dispatchAgency = $_SESSION['dispatchAgency'];
$dispatchLocation = $_SESSION['dispatchLocation'] ;
$lCode = $_SESSION['lCode'];
$dispatchInfo = $_SESSION['dispatchInfo'];
$lType = $_SESSION['lType'];
$dispatchCross = $_SESSION['dispatchCross'];
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

$patientFname = $_SESSION['patientFname'];
$patientMname = $_SESSION['patientMname'];
$patientLname = $_SESSION['patientLname'];
$patientAddress = $_SESSION['patientAddress'];
$patientApt = $_SESSION['patientAptUnit'];
$patientPhone1 = $_SESSION['patientPhone1'];
$patientPhone2 = $_SESSION['patientPhone2'];
$patientCity = $_SESSION['patientCity'];
$patientState = $_SESSION['patientState'];
$patientZipcode = $_SESSION['patientZipcode'];
$patientDOB = $_SESSION['patientDOB'];
$patientGender = $_SESSION['patientGender'];
$patientSS = $_SESSION['patientSS'];
$patientAge = $_SESSION['patientAge'];
$patientEmerContact = $_SESSION['patientEmerContact'];
$patientEmerPhone = $_SESSION['patientEmerPhone'];

$traumaComplaint = $_SESSION['traumaComplaint'];
$traumaInjury = $_SESSION['traumaInjury'];
$presentProblem = $_SESSION['presentProblem'];
$medicalComplaint = $_SESSION['medicalComplaint'];
$pastMedical = $_SESSION['pastMedical'];
$patientMedication = $_SESSION['patientMedication'];
$traumaMapItems = $_SESSION['traumaMapItems'];

//Treatment Given
$chkALS = $_SESSION['chkALS'];
$chkALStxt1 = $_SESSION['chkALStxt1'];
$chkALStxt2 = $_SESSION['chkALStxt2'];
$radEKG = $_SESSION['radEKG'];
$chkALStxt3 = $_SESSION['chkALStxt3'];
$txtCath = $_SESSION['txtCath'];
$chkBLS = $_SESSION['chkBLS'];
$txtArtificial = $_SESSION['txtArtificial'];
$txtCPR = $_SESSION['txtCPR'];
$txtCPRstart = $_SESSION['txtCPRstart'];
$txtCPRarrest = $_SESSION['txtCPRarrest'];

$numDef = $_SESSION['numDef'];
$radBLS4 = $_SESSION['radBLS4'];
$txtMast = $_SESSION['txtMast'];
$txtBleedCtrl = $_SESSION['txtBleedCtrl'];
$radLimb = $_SESSION['radLimb'];
$radBackBoard = $_SESSION['radBackBoard'];
$txtVomit = $_SESSION['txtVomit'];
$txtVomitMethod = $_SESSION['txtVomitMethod'];
$radLimb = $_SESSION['radLimb'];
$radLimb = $_SESSION['radLimb'];
$txtRestraints = $_SESSION['txtRestraints'];
$txtBabyDelivery = $_SESSION['txtBabyDelivery'];
$txtBabyCountry = $_SESSION['txtBabyCountry'];
$radBaby = $_SESSION['radBaby'];
$txtAEDshock = $_SESSION['txtAEDshock'];
$txtBLSother = $_SESSION['txtBLSother'];

//Narrtive Notes
$txtNarrativeNote = $_SESSION['txtNarrativeNote'];
$signOut1 = $_SESSION['signOut1'];
$signOut2 = $_SESSION['signOut2'];

//Authorization
$signSec1 = $_SESSION['signSec1'];
$signSec2 = $_SESSION['signSec2'];
$signSec3 = $_SESSION['signSec3'];
$signSec4 = $_SESSION['signSec4'];
$signSec5 = $_SESSION['signSec5'];

$txtWitnessName = $_SESSION['txtWitnessName'];
$txtReasonII = $_SESSION['txtReasonII'];
$chkSecII = $_SESSION['chkSecII'];
$txtRepName = $_SESSION['txtRepName'];
$txtReasonIII = $_SESSION['txtReasonIII'];
$txtFacilityIII = $_SESSION['txtFacilityIII'];
$txtFacilityTime = $_SESSION['txtFacilityTime'];
$txtCrewIII = $_SESSION['txtCrewIII'];
$txtRepIII = $_SESSION['txtRepIII'];
$chkSecIII = $_SESSION['chkSecIII'];

//APCF Form SESSION variale
$chkScheduleApp = $_SESSION['chkScheduleApp'];
$txtOtherApp = $_SESSION['txtOtherApp'];
$txtAmbulance1 = $_SESSION['txtAmbulance1'];
$txtAmbulance2 = $_SESSION['txtAmbulance2'];
$chkAmbulance = $_SESSION['chkAmbulance'];
$chkUlcer = $_SESSION['chkUlcer'];
$chkUlcerOther = $_SESSION['chkUlcerOther'];
$txtUlcer3 = $_SESSION['txtUlcer3'];
$chkPara = $_SESSION['chkPara'];
$chkFracture = $_SESSION['chkFracture'];
$txtFracture4 = $_SESSION['txtFracture4'];
$chkContractures = $_SESSION['chkContractures'];

$txtSeverePain5 = $_SESSION['txtSeverePain5'];
$chkPsychic = $_SESSION['chkPsychic'];
$chkPatientRequire = $_SESSION['chkPatientRequire'];
$chkIsolation = $_SESSION['$chkIsolation'];
$txtIsolation6 = $_SESSION['txtIsolation6'];

$txtAPCFother = $_SESSION['txtAPCFother'];
$txtPhysicianName = $_SESSION['txtPhysicianName'];
$chkPhysician = $_SESSION['chkPhysician'];
$signAPCF =  $_SESSION['signAPCF'];
$txtIncEmt = $_SESSION['txtIncEmt'];

$template = "medicalForm2.php";


require_once 'dompdf/autoload.inc.php';

// reference the Dompdf namespace

use Dompdf\Dompdf;

//initialize dompdf class

$document = new Dompdf();


//$document->loadHtml($html);
include $template;
$page = file_get_contents($template);
$page = ob_get_clean();
$document->loadHtml($page);
//set page size and orientation

$document->setPaper('A4','landscape');

//Render the HTML as PDF

$document->render();

//Get output of generated pdf in Browser

$document->stream("Testo", array("Attachment"=>0));
//1 = Download
file_put_contents('PatientReport.pdf', $document->output());
?>