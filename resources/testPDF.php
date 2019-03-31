<?php 
//include autoloader
ob_start();
session_start();

$mileTotal = $_SESSION['mileTotal'];

require_once 'dompdf/autoload.inc.php';

// reference the Dompdf namespace

use Dompdf\Dompdf;

//initialize dompdf class

$document = new Dompdf();

$html = '
    <h1> <?php $mileTotal ></h1>
    <p>Lorum Ipsum Lorum IpsumLorum IpsumLorum IpsumLorum IpsumLorum IpsumLorum Ipsum</p>
';

$document->loadHtml($html);

//set page size and orientation

$document->setPaper('A4','landscape');

//Render the HTML as PDF

$document->render();

//Get output of generated pdf in Browser

$document->stream("Testo", array("Attachment"=>0));
//1 = Download
?>