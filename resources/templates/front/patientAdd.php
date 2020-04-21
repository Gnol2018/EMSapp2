<script>


function calculateAge(birthDate, otherDate) {
	birthDate = new Date(birthDate);
	otherDate = new Date(otherDate);
	
	
	var years =  (otherDate.getFullYear() - birthDate.getFullYear());
	
	 if (otherDate.getMonth() < birthDate.getMonth() || 
		        otherDate.getMonth() == birthDate.getMonth() && otherDate.getDate() < birthDate.getDate()) {
		        years--;
		    }
	
    return years;
}

function showAge() {
	//Get patient date of birth
	var patientDOB = document.getElementById("patientDOB").value ;
	//Get today date
	var d  = new Date();
	var today = d.toLocaleDateString();
	//Calculate the Patient Age using the above function
	var age = calculateAge(patientDOB, today); // Format: MM/DD/YYYY
	//Output to the textbox
	document.getElementById("patientAge").value = age;
}





</script>

	
    <form class="container-fluid" method="POST" id="accordion">
    <div class="card">
        <div class="card-header" id="headingOne">
        	<h5 class="mb-0" >
        		<a class="btn btn-link" data-toggle="collapse" data-target="#addDemo" aria-expanded="false" aria-controls="collapseOne">
        		ADD  PATIENT 
        		</a>
        	</h5>
          
        </div>
        <div class="container-fluid my-2 py-2 collapse show" id="addDemo">   
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
            		<input required type="text" class="form-control" name="patientAddress" id="patientAddress" value=""></input>
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
            		<input required type="text" class="form-control" name="patientCity"id="patientCity" value=""></input>
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
            		<input  type="text" class="form-control" name="patientDOB" id="patientDOB" value=""></input>
            	</div>
            	<div class="form-group col-sm">
            		<label class="pr-5">Age</label>
            		<input onclick="showAge()" type="text" class="form-control" name="patientAge" id="patientAge" value=""></input>
            	</div>
            	<div class="form-group col-sm">
            		<label>Gender</label>
            		<input type="text" class="form-control" name="patientGender" id="patientGender" value=""></input>
            	</div>
            	<div class="form-group col-sm">
            		<label class="pr-5">Race</label>
            		<input type="text" class="form-control" name="patientRace" id="patientRace" value=""></input>
            	</div>
            </div>
            
            <div class="form-row">
            	<div class="form-group col-sm">
            		<label class="pr-5">SS#</label>
            		<input type="text" class="form-control" name="patientSS" id="patientSS" value=""></input>
            	</div>
            	<div class="form-group col-sm">
            		<label class="pr-5">Emergency Contact</label>
            		<input type="text" class="form-control" name="patientEmerContact" id="demographicEcontact" value=""></input>
            	</div>
            	<div class="form-group col-sm">
            		<label class="pr-5">Phone</label>
            		<input type="text" class="form-control" name="patientEmerPhone" id="demographicEcontact" value=""></input>
            	</div>
            </div>
            
         
            
            <div class="form-row">
        		<div class="col-sm">
    		    	<p><a class="btn btn-primary" data-toggle="collapse" href="#insuranceInfo" role="button" aria-expanded="false" aria-controls="insuranceInfo">
    		    	Insurance Information</a><p>
    		    	<div class="collapse" id="insuranceInfo">
    		    		<div class="form-row">
    		    			<div class="form-control col-sm">
    		    				<label>Primary Insurance Policy</label>
    		    				<select name="insurPolicy1" class="form-control form-control-sm">
    								<option>&lt;Select&gt;</option>
    								<option>Auto Insurance</option>
    								<option>Commercial</option>
    								<option>Group</option>
    								<option>Health Maintenance Organization</option>
    								<option>Individual</option>
    								<option>Litigation</option>
    								<option>Long-term Disability</option>
    								<option>Medicaid</option>
    								<option>Medicare Conditionally Primary</option>
    								<option>Medicare Part B</option>
    								<option>Medicare Primary</option>
    								<option>Medicare Sec. Black Lung</option>
    								<option>Medicare Sec. Disabled Ben. Under Age 65 w/large Grp Plan</option>
    								<option>Medicare Sec. End Stage renal Disease</option>
    								<option>Medicare Sec. No-Fault Ins. Incl. Auto is Primary</option>
    								<option>Medicare Sec. Other Liability Insurance is Primary</option>
    								<option>Medicare Sec. Pub. Health Svc. (PHS) or Other Fed. Agency</option>
    								<option>Medicare Sec. Veterans Administration</option>
    								<option>Medicare Sec. Workers Compensation</option>
    								<option>Medicare Sec. Working Age Beneficiary</option>
    								<option>Medigap (3051)</option>
    								<option>Medigap Part B</option>
    								<option>Personal Payment (Cash – No Insurance)</option>
    								<option>Supplemental</option>
    								<option>Workers Compensation (3051)</option>
    								<option>Other</option>
    							</select>
    							<div class="form-row">
    								<div class="col-sm">
    									<label>Company</label>
    									<input name="insurCompany1" class="form-control" id="companyName1"></input>
    								</div>
    								<div class="col-sm">
    									<label>Address:</label>
    									<input name="insurAddress1" class="form-control" id="companyAddress1"></input>
    								</div>
    							</div>
    							
    							<div class="form-row">
    								<div class="col-sm">
    									<label>Phone</label>
    									<input name="insurPhone1" class="form-control" id="companyPhone1"></input>
    								</div>
    								<div class="col-sm">
    									<label>Group#</label>
    									<input name="insurGroup1" class="form-control" id="companyGroup"></input>
    								</div>
    							</div>
    							
    							<div class="form-row">
    								<div class="col-sm">
    									<label>Policy</label>
    									<input name="insurPol1" class="form-control" id="companyPolicy1"></input>
    								</div>
    								<div class="col-sm">
    									<label>Policy Holder</label>
    									<input name="insurHolder1" class="form-control" id="companyHolder1"></input>
    								</div>
    								<div class="col-sm">
    									<label>SS#</label>
    									<input name="insurSS1" class="form-control" id="companySS1"></input>
    								</div>
    								<div class="col-sm">
    									<label>DOB:</label>
    									<input name="insurDOB1" class="form-control" id="companyDOB1"></input>
    								</div>
    							</div>
    							
    							<div class="form-row">
    								<div class="col-sm">
    									<label>Medicare#:</label>
    									<input name="insurMedicare1" class="form-control" id="companyMedicare1"></input>
    								</div>
    								<div class="col-sm">
    									<label>Medicaid#:</label>
    									<input name="insurMedicaid1" class="form-control" id="companyMedicaid1"></input>
    								</div>
    								<div class="col-sm">
    									<label>Claim#:</label>
    									<input name="insurClaim1" class="form-control" id="companyClaim1"></input>
    								</div>
    							</div>
    							
    		    			</div>
    		    		</div>
    		    	</div>
    	    	</div>
        	</div>
        	<!-- Insurance Div End -->
        	<div class="form-row mt-2">
            	<div class="form-group col">
            		<button class="btn btn-primary" id="btnAddPatient" onclick="return confirm('Are you sure to add the below patient?')" name="btnAddPatient" type="submit">
          				<i class="fas fa-plus mr-2"></i>Add Patient
         		 	</button>
            	</div>	
            </div>
        </div>
    </div>
    </form>
<!-- <div class="card-header" id="headingOne">
  <a class="btn btn-primary" data-toggle="modal" data-target="#myModal">Open Modal</a>
</div> -->


    <div class="container-fluid my-2 py-2" id="display_info">   
    </div>