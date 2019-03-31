		<div class="card">
			<div class="card-header" id="headingOne">
		      <h5 class="mb-0">
		        <button class="btn btn-link" data-toggle="collapse" data-target="#dispatchPanel" aria-expanded="true" aria-controls="collapseOne">
		          D I S P A T C H
		        </button>
		      </h5>
		    </div>
			<div class="container-fluid my-2 py-2 collapse show" id="dispatchPanel" >
				<div class="row">
					<h2>Milleage</h2>
				</div>
				<div class="form-row form-control">
				
					<div class="col-sm">
						<label for="dispatchDate">Begin: </label>
						<input oninput="mileCal()" type="text" class="form-control" id="mileBegin" value=""></input>
					</div>
					<div class="col-sm">
						<label>End:  </label>
						<input oninput="mileCal()" type="text" class="form-control" id="mileEnd" value=""></input>
					</div>
					<div class="col-sm">
						<label>Total:  </label>
						<input  type="text" class="form-control" id="mileTotal" value=""></input>
					</div>

				</div>
				<script>
            	
                </script>
				
				
				<div class="form-row">
					<div class="form-group col-sm">
						<label for="dispatchDate">Date</label>
						<input type="text" class="form-control" id="dispatchDate"></input>
					</div>
					<div class="col-sm">
						<label>Run Id: </label>
						<input type="text" readonly class="form-control" id="runID" value="4330.101.2019025[21:30:47].0001">
					</div>
					<div class="col-sm">
						<label>Veh. Id: </label>
						<input type="text" class="form-control" id="dispatchVeh"></input>
					</div>
				</div>
			
				<div class="form-row">
					<div class="form-group col-sm">
						<label for="dispatchAgency">Agency Name</label>
						<select class="form-control form-control-sm">
							<option>A</option>
							<option>B</option>
							<option>C</option>
							<option>D</option>
						</select>
					</div>
					<div class="form-group col-sm">
						<label for="dispatchLocation">Location</label>
						<select class="form-control form-control-sm">
							<option>A</option>
							<option>B</option>
							<option>C</option>
							<option>D</option>
						</select>
					</div>
					<div class="form-group col-sm">
						<label>L.Code: </label>
						<input type="text" readonly class="form-control" id="runID" value=""></input>
					</div>
				</div>
			
				<div class="form-row">
					<div class="form-group col-sm">
						<label for="dispatchInfo">Dispatch Info:</label>
						<input type="text" class="form-control" id="dispatchInfo"></input>
					</div>
					<div class="form-group col-sm">
						<label for="dispatchLtype">L. Type:</label>
						<select class="form-control form-control-sm">
							<option>A</option>
							<option>B</option>
							<option>C</option>
							<option>D</option>
						</select>
					</div>
					<div class="form-group col-sm">
						<label for="crossStreet">Cross Street:</label>
						<input type="text" class="form-control" id="crossStreet"></input>
					</div>
				</div>
				
				<div class="form-row">
					<h2>Care in Progress</h2>
				</div>
				<div class="form-row mb-2">	
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="checkbox" id="chk1None" value="option1">
						<label class="form-check-label" for="checkBox1None">None</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="checkbox" id="chk1Citizen" value="option1">
						<label class="form-check-label" for="checkBox1Citizen">Citizen</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="checkbox" id="chk1PDFD" value="option1">
						<label class="form-check-label" for="checkBox1PDFD">PD/FD</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="checkbox" id="chk1PAD" value="option1">
						<label class="form-check-label" for="CheckBox1PAD">PAD Used</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="checkbox" id="chk1OtherFirst" value="option1">
						<label class="form-check-label" for="CheckBox1OtherFirst">Other First Responder</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="checkbox" id="chk1OtherEMS" value="option1">
						<label class="form-check-label" for="CheckBox1OtherEMS">Other EMS</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="checkbox" id="chk1Phys" value="option1">
						<label class="form-check-label" for="CheckBox1Phys">Phys</label>
					</div>
					<div id ="emsAgency" class="form-inline">
						<label class="form-check-label" for="CheckBox1Agency">Agency</label>
						<input type="text"></input>
					</div>
				</div>
			
				<div class="form-row mb-2">
					<div class="form-control col-sm">
						<label>Call Received</label>
						<input type="time" id="callReceived"></input>
					</div>
					<div class="form-control col-sm">
						<label>On Route</label>
						<input type="text"  id="onRoute"></input>
					</div>
					<div class="form-control col-sm">
						<label>At Scene</label>
						<input type="text"  id="atScene"></input>
					</div>
					<div class="form-control col-sm">
						<label>From Scene</label>
						<input type="text"  id="fromScene"></input>
					</div>
					<div class="form-control col-sm">
						<label>At Destination</label>
						<input type="text"  id="atDestination"></input>
					</div>
					<div class="form-control col-sm">
						<label>In Service</label>
						<input type="text"  id="inService"></input>
					</div>
					<div class="form-control col-sm">
						<label>In Quarter</label>
						<input type="text"  id="inQuarter"></input>
					</div>
				</div>
			
				<div class="form-control form-row">
					<div class="form-group col-sm">
						<label>Call Received As: </label>
						<select class="form-control form-control-sm">
							<option>A</option>
							<option>B</option>
							<option>C</option>
							<option>D</option>
						</select>
					</div>
					<div class="form-group col-sm">
						<label>Num. of Patient: </label>
						<input type="text" class="form-control" id="numPatient"></input>
					</div>
					<div class="form-group col-sm">
						<label>Dispatch Method: </label>
						<select class="form-control form-control-sm">
							<option>A</option>
							<option>B</option>
							<option>C</option>
							<option>D</option>
						</select>
					</div>
				</div>
			</div>	
		</div>