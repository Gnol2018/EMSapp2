<?php
require_once("../resources/config.php");
echo $_SESSION['userName'];
if(empty($_SESSION['userName'])) {
    redirect('index.php');
}
?>

<?php include(TEMPLATE_BACK . DS . "appHeader.php") ?>
<?php include(TEMPLATE_BACK . DS . "formInput.php")?>

<body>
	<header class=" text-center py-3">
		<nav class="appNav navbar navbar-expand-sm">
		<a class="navbar-brand" href="#">
  		  <img src="img/interCity.jpg" alt="logo" style="width:200px;">
 		</a>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="form.php">Medical Report</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="form.php">EMS Charge Sheet</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="inside/logout.php">Log Out</a>
            </li>
          </ul>
		</nav>
	</header>
	<!-- Navgiation Start Here -->
	<?php 
	   include 'includes/nav.php'
	?>
	<!-- Navgiation End Here -->
	
	<form method="POST" id="accordion">
	    <!-- Dispatch Panel Start Here -->
	    <?php 
	       include(TEMPLATE_BACK. DS. "patientReportApp/dispatchForm.php")
	    ?>
		
	   <!---------------- Disptach Panel End Here------------------- -->
	
	   <!------------------------- Demographic Panel Start Here--------------- -->
	     <?php 
	       include(TEMPLATE_BACK. DS. "patientReportApp/demographicForm.php")
	    ?>
		<!-- Demogrpahic Panel End Here -->
		
		<!-- Presenting Problem Start Here -->
		<?php 
		  include(TEMPLATE_BACK. DS. "patientReportApp/presentingProblem.php")
		?>
		<!-- Presenting Problem End Here -->
		
		<!-- Treatment Given Start Here -->
		<?php 
		  include(TEMPLATE_BACK. DS. "patientReportApp/treatmentGiven.php")
		?>
		<!-- Treatment Given End Here -->
		
		<!-- Disposition Start Here -->
		<?php 
		  include(TEMPLATE_BACK. DS. "patientReportApp/disposition.php")
		?>
		<!-- Disposition End Here -->
		
		<!-- Narrative Note Start Here -->
		<?php 
		  include(TEMPLATE_BACK. DS. "patientReportApp/narrativeNotes.php")
		?>
		<!-- Narrative Note End Here -->
		
		<?php 
		  include(TEMPLATE_BACK. DS. "patientReportApp/authorization.php")
		?>
		<!-- Narrative Note End Here -->
		
		<!-- A.P.C.F.P Start Here -->
		<?php 
		include(TEMPLATE_BACK. DS. "patientReportApp/apcfpForm.php")
		?>
		<!-- A.P.C.F.P End Here -->		
		<div class="row">
		<input id="dispatchSubmit" name="dispatchSubmit" type="submit" value="Submit"></input>
		<a href="medicalForm.php">Print</a>
		</div>
	</form>
	
	<script type="text/javascript" src="../resources/script/customJquery.js">
	</script>
	<script>

	</script>
</body>