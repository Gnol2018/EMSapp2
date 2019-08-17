<body>
	<?php 
	
	include(TEMPLATE_BACK. DS. "appNav.php");
	?>
	<?php 
	
	if($pageLocation == "/EMSapp/public/addPatient.php" ) {
	    
	    include(TEMPLATE_FRONT . DS . "patientSection/patientAdd.php");
	    
	} elseif ($pageLocation == "/EMSapp/public/searchPatient.php" ) {
	    
	    include(TEMPLATE_FRONT . DS . "patientSection/patientSearch.php");
	    
	} else {
	    
	    return 0;
	    
	}
	
	?>
	
</body>