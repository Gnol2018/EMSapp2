<body>
	<?php 
	include(TEMPLATE_BACK. DS. "appNav.php")
	?>
	<!-- Navgiation Start Here -->
	<?php 
	include(TEMPLATE_BACK. DS. "patientReportApp/nav.php")
	?>
	<!-- Navgiation End Here -->
	
	<form class="container-fluid" method="POST" id="accordion">
	    <!-- Dispatch Panel Start Here -->
	    <?php 
	       include(TEMPLATE_BACK. DS. "pcrProcess/dispatchProcess.php")
	    ?>
		
	   <!---------------- Disptach Panel End Here------------------- -->
	
	   <!------------------------- Demographic Panel Start Here--------------- -->
	     <?php 
	       include(TEMPLATE_BACK. DS. "pcrProcess/demographicProcess.php")
	    ?>
		<!-- Demogrpahic Panel End Here -->
		
		
		<div class="row">	
			<div class="col-12 submitRow">
				<input class="btn btn-primary" id="dispatchSubmit" name="dispatchSubmit" type="submit" value="Submit"></input>
			</div>
		</div>
		
	</form>
</body>