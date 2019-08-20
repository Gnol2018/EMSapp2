<script type="text/javascript" src="js/customJquery.js"></script>
<body>
	<?php 
	//If there is session coming from addPatient -> auto-fill
	If($_SESSION['patientFname'] & $_SESSION['patientLname']) {
    	
    	fillDemographic();
    	include(TEMPLATE_BACK. DS . "varConvert.php");
	}
	?>
	<?php 
	include(TEMPLATE_BACK. DS. "appNav.php");
	
	?>
	<!-- Navgiation Start Here -->
	<?php 
	include(TEMPLATE_BACK. DS. "patientReportApp/nav.php")
	?>
	<!-- Navgiation End Here -->
	
	<form class="container-fluid" method="POST" id="accordion">
	    <!-- Dispatch Panel Start Here -->
	    <?php 
	       include(TEMPLATE_BACK. DS. "patientReportApp/dispatchForm.php")
	    ?>
		
	   <!---------------- Disptach Panel End Here------------------- -->
	
	   <!------------------------- Demographic Panel Start Here--------------- -->
	     <?php 
	       include(TEMPLATE_BACK. DS. "pcrProcess/demographicProcess.php")
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
			<div class="col-12 submitRow">
				<input class="btn btn-primary" id="pcrSubmit" name="pcrSubmit" type="submit" value="Submit"></input>
			</div>
		</div>
		<?php 
		
		insertDispatchForm();
		
		?>
		
	</form>
</body>
