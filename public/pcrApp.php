<?php
require_once("../resources/pdoConfig.php");
if(empty($_SESSION['userName'])) {
    redirect('index.php');
    
} else {
    findUserRole();
}
echo $_SESSION['runId'];

?>
<!DOCTYPE html>
<html lang="en">
<?php include(TEMPLATE_FRONT . DS . "appHeader.php") ?>

<body>
<?php 
/*if(!empty($_SESSION['runId'])) {
    fillDispatch1();
    fillDemographic1();
}*/
?>
<?php 
include(TEMPLATE_FRONT. DS . "appNav.php");
?>

<?php 
include(TEMPLATE_BACK. DS. "patientReportApp/nav.php")
?>
<script type="text/javascript" src="js/customJquery.js"></script>
<form class="container-fluid" method="POST" id="accordion">
	<?php 
    if(!empty($_SESSION['runId'])) {
        fillDispatch1();
        fillDemographic1();
    }
    
    if(isset($_POST['pcrSubmit'])) {
        insertEntireForm();
        
        //insertPresentProblem();
        // insertVital();
        // insertNarrativeNote();
        // insertSignature();
        //insertDisposition();
        // insertCrew();
        // insertAPCF();
    }
    ?>
    <!-- Dispatch Panel Start Here -->
    <?php 
     //  include(TEMPLATE_BACK. DS. "pcrProcess/dispatchProcess.php")
    ?>
	
   <!---------------- Disptach Panel End Here------------------- -->

   <!------------------------- Demographic Panel Start Here--------------- -->
     <?php 
       //include(TEMPLATE_BACK. DS. "pcrProcess/demographicProcess.php")
    ?>
	<!-- Demogrpahic Panel End Here -->
	
	<!-- Presenting Problem Start Here -->
	<?php 
	  include(TEMPLATE_BACK. DS. "patientReportApp/presentingProblem.php")
	?>
	<script>
    $("#btnAdd").click(function(){
    	var btnAdd = $('#btnAdd');
    	//Select last ID of the last row
    	var vitalTime = $('.cloned-row .col-sm input[type=text]:nth-child(2)').last().attr('id');
    	
    	var vitalCons = $('.cloned-row .vitalCons input[type=radio]').last().attr('name');
    	var vitalResRate = $('.cloned-row .resRate input[type=text]:nth-child(3)').last().attr('id');
    	
    	var split_id = vitalTime.split('_');
    	console.log(split_id);
    	var splitResRate = vitalResRate.split('_');
    	
    	//New Index
    	var index = Number(split_id[1]) + 1;
    	
    	//Testing Variable 
    	
    	console.log(vitalTime);
    	console.log(vitalResRate);
    	console.log(index);
    
    	$(rowNumber).val("Row_" + index); 
    	//Create Clone
    	var newRow = $(".cloned-row:last").clone(true);
    	console.log(newRow);
    	//Set new Id for textbox
    	 $(newRow).find('.col-sm input[type=text]:nth-child(2)').attr("id","vitalTime_"+index);
    	 
    	 //Set new Name for Radio Button
    	 $(newRow).find('.vitalCons input[type=radio]').attr("name","radCons" + index);
    	 $(newRow).find('.col-sm .rightPupils input[type=radio]').attr("name","radRightPupil" + index);
    	 $(newRow).find('.col-sm .leftPupils input[type=radio]').attr("name","radLeftPupil" + index);
    	 $(newRow).find('.vitalSkin input[type=radio]').attr("name","radSkin" + index);
    	 $(newRow).find('.vitalStatus input[type=radio]').attr("name","radStatus" + index);
    	 //Set new Name for Checkbox
    	 $(newRow).find('.resRate input[type=checkbox]').attr("name","vitalResCheck" + index + "[]");
    	 $(newRow).find('.vitalPulse input[type=checkbox]').attr("name","chkPulse" + index + "[]");
    	 
    	 $(newRow).find('.col-sm input[type=text]:nth-child(2)').attr("onclick","getClock(vitalTime_" + index + ")");
    	 //Set Value
    	 $(newRow).find('.col-sm input[type=text]:nth-child(2)').val("vitalTime_"+ index);
    	 
    	//Insert Element
    	$(newRow).insertAfter(".cloned-row:last");
    });
    
    //Drop Vital Sign Table
    
    $("#btnDrop").click(function(){
    	var btnDrop = $('#btnDrop');
    	//Select last ID of the last row
    	var vitalTime = $('.cloned-row .col-sm input[type=text]:nth-child(2)').last().attr('id');
    	var split_id = vitalTime.split('_');
    	if (split_id[1] > 0){
    		$(".cloned-row:last").remove();
    	}
    	else {
    		return false;
    	}
    	
    });
    </script>
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

	?>
	
</form>


</body>
</html>
