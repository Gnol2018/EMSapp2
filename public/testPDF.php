 <?php 
//include autoloader
ob_start();
session_start();
error_reporting(0);


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
file_put_contents('PatientReport'. $runId .'.pdf', $document->output());

session_destroy();
?>