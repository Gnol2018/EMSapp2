 <?php 
//include autoloader
ob_start();
session_start(); 
//If run is existed, do nothing. if runId does not existed, process to domPDF and Insert
error_reporting(1);
$template = "medicalForm2.php";

$template = "medicalForm2.php";
require_once 'dompdf/lib/html5lib/Parser.php';
require_once 'dompdf/lib/php-font-lib/src/FontLib/Autoloader.php';
require_once 'dompdf/lib/php-svg-lib/src/autoload.php';
require_once 'dompdf/src/Autoloader.php';
require_once 'dompdf/autoload.inc.php';
Dompdf\Autoloader::register();

//-------------------Function to insert to the database---------------------
insertPcrPdf();
insertZipcodeInfo();
//-------------------Function to insert to the database END here---------------------


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
$fileName = 'PCRapp/PatientReport'. $runId .'.pdf';

//file_put_contents('../resources/templates/back/PCRapp/PatientReport'. $runId .'.pdf', $document->output());
if(file_exists($fileName)) 
    {
    echo "Already used run Id is in processed, this file will not be saved";
    }
    else {
     file_put_contents($fileName, $document->output());
    }
//Insert PDF and form information into the database

?>