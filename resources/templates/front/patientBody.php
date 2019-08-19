<body>
	<?php 
	
	include(TEMPLATE_BACK. DS. "appNav.php");
	?>
	<?php 
	
	if($pageLocation == "/EMSapp/public/addPatient.php" ) {
	    
	    include(TEMPLATE_FRONT . DS . "patientReportApp/patientAdd.php");
	    
	} elseif ($pageLocation == "/EMSapp/public/searchPatient.php" ) {
	    
	    include(TEMPLATE_FRONT . DS . "patientReportApp/patientSearch.php");
	    
	} else {
	    
	    return 0;
	    
	}
	
	?>
	
</body>