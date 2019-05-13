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
file_put_contents('../resources/templates/back/PCRapp/PatientReport'. $runId .'.pdf', $document->output());

//Insert PDF and form information into the database
defined("TEMPLATE_BACK") ? null : define("TEMPLATE_BACK", __DIR__ . DS . "templates/back");

defined("DB_HOST") ? null : define("DB_HOST", "localhost");

defined("DB_USER") ? null : define("DB_USER", "root");

defined("DB_PASS") ? null : define("DB_PASS", "");

defined("DB_NAME") ? null : define("DB_NAME", "emsapp");

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

require(TEMPLATE_BACK . DS . "function.php") ;

$runId = $_SESSION['runId'];
$dispatchDate = $_SESSION['dispatchDate'];
//Destryou session
session_destroy();
?>