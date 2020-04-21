<?php
require_once("../resources/pdoConfig.php");
?>
<?php 
	if(isset($_POST['runIdSubmit'])) {
	   $patientRunId = $_POST['patientRunId'];
	   $_SESSION['runId'] = $patientRunId;
	   redirect('pcrProcess2.php');
	    
	}
?>
<!DOCTYPE html>
<html lang="en">

<?php
include(TEMPLATE_FRONT . DS . "appHeader.php");
?>
<body>
<?php 
include(TEMPLATE_FRONT. DS . "appNav.php");
?>

<?php include(TEMPLATE_BACK . DS . "process1.php") ?>

</body>
</html>