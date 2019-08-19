<body>
	<?php 
	include(TEMPLATE_BACK. DS. "appNav.php");
	?>
	<!-- Navgiation Start Here -->
	<?php 
	include(TEMPLATE_BACK. DS. "patientReportApp/nav.php")
	?>
	<!-- Navgiation End Here -->
	<?php 
	fillDispatch1();
	fillDemographic1();
	include(TEMPLATE_BACK . DS . "varConvert.php");
    //test whether the patient Run id is passed or not	
	
	/*$patientRunId = $_SESSION['patientRunId'];
	if(!empty($patientRunId)) {
	    
	    //Use run Id as an index to pull out database information
	    //make connection
	    $query = $conn->prepare('SELECT patientFname, patientLname, patientAddress, patientPhone1, patientPhone2,  patientZipcode, patientDOB, patientGender, patientSS, patientEmerContact, patientEmerPhone
                                FROM patients INNER JOIN pcrtable
                                ON patients.patientId = pcrtable.patientId
                                WHERE runId = ?');
	    $query->execute([$patientRunId]);
	    foreach($query as $row){
	        $patientFname = $row['patientFname'];
	        $patientLname = $row['patientLname'];
	        $patientAddress = $row['patientAddress'];
	        $patientPhone1 = $row['patientPhone1'];
	        $patientPhone2 = $row['patientPhone2'];
	        $patientZipcode = $row['patientZipcode'];
	        $patientDOB = $row['patientDOB'];
	        $patientGender = $row['patientGender'];
	        $patientSS = $row['patientSS'];
	        $patientEmercontact = $row['patientEmerContact'];
	    }
	    if(!empty($patientZipcode)) {
	        $queryZipcode = $conn->prepare('SELECT patientCity, patientState
	                                        FROM zipcodes
                                            WHERE patientZipcode = ?');
	        $queryZipcode->execute([$patientZipcode]);
	        foreach($queryZipcode as $row) {
	            $patientCity = $row['patientCity'];
	            $patientState = $row['patientState'];
	        }
	    }
	}
	
	?>
	
	<?php 
	if(!empty($patientRunId)) {
	    //make connection for Dispatch Form
	    $dispatchQuery = $conn->prepare('SELECT mileage, dispatchDate, runId, veId, agencyName, agencyLocation, locationCode, dispatchinfo, locationType, crossStreet, timeReceived, timeRoute, timeAtScene, timeFromScene, timeAtDes, timeInService, timeInQuarter
                                        FROM dispatchtable 
                                        WHERE runId = ?');
	    $dispatchQuery->execute([$patientRunId]);
	    foreach ($dispatchQuery as $row) {
	        $milleage = $row['mileage'];
	        $dispatchDate = $row['dispatchDate'];
	        $runId = $row['runId'];
	        $veId = $row['veId'];
	        $agencyName = $row['agencyName'];
	        $agencyLocation = $row['agencyLocation'];
	        $locationCode = $row['locationCode'];
	        $dispatchinfo = $row['dispatchinfo'];
	        $locationType = $row['locationType'];
	        $crossStreet = $row['crossStreet'];
	        $timeReceived = $row['timeReceived'];
	        $timeRoute = $row['timeRoute'];
	        $timeAtScene = $row['timeAtScene'];
	        $timeFromScene = $row['timeFromScene'];
	        $timeAtDes = $row['timeAtDes'];
	        $timeInService = $row['timeInService'];
	        $timeInQuarter = $row['timeInQuarter'];
	    }    
	}*/
	?>
	<form class="container-fluid" method="POST">
	<!-- Dispatcher Start Right Here -->
 	 <?php 
      include(TEMPLATE_BACK. DS. "pcrProcess/dispatchProcess.php");
     ?>
	<!-- Dispatcher End Right Here -->
	
	<!-- Demographic Start Here -->
	<?php 
	include(TEMPLATE_BACK. DS. "pcrProcess/demographicProcess.php");
	?>
	<!-- Demographic End  Here -->
	
	<!-- Presenting Problem Start Here -->	
	<?php 
	include(TEMPLATE_BACK. DS. "pcrProcess/presentingProblem.php");
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
			<input class="btn btn-primary" id="medicSubmit" name="medicSubmit" type="submit" value="Submit"></input>
		</div>
	</div>	
	<script type="text/javascript" src="js/customJquery.js"></script>
	</form>	
</body>