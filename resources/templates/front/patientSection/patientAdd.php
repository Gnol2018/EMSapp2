<form method="POST">
<div class="card-header" id="headingOne">
	<button class="btn btn-primary" id="btnAddPatient" onclick="return confirm('Are you sure to add the below patient?')" name="btnAddPatient" type="submit">
  		<i class="fas fa-plus mr-2"></i>Add Patient
  	</button>
  
</div>
<div class="container-fluid my-2 py-2">   
    <div class="form-row">
    	<div class="form-group col-sm">
    		<label>First Name:</label>
    		<input required type="text" class="form-control" name="patientFname" id="patientFname" value=""></input>
    	</div>
    	<div class="form-group col-sm">
    		<label class="pr-5">MI:</label>
    		<input type="text" class="form-control" name="patientMname" id="patientMname" value=""></input>
    	</div>
    	<div class="form-group col-sm">
    		<label>Last Name:</label>
    		<input required type="text" class="form-control" name="patientLname" id="patientLname" value=""></input>
    	</div>
    </div>
    
    <div class="form-row">
    	<div class="form-group col-lg">
    		<label>Address:</label>
    		<input type="text" class="form-control" name="patientAddress" id="patientAddress" value=""></input>
    	</div>
    </div>
    
    <div class="form-row">
    	<div class="form-group col-sm">
    		<label>Apt/Unit #</label>
    		<input type="text" class="form-control" name="patientAptUnit" id="patientAptUnit" value=""></input>
    	</div>
    	<div class="form-group col-sm">
    		<label>Phone#1</label>
    		<input type="text" class="form-control" name="patientPhone1" id="patientPhone1" value=""></input>
    	</div>
    	<div class="form-group col-sm">
    		<label>Phone#2</label>
    		<input type="text" class="form-control" name="patientPhone2" id="patientPhone2" value=""></input>
    	</div>
    </div>
    
    <div class="form-row">
    	<div class="form-group col-sm">
    		<label>City</label>
    		<input type="text" class="form-control" name="patientCity"id="patientCity" value=""></input>
    	</div>
    	<div class="form-group col-sm">
    		<label>State</label>
    		<input type="text" class="form-control" name="patientState"id="patientState" value=""></input>
    	</div>
    	<div class="form-group col-sm">
    		<label>Zip</label>
    		<input type="text" class="form-control" name="patientZipcode"id="patientZipcode" value=""></input>
    	</div>
    </div>
    
    <div class="form-row">
    	<div class="form-group col-sm">
    		<label class="pr-5">DOB</label>
    		<input type="text" class="form-control" name="patientDOB" id="patientDOB" value=""></input>
    	</div>
    	
    	<div class="form-group col-sm">
    		<label>Gender</label>
    		<input type="text" class="form-control" name="patientGender" id="patientGender" value=""></input>
    	</div>
    	<div class="form-group col-sm">
    		<label class="pr-5">SS#</label>
    		<input type="text" class="form-control" name="patientSS" id="patientSS" value=""></input>
    	</div>
    </div>
    
    <div class="form-row">
    	<div class="form-group col-8">
    		<label class="pr-5">Emergency Contact</label>
    		<input type="text" class="form-control" name="patientEmerContact" id="demographicEcontact" value=""></input>
    	</div>
    	<div class="form-group col-4">
    		<label class="pr-5">Phone</label>
    		<input type="text" class="form-control" name="patientEmerPhone" id="demographicEcontact" value=""></input>
    	</div>
    </div>
</div>



</form>
<!-- <div class="card-header" id="headingOne">
  <a class="btn btn-primary" data-toggle="modal" data-target="#myModal">Open Modal</a>
</div> -->

<!-- Initialize Modal -->
<div id="myModal" class="modal fade " role="dialog">
	<div class=" modal-dialog">
	<!-- Modal Content -->
    	<div class="bg-dark text-light modal-content">
    		<div class="modal-header">
    			<h4 class="modal-title">Selected Patient</h4>
    		</div>
    		<div class="modal-body">
        		<form method="POST" class="form-group">
        			<div class="form-row">
        				<label>First Name</label>
        				<input type="text" name="firstName" id="firstName" class="form-control">
        			</div>
        			<div class="form-row">
        				<label>Last Name</label>
        				<input type="text" name="lastName" id="lastName" class="form-control">
        			</div>
        			<div class="form-row">
        				<label>Address</label>
        				<input type="text" name="address" id="address" class="form-control">
        			</div>
        			<div class="form-row">
        				<label>Patient #1: </label>
        				<input type="text" name="phone1" id="phone1" class="form-control">
        			</div>
        			<div class="form-row">
        				<label>Patient #2: </label>
        				<input type="text" name="phone2" id="phone2" class="form-control">
        			</div>
        			<button type="submit" name="selectSubmit" class="my-2 btn btn-primary">Select Patient</button>
        		</form>
      		</div>
    	</div>
	</div>
</div>
<!-- Modal -->
<div class="container-fluid my-2 py-2" id="display_info">   
</div>