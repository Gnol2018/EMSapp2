<div class="card">
			<div class="card-header" id="headingOne">
		      <h5 class="mb-0">
		        <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#demographicPanel" aria-expanded="true" aria-controls="collapseOne">
		          D E M O G R A P H I C
		        </a>
		      </h5>
		    </div>
		    <div class="container-fluid my-2 py-2 collapse" id="demographicPanel">
		    
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
		    			<label class="pr-5">SS#</label>
		    			<input type="text" class="form-control" name="patientSS" id="demographicSS#" value="<?php echo $patientSS ?>"></input>
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
				    			<div class="form-control col-sm">
				    				<label>Secondary Insurance Policy</label>
				    				<select name="insurPolicy2" class="form-control form-control-sm">
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
											<input name="insurCompany2" class="form-control" id="companyName2"></input>
										</div>
										<div class="col-sm">
											<label>Address:</label>
											<input name="insurAddress2" class="form-control" id="companyName2"></input>
										</div>
									</div>
									
									<div class="form-row">
										<div class="col-sm">
											<label>Phone</label>
											<input name="insurPhone2" class="form-control" id="companyPhone2"></input>
										</div>
										<div class="col-sm">
											<label>Group#</label>
											<input name="insurGroup2" class="form-control" id="companyGroup2"></input>
										</div>
									</div>
									
									<div class="form-row">
										<div class="col-sm">
											<label>Policy</label>
											<input name="insurPol2" class="form-control" id="companyPolicy2"></input>
										</div>
										<div class="col-sm">
											<label>Policy Holder</label>
											<input name="insurHolder2" class="form-control" id="companyHolder2"></input>
										</div>
										<div class="col-sm">
											<label>SS#</label>
											<input name="insurSS2" class="form-control" id="companySS2"></input>
										</div>
										<div class="col-sm">
											<label>DOB:</label>
											<input name="insurDOB2" class="form-control" id="companyDOB2"></input>
										</div>
									</div>
									
									<div class="form-row">
										<div class="col-sm">
											<label>Medicare#:</label>
											<input class="form-control" id="insurMedicare2"></input>
										</div>
										<div class="col-sm">
											<label>Medicaid#:</label>
											<input class="form-control" id="insurMedicaid2"></input>
										</div>
										<div class="col-sm">
											<label>Claim#:</label>
											<input class="form-control" id="insurClaim2"></input>
										</div>
									</div>
				    			</div>
				    		</div>
				    	</div>
			    	</div>
		    	</div>
		    
		    </div>
		</div>