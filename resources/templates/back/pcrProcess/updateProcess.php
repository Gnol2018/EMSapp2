<form class="container-fluid" method="POST" id="accordion">
<div class="card">
    <div class="card-header" id="headingOne">
    	<h5 class="mb-0" >
    		<a class="btn btn-link" data-toggle="collapse" data-target="#patientUpdate" aria-expanded="false" aria-controls="collapseOne">
    		UPDATE PATIENT
    		</a>
    	</h5>
    </div>
    
    <div class="container-fluid my-2 py-2 collapse show" id="patientUpdate">
    		    
    <div class="form-row">
    	<div class="form-group col-sm">
    		<label>First Name:</label>
    		<input type="text" class="form-control" name="patientFname" id="patientFname" value="<?php echo $patientFname ?>"></input>
    	</div>
    	<div class="form-group col-sm">
    		<label class="pr-5">MI:</label>
    		<input type="text" class="form-control" name="patientMname" id="patientMname" value=""></input>
    	</div>
    	<div class="form-group col-sm">
    		<label>Last Name:</label>
    		<input type="text" class="form-control" name="patientLname" id="patientLname" value="<?php echo $patientLname?>"></input>
    	</div>
    </div>
    
    <div class="form-row">
    	<div class="form-group col-lg">
    		<label>Address:</label>
    		<input type="text" class="form-control" name="patientAddress" id="patientAddress" value="<?php echo $patientAddress ?>"></input>
    	</div>
    </div>
    
    <div class="form-row">
    	<div class="form-group col-sm">
    		<label>Apt/Unit #</label>
    		<input type="text" class="form-control" name="patientAptUnit" id="patientAptUnit"></input>
    	</div>
    	<div class="form-group col-sm">
    		<label>Phone#1</label>
    		<input type="text" class="form-control" name="patientPhone1" id="patientPhone1" value="<?php echo $patientPhone1 ?>"></input>
    	</div>
    	<div class="form-group col-sm">
    		<label>Phone#2</label>
    		<input type="text" class="form-control" name="patientPhone2" id="patientPhone2" value="<?php echo $patientPhone2 ?>"></input>
    	</div>
    </div>
    
    <div class="form-row">
    	<div class="form-group col-sm">
    		<label>City</label>
    		<input type="text" class="form-control" name="patientCity" id="demographicCity" value="<?php echo $patientCity ?>"></input>
    	</div>
    	<div class="form-group col-sm">
    		<label>State</label>
    		<input type="text" class="form-control" name="patientState" id="demographicState" value="<?php echo $patientState ?>"></input>
    	</div>
    	<div class="form-group col-sm">
    		<label>Zip</label>
    		<input type="text" class="form-control" name="patientZipcode" id="demographicZip" value="<?php echo $patientZipcode ?>"></input>
    	</div>
    </div>
    
    <div class="form-row">
    	<div class="form-group col-sm">
    		<label class="pr-5">DOB</label>
    		<input type="text" class="form-control" name="patientDOB" id="demographicDOB" value="<?php echo $patientDOB?>"></input>
    	</div>
    	<div class="form-group col-sm">
    		<label class="pr-5">Age</label>
    		<input type="text" class="form-control" name="patientAge" id="demographicAge" value="<?php echo $patientAge?>"></input>
    	</div>
    	<div class="form-group col-sm">
    		<label>Gender</label>
    		<input type="text" class="form-control" name="patientGender" id="demographicGender" value="<?php echo $patientGender ?>"></input>
    	</div>
    	<div class="form-group col-sm">
    		<label class="pr-5">Race</label>
    		<input type="text" class="form-control" name="patientRace" id="demographicRace" value="<?php echo $patientRace ?>"></input>
    	</div>
    </div>
    
    <div class="form-row">
    	<div class="form-group col-sm">
    		<label class="pr-5">SS#</label>
    		<input type="text" class="form-control" name="patientSS" id="demographicSS#" value="<?php echo $patientSS ?>"></input>
    	</div>
    	<div class="form-group col-sm">
    		<label class="pr-5">Emergency Contact</label>
    		<input type="text" class="form-control" name="patientEmerContact" id="demographicEcontact"></input>
    	</div>
    	<div class="form-group col-sm">
    		<label class="pr-5">Phone</label>
    		<input type="text" class="form-control" name="patientEmerPhone" id="demographicEcontact"></input>
    	</div>
    </div>
    
    	<div class="form-row">
    		<div class="col-sm">
        		<p><a class="btn btn-primary" data-toggle="collapse" href="#insuranceInfo" role="button" aria-expanded="false" aria-controls="insuranceInfo">
        		Insurance Information</a><p>
        		<div class="collapse" id="insuranceInfo">
        			<div class="form-row">
        				<div class="form-control col-sm">
        					<div class="form-row">
        						<div class="col-sm">
        	    					<label>Primary Insurance Policy</label>
        	    					<input type = "text" class="form-control" name="insurPolicy1" id="insurPolicy1" value="<?php echo $insurPolicy1?>"></input>
        						</div>
        					</div>
    					<div class="form-row">
    						<div class="col-sm">
    							<label>Company</label>
    							<input name="insurCompany1" class="form-control" id="companyName1" value="<?php echo $insurCompany1?>"></input>
    						</div>
    						<div class="col-sm">
    							<label>Address:</label>
    							<input name="insurAddress1" class="form-control" id="companyAddress1" value="<?php echo $insurAddress1?>"></input>
    						</div>
    					</div>
    					
    					<div class="form-row">
    						<div class="col-sm">
    							<label>Phone</label>
    							<input name="insurPhone1" class="form-control" id="companyPhone1" value="<?php echo $insurPhone1 ?>"></input>
    						</div>
    						<div class="col-sm">
    							<label>Group#</label>
    							<input name="insurGroup1" class="form-control" id="companyGroup" value="<?php echo $insurGroup1 ?>"></input>
    						</div>
    					</div>
    					
    					<div class="form-row">
    						<div class="col-sm">
    							<label>Policy</label>
    							<input name="insurPol1" class="form-control" id="companyPolicy1" value="<?php echo $insurPol1?>"></input>
    						</div>
    						<div class="col-sm">
    							<label>Policy Holder</label>
    							<input name="insurHolder1" class="form-control" id="companyHolder1" value="<?php echo $insurHolder1?>"></input>
    						</div>
    						<div class="col-sm">
    							<label>SS#</label>
    							<input name="insurSS1" class="form-control" id="companySS1" value="<?php echo $insurSS1?>"></input>
    						</div>
    						<div class="col-sm">
    							<label>DOB:</label>
    							<input name="insurDOB1" class="form-control" id="companyDOB1" value="<?php echo $insurDOB1?>"></input>
    						</div>
    					</div>
    					
    					<div class="form-row">
    						<div class="col-sm">
    							<label>Medicare#:</label>
    							<input name="insurMedicare1" class="form-control" id="companyMedicare1" value="<?php echo $insurMedicare1?>"></input>
    						</div>
    						<div class="col-sm">
    							<label>Medicaid#:</label>
    							<input name="insurMedicaid1" class="form-control" id="companyMedicaid1" value="<?php echo $insurMedicaid1?>"></input>
    						</div>
    						<div class="col-sm">
    							<label>Claim#:</label>
    							<input name="insurClaim1" class="form-control" id="companyClaim1" value="<?php echo $insurClaim1?>"></input>
    						</div>
    					</div>
    					
        			</div>
        			
    	    		</div>
    	    	</div>
        	</div>
    	</div>
    	<div class="form-row">
    		 <button class="btn btn-primary" id="btnUpdatePatient" name="btnUpdatePatient" type="submit"  onclick="return confirm('Are you sure to update the patient?')">
                  Update Patient
              </button>
    	</div>
    </div>
</div>
</form>