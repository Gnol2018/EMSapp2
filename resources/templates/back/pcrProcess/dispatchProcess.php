
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
		<?php 
		if($_SESSION['userRole'] == 'dispatcher'){
		    echo "	
            <div class='col-sm'>
				<label for='dispatchDate'>Begin: </label>
				<input  oninput='mileCal()' type='text'class='form-control' id='mileBegin' value='' required></input>
			</div>
			<div class='col-sm'>
				<label>End:  </label>
				<input oninput='mileCal()' type='text' class='form-control' id='mileEnd' value='' required></input>
			</div>
            ";
		}
		?>
			 <div class='col-sm'>
				<label for='dispatchDate'>Begin: </label>
				<input  oninput='mileCal()' type='text'class='form-control' id='mileBegin' value='' required></input>
			</div>
			<div class='col-sm'>
				<label>End:  </label>
				<input oninput='mileCal()' type='text' class='form-control' id='mileEnd' value='' required></input>
			</div>
			<div class="col-sm">
				<label>Total:  </label>
				<input  name="mileTotal" id ="mileTotal"  type="text" class="form-control"  placeholder="Miles" value="<?php echo $mileage?>"></input>
			</div>

		</div>

		<div class="form-row">
			<div class="form-group col-sm">
				<label for="dispatchDate">Date</label>
				<input  required name="dispatchDate" id="dispatchDate" type="text" class="form-control" placeholder="MM/DD/YYYY" value="<?php echo $dispatchDate?>"></input>
			</div>
			<div class="col-sm">
				<label>Run Id: </label>
				<input  type="text" class="form-control" name="runId" id="runId" value="<?php echo $runId?>">
			</div>
			<div class="col-sm">
				<label>Veh. Id: </label>
				<input  type="text" class="form-control" name="vehId" id="dispatchVeh" value="<?php echo $vehId ?>"></input>
			</div>
		</div>
	
		<div class="form-row">
			<div class="form-group col-sm">
				<label for="dispatchAgency">Agency Name</label>
				<input  text="text" class="form-control" name="dispatchAgency" id="dispatchAgency" value="<?php echo $agencyName?>">
			</div>
			<div class="form-group col-sm">
				<label for="dispatchLocation">Location</label>
				<input  name="dispatchLocation" text="text" class="form-control" value="<?php echo $agencyLocation?>">
					
			</div>
			<div class="form-group col-sm">
				<label>L.Code: </label>
				<input  type="text" class="form-control" name="lCode" value="<?php echo $locationCode?>"></input>
			</div>
		</div>
	
		<div class="form-row">
			<div class="form-group col-sm">
				<label for="dispatchInfo">Dispatch Info:</label>
				<input  type="text" class="form-control" name="dispatchInfo" id="dispatchInfo" value="<?php echo $dispatchinfo?>"></input>
			</div>
			<div class="form-group col-sm">
				<label for="dispatchLtype">L. Type:</label>
				<input  name="lType" class="form-control" value="<?php echo $locationType?>">
				
			</div>
			<div class="form-group col-sm">
				<label for="crossStreet">Cross Street:</label>
				<input  type="text" class="form-control" name="dispatchCross" id="crossStreet" value="<?php echo $crossStreet?>"></input>
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
				<input type="text"  name="timeReceived" id="timeReceived"  type="text" value="<?php echo $timeReceived ?>"></input>
			</div>
			<div class="form-control col">
				<label>On Route</label>
				<input type="text"  type="text"  name="timeRoute" value="<?php echo $timeRoute ?>"></input>
			</div>
			<div class="form-control col">
				<label>At Scene</label>
				<input type="text"  type="text" name="timeAtScene"  id="timeAtScene" value="<?php echo $timeAtScene ?>"></input>
			</div>
			<div class="form-control col">
				<label>From Scene</label>
				<input type="text"  type="text"  name="timeFromScene" id="timeFromScene" value="<?php echo $timeFromScene?>"></input>
			</div>
			<div class="form-control col">
				<label>At Destination</label>
				<input type="text"  type="text"  name="timeAtDes" id="timeAtDes" value="<?php echo $timeAtDes?>"></input>
			</div>
			<div class="form-control col">
				<label>In Service</label>
				<input  type="text"  name="timeInService" id="timeInService" value="<?php echo $timeInService?>"></input>
			</div>
			<div class="form-control col">
				<label>In Quarter</label>
				<input  type="text"  name="timeInQuarter" id="timeInQuarter" value="<?php echo $timeInQuarter ?>"></input>
			</div>
		</div>
		
		<div class="form-control form-row">
			<div class="form-group col-sm">
				<label>Call Received As: </label>
				<input type="text" name="dispatchCallType" class="form-control form-control-sm" value="<?php echo $dispatchCallType?>">
					
			</div>
			<div class="form-group col-sm">
				<label>Num. of Patient: </label>
				<input name="dispatchPatientNumb" type="text" class="form-control form-control-sm" id="numPatient" value="<?php echo $dispatchPatientNumb?>"></input>
			</div>
			<div class="form-group col-sm">
				<label>Dispatch Method: </label>
				<input name="dispatchMethod" class="form-control form-control-sm" value="<?php echo $dispatchMethod?>">
					
			</div>
		</div>
	</div>	
</div>