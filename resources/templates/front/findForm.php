<?php 
if(isset($_POST['searchSubmit'])) {
    if(isset($_POST['pcrId'])) { 
       $runId = $_POST['pcrId'];
       $_SESSION['runId'] = $runId;
    }
}
?>
<form method="post" action="" class="container-fluid">
	<div class="form-row my-2">
    	<h3>Print Patient Report based on Run Id </h3>
    	<input name="pcrId" class="form-control" type="text">
    </div>
	<!-- <div class="form-row my-2">
    	<h3>Search Patient Report based on Date </h3>
    	<input name="pcrDate" class="form-control" type="text">
    </div>
   
    <div class="form-row mt-2" >
    	<h3>Search Patient Report based on First Name and Last Name</h3>
    </div>
    <div class="form-row mb-2">
    	<label>First Name: </label>
    	<input name="pcrPatientFname" class="form-control" type="text">
    	<label>Last Name: </label>
    	<input name="pcrPatientLname" class="form-control" type="text">
   	</div>
   <div class="form-row mt-2" >
    	<h3>Search Patient Report based on Social Security</h3>
    </div>
    <div class="form-row mb-2">
    	<label>Social Securty Number: </label>
    	<input name="pcrPatientSS" class="form-control" type="text">
    </div>
     <div class="form-row my-2">
    	<h3>Search Patient Report based on User Id </h3>
    	<input name="pcrUserId" class="form-control" type="text">
    </div>
     -->
    <div class="row my-2">
		<div class="col">
			<input class="btn btn-primary" id="searchSubmit" name="searchSubmit" type="submit" value="Submit"></input>
		</div>
	</div> 
	
	<?php submitRunId()?>
	<?php pcrFindOnDate() ?>
	<?php pcrFindOnPatient() ?>
	<?php pcrFindOnSS()?>
</form>
