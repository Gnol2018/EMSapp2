		<div class="card">
			<div class="card-header" id="headingOne">
		      <h5 class="mb-0">
		        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#demographicPanel" aria-expanded="true" aria-controls="collapseOne">
		          D E M O G R A P H I C
		        </button>
		      </h5>
		    </div>
		    <div class="container-fluid my-2 py-2 collapse" id="demographicPanel">
		    	<div class="form-row">
		    		<div class="form-group col-sm">
		    			<label>First Name:</label>
		    			<input type="text" class="form-control" id="demographicFname" required ></input>
		    		</div>
		    		<div class="form-group col-sm">
		    			<label class="pr-5">MI:</label>
		    			<input type="text" class="form-control" id="demographicMname"></input>
		    		</div>
		    		<div class="form-group col-sm">
		    			<label>Last Name:</label>
		    			<input type="text" class="form-control" id="demographicLname" required></input>
		    		</div>
		    	</div>
		    	
		    	<div class="form-row">
		    		<div class="form-group col-lg">
		    			<label>Address:</label>
		    			<input type="text" class="form-control" id="demographicAddress" required></input>
		    		</div>
		    	</div>
		    	
		    	<div class="form-row">
		    		<div class="form-group col-sm">
		    			<label>Apt/Unit #</label>
		    			<input type="text" class="form-control" id="demographicAptUnit"></input>
		    		</div>
		    		<div class="form-group col-sm">
		    			<label>Phone#1</label>
		    			<input type="text" class="form-control" id="demographicPhone1"></input>
		    		</div>
		    		<div class="form-group col-sm">
		    			<label>Phone#2</label>
		    			<input type="text" class="form-control" id="demographicPhone2"></input>
		    		</div>
		    	</div>
		    	
		    	<div class="form-row">
		    		<div class="form-group col-sm">
		    			<label>City</label>
		    			<input type="text" class="form-control" id="demographicCity"></input>
		    		</div>
		    		<div class="form-group col-sm">
		    			<label>State</label>
		    			<input type="text" class="form-control" id="demographicState"></input>
		    		</div>
		    		<div class="form-group col-sm">
		    			<label>Zip</label>
		    			<input type="text" class="form-control" id="demographicZip"></input>
		    		</div>
		    	</div>
		    	
		    	<div class="form-row">
		    		<div class="form-group col-sm">
		    			<label class="pr-5">DOB</label>
		    			<input type="text" class="form-control" id="demographicDOB" required></input>
		    		</div>
		    		<div class="form-group col-sm">
		    			<label class="pr-5">Age</label>
		    			<input type="text" class="form-control" id="demographicAge"></input>
		    		</div>
		    		<div class="form-group col-sm">
		    			<label>Gender</label>
		    			<input type="text" class="form-control" id="demographicGender"></input>
		    		</div>
		    		<div class="form-group col-sm">
		    			<label class="pr-5">SS#</label>
		    			<input type="text" class="form-control" id="demographicSS#"></input>
		    		</div>
		    	</div>
		    	
		    	<div class="form-row">
		    		<div class="form-group col-8">
		    			<label class="pr-5">Emergency Contact</label>
		    			<input type="text" class="form-control" id="demographicEcontact"></input>
		    		</div>
		    		<div class="form-group col-4">
		    			<label class="pr-5">Phone</label>
		    			<input type="text" class="form-control" id="demographicEcontact"></input>
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
				    				<select class="form-control form-control-sm">
										<option>A</option>
										<option>B</option>
										<option>C</option>
										<option>D</option>
									</select>
									<div class="form-row">
										<div class="col-sm">
											<label>Company</label>
											<input class="form-control" id="companyName1"></input>
										</div>
										<div class="col-sm">
											<label>Address:</label>
											<input class="form-control" id="companyAddress1"></input>
										</div>
									</div>
									
									<div class="form-row">
										<div class="col-sm">
											<label>Phone</label>
											<input class="form-control" id="companyPhone1"></input>
										</div>
										<div class="col-sm">
											<label>Group#</label>
											<input class="form-control" id="companyGroup"></input>
										</div>
									</div>
									
									<div class="form-row">
										<div class="col-sm">
											<label>Policy</label>
											<input class="form-control" id="companyPolicy1"></input>
										</div>
										<div class="col-sm">
											<label>Policy Holder</label>
											<input class="form-control" id="companyHolder1"></input>
										</div>
										<div class="col-sm">
											<label>SS#</label>
											<input class="form-control" id="companySS1"></input>
										</div>
										<div class="col-sm">
											<label>DOB:</label>
											<input class="form-control" id="companyDOB1"></input>
										</div>
									</div>
									
									<div class="form-row">
										<div class="col-sm">
											<label>Medicare#:</label>
											<input class="form-control" id="companyMedicare1"></input>
										</div>
										<div class="col-sm">
											<label>Medicaid#:</label>
											<input class="form-control" id="companyMedicaid1"></input>
										</div>
										<div class="col-sm">
											<label>Claim#:</label>
											<input class="form-control" id="companyClaim1"></input>
										</div>
									</div>
									
				    			</div>
				    			<div class="form-control col-sm">
				    				<label>Secondary Insurance Policy</label>
				    				<select class="form-control form-control-sm">
										<option>A</option>
										<option>B</option>
										<option>C</option>
										<option>D</option>
									</select>
									<div class="form-row">
										<div class="col-sm">
											<label>Company</label>
											<input class="form-control" id="companyName2"></input>
										</div>
										<div class="col-sm">
											<label>Address:</label>
											<input class="form-control" id="companyName2"></input>
										</div>
									</div>
									
									<div class="form-row">
										<div class="col-sm">
											<label>Phone</label>
											<input class="form-control" id="companyPhone2"></input>
										</div>
										<div class="col-sm">
											<label>Group#</label>
											<input class="form-control" id="companyGroup2"></input>
										</div>
									</div>
									
									<div class="form-row">
										<div class="col-sm">
											<label>Policy</label>
											<input class="form-control" id="companyPolicy2"></input>
										</div>
										<div class="col-sm">
											<label>Policy Holder</label>
											<input class="form-control" id="companyHolder2"></input>
										</div>
										<div class="col-sm">
											<label>SS#</label>
											<input class="form-control" id="companySS2"></input>
										</div>
										<div class="col-sm">
											<label>DOB:</label>
											<input class="form-control" id="companyDOB2"></input>
										</div>
									</div>
									
									<div class="form-row">
										<div class="col-sm">
											<label>Medicare#:</label>
											<input class="form-control" id="companyMedicare2"></input>
										</div>
										<div class="col-sm">
											<label>Medicaid#:</label>
											<input class="form-control" id="companyMedicaid2"></input>
										</div>
										<div class="col-sm">
											<label>Claim#:</label>
											<input class="form-control" id="companyClaim2"></input>
										</div>
									</div>
				    			</div>
				    		</div>
				    	</div>
			    	</div>
		    	</div>
		    </div>
		</div>