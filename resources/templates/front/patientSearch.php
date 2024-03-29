
<div class="card-header" id="headingOne">
  <button class="btn btn-primary" id="btnSearchPatient" name="btnSearchPatient" type="submit" value="SEARCH PATIENT" onclick="loaddata();">
      <i class="fas fa-search"></i>
      Search Patients
  </button>
  <button class="btn btn-primary" id="btnSearchPatient" name="btnSearchAll" type="submit" value="SEARCH All" onclick="loadall();">
      <i class="fas fa-search"></i>
      Search All
  </button>
</div>
<div class="container-fluid my-2 py-2 bg-gray">   
    <div class="form-row">
    	<div class="form-group col-sm">
    		<label>First Name:</label>
    		<input type="text" class="form-control" name="patientFname" id="patientFname" value=""></input>
    	</div>
    	<div class="form-group col-sm">
    		<label class="pr-5">MI:</label>
    		<input type="text" class="form-control" name="patientMname" id="patientMname" value=""></input>
    	</div>
    	<div class="form-group col-sm">
    		<label>Last Name:</label>
    		<input type="text" class="form-control" name="patientLname" id="patientLname" value=""></input>
    	</div>
    </div>
    
    <div class="form-row">
    	<div class="form-group col-lg">
    		<label>Address:</label>
    		<input type="text" class="form-control" name="patientAddress" id="patientAddress"></input>
    	</div>
    </div>
    
    <div class="form-row">
    	<div class="form-group col-sm">
    		<label>Apt/Unit #</label>
    		<input type="text" class="form-control" name="patientAptUnit" id="patientAptUnit"></input>
    	</div>
    	<div class="form-group col-sm">
    		<label>Phone#1</label>
    		<input type="text" class="form-control" name="patientPhone1" id="patientPhone1"></input>
    	</div>
    	<div class="form-group col-sm">
    		<label>Phone#2</label>
    		<input type="text" class="form-control" name="patientPhone2" id="patientPhone2"></input>
    	</div>
    </div>
    
    <div class="form-row">
    	<div class="form-group col-sm">
    		<label>City</label>
    		<input type="text" class="form-control" name="patientCity"id="demographicCity"></input>
    	</div>
    	<div class="form-group col-sm">
    		<label>State</label>
    		<input type="text" class="form-control" name="patientState"id="demographicState"></input>
    	</div>
    	<div class="form-group col-sm">
    		<label>Zip</label>
    		<input type="text" class="form-control" name="patientZipcode"id="demographicZip"></input>
    	</div>
    </div>
    
    <div class="form-row">
    	<div class="form-group col-sm">
    		<label class="pr-5">DOB</label>
    		<input type="text" class="form-control" name="patientDOB" id="demographicDOB"></input>
    	</div>
    	<div class="form-group col-sm">
    		<label class="pr-5">Age</label>
    		<input type="text" class="form-control" name="patientAge" id="demographicAge"></input>
    	</div>
    	<div class="form-group col-sm">
    		<label>Gender</label>
    		<input type="text" class="form-control" name="patientGender" id="demographicGender"></input>
    	</div>
    	<div class="form-group col-sm">
    		<label class="pr-5">SS#</label>
    		<input type="text" class="form-control" name="patientSS" id="demographicSS#"></input>
    	</div>
    </div>
    
    <div class="form-row">
    	<div class="form-group col-8">
    		<label class="pr-5">Emergency Contact</label>
    		<input type="text" class="form-control" name="patientEmerContact" id="demographicEcontact"></input>
    	</div>
    	<div class="form-group col-4">
    		<label class="pr-5">Phone</label>
    		<input type="text" class="form-control" name="patientEmerPhone" id="demographicEcontact"></input>
    	</div>
    </div>
</div>

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
        				<label>Patient Id</label>
        				<input type="text" name="modalId" id="modalId" class="form-control">
        			</div>
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
        				<label>Date of Birth: </label>
        				<input type="text" name="dob" id="dob" class="form-control">
        			</div>
        			<div class="form-row">
        				<label>Phone #1: </label>
        				<input type="text" name="phone1" id="phone1" class="form-control">
        			</div>
        			<button type="submit" id="selectSubmit" name="selectSubmit" class="my-2 btn btn-primary">Initialize PCR</button>
        			<button type="submit" id="updatePatient" name="updatePatient" class="my-2 btn btn-primary">Update Patient</button>
        		</form>
      		</div>
    	</div>
	</div>
</div>
<!-- Modal -->
<div class="container-fluid my-2 py-2" id="display_info">   
</div>