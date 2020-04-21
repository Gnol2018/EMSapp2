
<form class="container-fluid" method="POST">
<?php 
    if(!empty($_SESSION['runId'])) {
        fillDispatch1();
        fillDemographic1();
    }
    if(isset($_POST['medicSubmit'])) {
        $letSee = insertEntireForm();
        echo $letSee;
    }
?>


<!-- Presenting Problem Start Here -->	
<?php 
    include(TEMPLATE_BACK. DS. "patientReportApp/presentingProblem.php");
?>
<!-- Presenting Problem End Here -->
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