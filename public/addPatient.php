<?php
require_once("../resources/pdoConfig.php");
$pageLocation = $_SERVER['REQUEST_URI'];
?>

<!DOCTYPE html>
<html lang="en">

<?php 
include(TEMPLATE_FRONT . DS . "appHeader.php");
?>

<script type="text/javascript" src="js/customJquery.js"></script>
<?php 
if(isset($_POST["btnAddPatient"])) {
    addPatient();
    addInsurance();
}
?>

<body>
<?php 
include(TEMPLATE_FRONT. DS. "appNav.php");

?>
<?php include(TEMPLATE_FRONT . DS . "patientAdd.php") ?>

</body>
</html>