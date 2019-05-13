<div class="card">
	<div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <a class="btn btn-link" data-toggle="collapse" data-target="#dispositionPanel" aria-expanded="true" aria-controls="collapseOne">
          D I S P O S I T I O N
	 	</a>
	 </h5>
 	</div>
 	<div class="container-fluid my-2 py-2 collapse" id="dispositionPanel">
 	
 		<div class="row">
 			<div class="col-lg">
 				<div class="form-check">
 					<input name="chkALStransport" class="form-check-input" type="checkbox" value="Transported as ALS">
 					<label class="form-check-label">Transported as ALS</label>
 				</div>
 				<div class="form-group form-inline">
 					<label>Disposition Code:</label>
 					<input name="txtDisCode" class="form-control" type="text">
 				</div>
 				<div class="form-group">
 					<label>Destination (Hospital/Non-Hospital)</label>
 					<select name="selDisDes" class="form-control">
 						<option>A</option>
 						<option>B</option>
 						<option>C</option>
 						<option>D</option>
 						<option>E</option>
 					</select>
 				</div>
 				<div class="form-check form-check-inline">
 					<label class="form-check-label">Proximity:</label>		
 				</div>
 				<div class="form-check form-check-inline">
 					<input class="form-check-input" type="radio" name="radALStran">
 					<label class="form-check-label mr-1">In Area</label>
 					<input class="form-check-input" type="radio" name="radALStran">
 					<label class="form-check-label">Out Of Area</label>
 				</div>
 				<div class="form-group">
 					<label>Purpose:</label>
 					<select name="selDisPurpose" class="form-control">
 						<option>&lt;Select&gt;</option>
						<option>Transferred to rehabilitation facility</option>
						<option>Transport for benefit of physician</option>
						<option>Transported for care of specialist</option>
						<option>Transported for nearness of family members</option>
						<option>Transported to nearest facility</option>
 					</select>
 				</div>
 				<div class="form-group">
 					<label>Ambulance Requested By:</label>
 					<input type="text" name="selDisRequester" class="form-control">
 						
 				</div>
 				<div class="form-group">
 					<label>Type of Transport:</label>
 					<select name="selDisType" class="form-control">
 						<option>&lt;Select&gt;</option>
						<option>Initial</option>
						<option>Return</option>
						<option>Family</option>
						<option>Transfer</option>
						<option>Round Trip</option>
 					</select>
 				</div>
 				<div class="form-group">
 					<label>Weight of Patient:</label>
 					<input name="txtDisWeight" class="form-control" type="text">
 				</div>
 				<div class="form-group">
 					<label>Purpose of Round Trip:</label>
 					<input name="txtDisRound"form-control" type="text">
 				</div>
 				<div class="form-group">
 					<label>Reason for Stretcher:</label>
 					<input name="txtDisStretcher" class="form-control" type="text">
 				</div>
 			</div>
 			
 			<div class="col-sm">
 				<div class="form-check">
 					<input name="chkDisDeath[]" class="form-check-input" type="checkbox" value="DOA">
 					<label class="form-check-label">DOA</label>
 				</div>
 				<div class="form-check">
 					<input name="chkDisDeath[]" class="form-check-input" type="checkbox" value="Obvious">
 					<label class="form-check-label">Obvious Death</label>
 				</div>
 				<div class="form-check">
 					<input name="chkDisDeath[]" class="form-check-input" type="checkbox" value="Cancelled" >
 					<label class="form-check-label">Cancelled</label>
 				</div>
 				<div class="form-check">
 					<input name="chkDisDeath[]" class="form-check-input" type="checkbox" value="Helicopter">
 					<label class="form-check-label">Helicopter</label>
 				</div>
 				
 				<div class="form-check">
 					<input name="chkDisDeath[]" class="form-check-input" type="checkbox" value="DNR">
 					<label class="form-check-label">DNR</label>
 				</div>
 				<div class="form-check">
 					<input name="chkDisDeath[]" class="form-check-input" type="checkbox" value="Unfounded">
 					<label class="form-check-label">Unfounded</label>
 				</div>
 				<div class="form-group form-inline">
 					<input name="chkDistxt1" class="form-check-input" type="checkbox">
 					<label class="form-check-label">Transported by:</label>
 					<input name="txtTrans1" class="form-control" type="text">
 				</div>
 				<div class="form-group form-inline">
 					<input name="chkDistxt2" class="form-check-input" type="checkbox">
 					<label class="form-check-label">Other:</label>
 					<input name="txtOther2 " class="form-control" type="text">
 				</div>
 			</div>
 		</div>
 		<!-------------------------Transportation Section Start Here ---------------------->
 		<h3 class="text-left">Transportation</h3>
 		<div class="row">
 		
 			<div class="col-sm">
 				<div class="form-check">
 					<input name="chkDisTransport[]" class="form-check-input" type="checkbox" value="Moved to ambulance on stretcher/backboard">
 					<label class="form-check-label">Moved to ambulance on stretcher/backboard</label>
 				</div>
 				<div class="form-check">
 					<input name="chkDisTransport[]" class="form-check-input" type="checkbox" value="Moved to ambulance on stair chair">
 					<label class="form-check-label">Moved to ambulance on stair chair</label>
 				</div>
 				<div class="form-check">
 					<input name="chkDisTransport[]" class="form-check-input" type="checkbox" value="Moved to ambulance on scoop">
 					<label class="form-check-label">Moved to ambulance on scoop</label>
 				</div>
 				<div class="form-check">
 					<input name="chkDisTransport[]" class="form-check-input" type="checkbox" value="Carried to ambulance">
 					<label class="form-check-label">Carried to ambulance</label>
 				</div>
 				<div class="form-check">
 					<input name="chkDisTransport[]" class="form-check-input" type="checkbox" value="Walked to ambulance">
 					<label class="form-check-label">Walked to ambulance</label>
 				</div>
 				
 				<div class="form-check">
 					<input name="chkDisTransport[]" class="form-check-input" type="checkbox" value="Restrained during transportation">
 					<label class="form-check-label">Restrained during transportation</label>
 				</div>
 				<div class="form-check">
 					<input name="chkDisTransport[]" class="form-check-input" type="checkbox" value="In shock during transportation">
 					<label class="form-check-label">In shock during transportation</label>
 				</div>
 			</div>
 			<div class="col-lg">
 				
 				<div class="form-check">
 					<input name="chkDisTransport[]" class="form-check-input" type="checkbox">
 					<label class="form-check-label">Transported in Trendelenburg position</label>
 				</div>
 				<div class="form-check">
 					<input name="chkDisTransport[]" class="form-check-input" type="checkbox">
 					<label class="form-check-label">Transported in left lateral recumbent position</label>
 				</div>
 				<div class="form-check">
 					<input name="chkDisTransport[]" class="form-check-input" type="checkbox">
 					<label class="form-check-label">Transported with head elevated</label>
 				</div>
 				<div class="form-check">
 					<input name="chkDisTransport[]" class="form-check-input" type="checkbox">
 					<label class="form-check-label">Transported in position of comfort</label>
 				</div>
 				<div class="form-check">
 					<input name="chkDisTransport[]" class="form-check-input" type="checkbox">
 					<label class="form-check-label">Transported in prone position</label>
 				</div>
 				<div class="form-check">
 					<input name="chkDisTransport[]" class="form-check-input" type="checkbox">
 					<label class="form-check-label">Transported in sitting position</label>
 				</div>
 				<div class="form-check">
 					<input name="chkDisTransport[]" class="form-check-input" type="checkbox">
 					<label class="form-check-label">Transported in supine position</label>
 				</div>
 				<div class="form-group form-inline">
 					<input name="chkDistxt3" class="form-check-input" type="checkbox">
 					<label class="form-check-label">Other:</label>
 					<input name="txtDisOther3" class="form-control" type="text">
 				</div>
 			</div>
 			
 			<div class="col-sm">
 				<div class="form-check">
 					<input name="chkDisTransport[]" class="form-check-input" type="checkbox" value="Patient bed confined before transport">
 					<label class="form-check-label">Patient bed confined before transport</label>
 				</div>
 				<div class="form-check">
 					<input name="chkDisTransport[]" class="form-check-input" type="checkbox" value="Patient bed confined after transport">
 					<label class="form-check-label">Patient bed confined after transport</label>
 				</div>
 				<div class="form-check">
 					<input name="chkDisTransport[]" class="form-check-input" type="checkbox" value="Patient moved by stretcher">
 					<label class="form-check-label">Patient moved by stretcher</label>
 				</div>
 				<div class="form-check">
 					<input name="chkDisTransport[]" class="form-check-input" type="checkbox" value="Patient unconscious or in shock">
 					<label class="form-check-label">Patient unconscious or in shock</label>
 				</div>
 				<div class="form-check">
 					<input name="chkDisTransport[]" class="form-check-input" type="checkbox" value="Patient required physical restraints">
 					<label class="form-check-label">Patient required physical restraints</label>
 				</div>
 				<div class="form-check">
 					<input name="chkDisTransport[]" class="form-check-input" type="checkbox" value="Patient visibly hemorrhaging">
 					<label class="form-check-label">Patient visibly hemorrhaging</label>
 				</div>
 				<div class="form-check">
 					<input name="chkDisTransport[]" class="form-check-input" type="checkbox" value="Transport was medically necessary">
 					<label class="form-check-label">Transport was medically necessary</label>
 				</div>
 			</div>
 		</div>
 		<!-------------------------Transportation Section End Here ---------------------->
 		<h3 class="text-left">Names of Crew</h3>
 		<div class="row">
 			<div class="col-sm border border-dark">
 				<div class="form-group">
 					<label>In Charge:</label>
 					<input name="inChargeName" class="form-control" type="text">
 				</div>
 				<div class="form-check form-check-inline">
 					<input class="form-check-input" type="radio" name="radInCharge" value="EMT">
 					<label class="form-check-label">EMTP</label>
 				</div>
 				<div class="form-check form-check-inline">
 					<input class="form-check-input" type="radio" name="radInCharge" value="EMT">
 					<label class="form-check-label">EMT</label>
 				</div>
 				<div class="form-check form-check-inline">
 					<input class="form-check-input" type="radio" name="radInCharge" value="AEMT">
 					<label class="form-check-label">AEMT#</label>
 				</div>
 				<div class="form-group form-inline">
 					<label>#:</label>
 					<input name="inChargeNum" class="form-control" type="text">
 				</div>
 			</div>
 			<div class="col-sm border border-dark">
 				<div class="form-group">
 					<label>Driver:</label>
 					<input name="driverName" class="form-control" type="text">
 				</div>
 				<div class="form-check form-check-inline">
 					<input class="form-check-input" type="radio" name="radInCharge" value="EMT">
 					<label class="form-check-label">EMTP</label>
 				</div>
 				<div class="form-check form-check-inline">
 					<input class="form-check-input" type="radio" name="radDriver">
 					<label class="form-check-label">EMT</label>
 				</div>
 				<div class="form-check form-check-inline">
 					<input class="form-check-input" type="radio" name="radDriver">
 					<label class="form-check-label">AEMT#</label>
 				</div>
 				<div class="form-group form-inline">
 					<label>#:</label>
 					<input name="driverNumber" class="form-control" type="text">
 				</div>
 			</div>
 			<div class="col-sm border border-dark">
 				<div class="form-group">
 					<label>Other:</label>
 					<input name="otherDriver1" class="form-control" type="text">
 				</div>
 				<div class="form-check form-check-inline">
 					<input class="form-check-input" type="radio" name="radInCharge" value="EMT">
 					<label class="form-check-label">EMTP</label>
 				</div>
 				<div class="form-check form-check-inline">
 					<input class="form-check-input" type="radio" name="radOtherDriver1">
 					<label class="form-check-label">EMT</label>
 				</div>
 				<div class="form-check form-check-inline">
 					<input class="form-check-input" type="radio" name="radOtherDriver1">
 					<label class="form-check-label">AEMT#</label>
 				</div>
 				<div class="form-group form-inline">
 					<label>#:</label>
 					<input name="otherDriverNum1" class="form-control" type="text">
 				</div>
 			</div>
 			<div class="col-sm border border-dark">
 				<div class="form-group">
 					<label>Other:</label>
 					<input name="otherDriver2" class="form-control" type="text">
 				</div>
 				<div class="form-check form-check-inline">
 					<input class="form-check-input" type="radio" name="radInCharge" value="EMT">
 					<label class="form-check-label">EMTP</label>
 				</div>
 				<div class="form-check form-check-inline">
 					<input class="form-check-input" type="radio" name="radInCharge">
 					<label class="form-check-label">EMT</label>
 				</div>
 				<div class="form-check form-check-inline">
 					<input class="form-check-input" type="radio" name="radInCharge">
 					<label class="form-check-label">AEMT#</label>
 				</div>
 				<div class="form-group form-inline">
 					<label>#:</label>
 					<input name="otherDriverNum2" class="form-control" type="text">
 				</div>
 			</div>
 		</div>
 	
 	</div>
</div>