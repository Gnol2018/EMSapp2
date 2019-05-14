<?php
require_once("../resources/pdoConnect.php");
if(empty($_SESSION['userName'])) {
    redirect('index.php');
}
?>

<?php include(TEMPLATE_BACK . DS . "appHeader.php") ?>
<?php include(TEMPLATE_BACK . DS . "formInput.php")?>

<?php include(TEMPLATE_BACK . DS . "form.php")?>

