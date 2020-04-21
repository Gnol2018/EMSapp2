		<div class="card">
			<div class="card-header" id="headingOne">
		      <h5 class="mb-0">
		        <a class="btn btn-link" data-toggle="collapse" data-target="#dispatchPanel" aria-expanded="true" aria-controls="collapseOne">
		          D I S P A T C H
		        </a>
		      </h5>
		    </div>
			<div class="container-fluid my-2 py-2 collapse show" id="dispatchPanel" >
			
				<div class="row">
					<h2>Milleage</h2>
				</div>
				<div class="form-row form-group">
				
					<div class="col-sm">
						<label for="dispatchDate">Begin: </label>
						<input  oninput="mileCal()" type="text" class="form-control" id="mileBegin" value="" required></input>
					</div>
					<div class="col-sm">
						<label>End:  </label>
						<input oninput="mileCal()" type="text" class="form-control" id="mileEnd" value="" required></input>
					</div>
					<div class="col-sm">
						<label>Total:  </label>
						<input name ="mileTotal" id="mileTotal" readonly type="number" class="form-control"  value=""></input>
					</div>

				</div>
		
				<div class="form-row">
					<div class="form-group col-sm">
						<label for="dispatchDate">Date</label>
						<input required onclick="getDate(dispatchDate)" name="dispatchDate" id="dispatchDate" type="text" class="form-control" ></input>
					</div>
					<div class="col-sm">
						<label>Run Id: </label>
						<input type="text" class="form-control" name="runId" id="runId" value="<?php echo $_SESSION['runId']?>">
					</div>
					<div class="col-sm">
						<label>Veh. Id: </label>
						<input type="text" class="form-control" name="vehId" id="dispatchVeh"></input>
					</div>
				</div>
			
				<div class="form-row">
					<div class="form-group col-sm">
						<label for="dispatchAgency">Agency Name</label>
						<input readonly text="text" class="form-control" name="dispatchAgency" id="dispatchAgency" value="Intercity Ambulance">
					</div>
					<div class="form-group col-sm">
						<label for="dispatchLocation">Location</label>
						<select name="dispatchLocation" class="form-control form-control-sm">
							<option>&lt;Select&gt;</option>
							<option value="4338">Airmont</option>
							<option value="4335">Chestnut Ridge</option>
							<option value="4350">Clarkstown</option>
							<option value="4323">Grandview-on-Hudson</option>
							<option value="4351">Haverstraw</option>
							<option value="4327">Hillburn</option>
							<option value="4337">Kaser</option>
							<option value="7095">Kings County (all)</option>
							<option value="7093">Manhattan (Entire Borough)</option>
						</select>
					</div>
					<div class="form-group col-sm">
						<label>L.Code: </label>
						<input type="text" class="form-control" name="lCode" value=""></input>
					</div>
				</div>
			
				<div class="form-row">
					<div class="form-group col-sm">
						<label for="dispatchInfo">Dispatch Info:</label>
						<input type="text" class="form-control" name="dispatchInfo" id="dispatchInfo"></input>
					</div>
					<div class="form-group col-sm">
						<label for="dispatchLtype">L. Type:</label>
						<select name="lType" class="form-control form-control-sm">
							<option>&lt;Select&gt;</option>
							<option>Residence</option>
							<option>Health</option>
							<option>Farm</option>
							<option>Industrial</option>
							<option>Other Work</option>
							<option>Other Residence</option>
							<option>Road</option>
						</select>
					</div>
					<div class="form-group col-sm">
						<label for="crossStreet">Cross Street:</label>
						<input type="text" class="form-control" name="dispatchCross" id="crossStreet"></input>
					</div>
				</div>
				
				<div class="form-row">
					<h2>Care in Progress</h2>
				</div>
				<div class="form-row mb-2">	
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="checkbox" name="dispatchCare[]" id="chk1None" value="option1">
						<label class="form-check-label" for="checkBox1None">None</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="checkbox" name="dispatchCare[]" id="chk1Citizen" value="option1">
						<label class="form-check-label" for="checkBox1Citizen">Citizen</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="checkbox" name="dispatchCare[]" id="chk1PDFD" value="option1">
						<label class="form-check-label" for="checkBox1PDFD">PD/FD</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="checkbox" name="dispatchCare[]" id="chk1PAD" value="option1">
						<label class="form-check-label" for="CheckBox1PAD">PAD Used</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="checkbox" name="dispatchCare[]" id="chk1OtherFirst" value="option1">
						<label class="form-check-label" for="CheckBox1OtherFirst">Other First Responder</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="checkbox" name="dispatchCare[]" id="chk1OtherEMS" value="option1">
						<label class="form-check-label" for="CheckBox1OtherEMS">Other EMS</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="checkbox" name="dispatchCare[]" id="chk1Phys" value="option1">
						<label class="form-check-label" for="CheckBox1Phys">Phys</label>
					</div>
					<div id ="emsAgency" class="form-inline">
						<label class="form-check-label" for="CheckBox1Agency">Agency</label>
						<input name="dispatchCare[]" type="text"></input>
					</div>
				</div>
			
				<div class="form-row mb-2">
					<div class="form-control col">
						<label>Call Received</label>
						<input type="text" onclick="getClock(timeReceived)" name="timeReceived" id="timeReceived" readonly type="text"  ></input>
					</div>
					<div class="form-control col">
						<label>On Route</label>
						<input type="text" onclick="getClock(timeRoute)" type="text" readonly name="timeRoute"></input>
					</div>
					<div class="form-control col">
						<label>At Scene</label>
						<input type="text" onclick="getClock(timeAtScene)" type="text" name="timeAtScene" readonly id="timeAtScene" value =""></input>
					</div>
					<div class="form-control col">
						<label>From Scene</label>
						<input type="text" onclick="getClock(timeFromScene)" type="text" readonly name="timeFromScene" id="timeFromScene" value=""></input>
					</div>
					<div class="form-control col">
						<label>At Destination</label>
						<input type="text" onclick="getClock(timeAtDes)" type="text" readonly name="timeAtDes" id="timeAtDes" value=""></input>
					</div>
					<div class="form-control col">
						<label>In Service</label>
						<input onclick="getClock(timeInService)" type="text" readonly name="timeInService" id="timeInService" value=""></input>
					</div>
					<div class="form-control col">
						<label>In Quarter</label>
						<input onclick="getClock(timeInQuarter)" type="text" readonly name="timeInQuarter" id="timeInQuarter"></input>
					</div>
				</div>
				
				<div class="form-control form-row">
					<div class="form-group col-sm">
						<label>Call Received As: </label>
						<select name="dispatchCallType" class="form-control form-control-sm">
							<option>Hospital Transfer</option>
							<option>Nursing Home</option>
							<option>Hotspice</option>
							<option>911 request</option>
							<option>Private Report</option>
							
						</select>
					</div>
					<div class="form-group col-sm">
						<label>Num. of Patient: </label>
						<input name="dispatchPatientNumb" type="text" class="form-control" id="numPatient"></input>
					</div>
					<div class="form-group col-sm">
						<label>Dispatch Method: </label>
						<select name="dispatchMethod" class="form-control form-control-sm">
							<option>&lt;Select&gt;</option>
							<option>911</option>
							<option>Emergency</option>
							<option>Walk-In</option>
							<option>Scheduled</option>
						</select>
					</div>
				</div>
			
				
			</div>	
		</div>