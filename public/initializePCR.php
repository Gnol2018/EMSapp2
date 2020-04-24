<?php
require_once("../resources/pdoConfig.php");
if(empty($_SESSION['userName'])) {
    redirect('index.php');
    
} else {
    findUserRole();
}

//unset($_SESSION['runId']);
echo $_SESSION['runId'];

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

<?php 
	include(TEMPLATE_BACK. DS. "patientReportApp/nav.php")
?>
<!-- Navgiation End Here -->

<form class="container-fluid" method="POST" id="accordion">
    <!---------- Dispatch Panel Start Here ------------------->
    <?php 
       //No fill because dispatcher needs to input
       include(TEMPLATE_BACK. DS. "patientReportApp/intRunId.php")
    ?>
	
   <!---------------- Disptach Panel End Here------------------- -->

   <!------------------------- Demographic Panel Start Here--------------- -->
     <?php 
     if($_SESSION['patientId']) {
        
         //Fill function pick up variable from the database based on searchPatient patient Index
         fillDemographicFromSearchPatient();
       
     } 
      
    ?>
	<!-- Demogrpahic Panel End Here -->
	
	
	<div class="row">	
		<div class="col-12 submitRow">
			<input class="btn btn-primary" id="dispatchSubmit" onclick="return confirm('Initialize Patient Care Report ?')" name="dispatchSubmit" type="submit" value="Submit"></input>
		</div>
	</div>
	<?php 
	if(isset($_POST['dispatchSubmit'])) {
	    //If this work, I need to take off the ifisset in pdoFun
	   
	   insertPcrPdf();
	}
	
	?>
</form>

</body>

<script type="text/javascript" src="js/customJquery.js"></script>
</html>
