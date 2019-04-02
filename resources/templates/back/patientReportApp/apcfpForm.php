<div class="card">
	<div class="card-header" id="headingOne">
        <h5 class="mb-0">
            <a class="btn btn-link" data-toggle="collapse" data-target="#apcfpPanel" aria-expanded="true" aria-controls="collapseOne">
              A. P. C. F.
    	 	</a>
    	</h5>
    </div>
    <div class="container-fluid my-2 py-2 collapse" id="apcfpPanel">
    	<h2 class="text-left">Scheduled Appointment For:</h2>
		<div class="row my-2 px-2 py-1 border border-dark">
			<div class="form-check form-check-inline">
				<input name="chkScheduleApp[]" class="form-check-input" type="checkbox" value="Radiation Tx">
				<label class="form-check-label">Radiation Tx</label>
			</div>
			<div class="form-check form-check-inline">
				<input name="chkScheduleApp[]" class="form-check-input" type="checkbox" value="Dialysis Tx">
				<label class="form-check-label">Dialysis Tx</label>
			</div>
			<div class="form-check form-check-inline">
				<input name="chkScheduleApp[]" class="form-check-input" type="checkbox" value="MRI Scan">
				<label class="form-check-label">MRI Scan</label>
			</div>
			<div class="form-check form-check-inline">
				<input name="chkScheduleApp[]" class="form-check-input" type="checkbox" value="CT Scan">
				<label class="form-check-label">CT Scan</label>
			</div>
			<div class="form-check form-check-inline">
				<input name="chkScheduleApp[]" class="form-check-input" type="checkbox" value="Endoscopy">
				<label class="form-check-label">Endoscopy</label>
			</div>
			<div class="form-check form-check-inline">
				<input name="chkScheduleApp[]" class="form-check-input" type="checkbox" value="Angiography">
				<label class="form-check-label">Angiography</label>
			</div>
			<div class="form-check form-check-inline">
				<input name="chkScheduleApp[]" class="form-check-input" type="checkbox" value="Out-Patient / Ambulatory Surgery">
				<label class="form-check-label">Out-Patient / Ambulatory Surgery</label>
			</div>
			<div class="form-check form-check-inline">
				<input name="chkScheduleApp[]" class="form-check-input" type="checkbox" value="Caridac Catheterization">
				<label class="form-check-label">Caridac Catheterization</label>
			</div>
			<div class="form-check form-check-inline">
				<input name="chkScheduleApp[]" class="form-check-input" type="checkbox" value="Lymphatic / Venous Procedures">
				<label class="form-check-label">Lymphatic / Venous Procedures</label>
			</div>
			<div class="form-check form-check-inline">
				<input name="chkScheduleApp[]" class="form-check-input" type="checkbox" value="Wound Care">
				<label class="form-check-label">Wound Care</label>
			</div>
			<div class="form-group form-inline">
				<input name="chkAPCFtxt0" class="form-check-input" type="checkbox">
				<label class="form-check-label">Other:</label>
				<input name="txtOtherApp" class="form-control" type="text">
			</div>
		</div>
		
		<div class="row my-2 px-2 py-1 border border-dark">
			<p><span class="font-weight-bold">Physicians Certification Statement -</span> Required by 42 CFR 410.40 (D) for all Non-Emergent transports.
			In my professional opinion, this patient's medical condition requires transport 
			by Ambulance and the level of care that implies and other means of transport are contraindicated based on the patient's health and safety.
			</p>
			<div class="form-group form-inline">
				<input class="form-control" type="checkbox">
				<p><span class="font-weight-bold">Patient Bed Confined</span> and is Unable to get up or out of bed without assistance <span class="font-weight-bold">AND</span> Unable to ambulate <span class="font-weight-bold">AND</span> Unable to sit in a Wheel chair or chair because:<br>
				Note: The term applies to individuals who are unable to tolerate any activity out of bed. This term is <span class="font-weight-bold">not</span> synonymous with "Bed Rest", or "Non-Ambulatory",
 				or "Stretcher Bound". All three components must be met in order for the patient to meet the requirements of the definition of "Bed Confined".
 				</p>
			</div>
		</div>
		
		<div class="row border border-dark">
			<div class="col-sm form-group">
				<h2 class="text-left">Requires an Ambulance because:</h2>
				<div class="form-inline">
					<input name="chkAPCFtxt1" class="form-check-input" type="checkbox">
					<label>Unable to hold self in w/c due to:</label>
					<input name="txtAmbulance1" class="form-control" type="text">
				</div>
				
				<div class="form-check form-check-inline">
					<input name="chkAmbulance[]" class="form-check-input" type="checkbox" value="Bilateral AKA">
					<label class="form-check-label">Bilateral AKA</label>
				</div>
				<div class="form-check form-check-inline">
					<input name="chkAmbulance[]" class="form-check-input ml-3" type="checkbox" value="AKA and opposite BKA">
					<label class="form-check-label">AKA and opposite BKA</label>
				</div>
			
				<div class="form-inline">
					<input name="chkAPCFtxt2" class="form-check-input" type="checkbox">
					<label>Unable to sit for duration of transport due to:</label>
					<input name="txtAmbulance2" class="form-control" type="text">
				</div>
				
				<h2 class="text-left">Decubitus Ulcer of:</h2>
				<div class="form-inline">
					<div class="form-check form-check-inline">
    					<input name="chkUlcer[]"class="form-check-input" type="checkbox" value="Sacrum">
    					<label>Sacrum</label>
					</div>
					<div class="form-check form-check-inline">
    					<input name="chkUlcer[]" class="form-check-input" type="checkbox" value="Buttocks"> 
    					<label>Buttocks</label>
					</div>
					<div class="form-check form-check-inline">
    					<input name="chkUlcer[]" class="form-check-input" type="checkbox" value="Coccyx">
    					<label>Coccyx</label>
					</div>
					<div class="form-check form-check-inline">
    					<input name="chkUlcer[]" class="form-check-input" type="checkbox" value="Hip">
    					<label>Hip</label>
					</div>
					<div class="form-check form-check-inline">
    					<input name="chkUlcer[]" class="form-check-input" type="checkbox" value="Lower Extremit">
    					<label>Lower Extremity</label>
					</div>
					<div class="form-check form-inline">
    					<input name="chkUlcertxt" class="form-check-input" type="checkbox">
    					<label>Others</label>
    					<input name="chkUlcerOther" class="form-control" type="text">
					</div>
					<div class="form-check form-inline">
    					<input name="chkAPCFtxt3" class="form-check-input" type="checkbox">
    					<label>Overall Wasting, too weak to sit up due to:</label>
    					<input name="txtUlcer3" class="form-control" type="text">
					</div>
				</div>
				
				<h2 class="text-left">Paralysis:</h2>
				<div class="form-check form-check-inline">
					<input name="chkPara[]" class="form-check-input" type="checkbox" value="Hemi">
					<label class="form-check-label">Hemi</label>
				</div>
				<div class="form-check form-check-inline">
					<input name="chkPara[]" class="form-check-input" type="checkbox" value="Semi">
					<label class="form-check-label">Semi</label>
				</div>
				<div class="form-check">
					<input name="chkPara[]" class="form-check-input" type="checkbox" value="Quadriplegic">
					<label class="form-check-label">Quadriplegic</label>
				</div>
				
				<h2 class="text-left">Fracture of:</h2>
    			<div class="form-check form-check-inline">
    				<input name="chkFracture[]" class="form-check-input" type="checkbox" value="Neck">
    				<label class="form-check-label">Neck</label>
    			</div>
    			<div class="form-check form-check-inline">
    				<input name="chkFracture[]" class="form-check-input" type="checkbox" value="Spine">
    				<label class="form-check-label">Spine</label>
    			</div>
    			<div class="form-check form-check-inline">
    				<input name="chkFracture[]" class="form-check-input" type="checkbox" value="Hip">
    				<label class="form-check-label">Hip</label>
    			</div>
    			<div class="form-check form-check-inline">
    				<input name="chkFracture[]" class="form-check-input" type="checkbox" value="Leg">
    				<label class="form-check-label">Leg</label>
    			</div>
    			<div class="form-check form-check-inline">
    				<input name="chkFracture[]" class="form-check-input" type="checkbox" value="Knee">
    				<label class="form-check-label">Knee</label>
    			</div>
    			<div class="form-check form-check-inline form-inline">
    				<input name="chkAPCFtxt4" class="form-check-input" type="checkbox" >
    				<label class="form-check-label">Other Fracture:</label>
    				<input name="txtFracture4" class="form-control" type="text">
    			</div>
    			
    			<h2 class="text-left">Contractures or Abnormal Stiffness or Rigidity of:</h2>
    			<div class="form-check form-check-inline">
    				<input name="chkContractures[]" class="form-check-input" type="checkbox" value="Upper R/L">
    				<label class="form-check-label">Upper R/L</label>
    			</div>
    			<div class="form-check form-check-inline">
    				<input name="chkContractures[]" class="form-check-input" type="checkbox" value="Lower R/L Extremities">
    				<label class="form-check-label">Lower R/L Extremities</label>
    			</div>
    			<div class="form-check form-check-inline form-inline">
    				<input name="chkAPCFtxt5" class="form-check-input" type="checkbox" >
    				<label class="form-check-label">Severe Pain due to:</label>
    				<input name="txtSeverePain5" class="form-control" type="text">
    			</div>
    			
    			<h2 class="text-left">Psychiatric Issues:</h2>
    			<div class="form-check form-check-inline">
    				<input name="chkPsychic[]" class="form-check-input" type="checkbox" value="Danger to Self">
    				<label class="form-check-label">Danger to Self</label>
    			</div>
    			<div class="form-check form-check-inline">
    				<input name="chkPsychic[]" class="form-check-input" type="checkbox" value="Danger to Others">
    				<label class="form-check-label">Danger to Others</label>
    			</div>
    			<div class="form-check form-check-inline">
    				<input name="chkPsychic[]" class="form-check-input" type="checkbox" value="Flight Risk">
    				<label class="form-check-label">Flight Risk</label>
    			</div>
    			<div class="form-check form-check-inline">
    				<input name="chkPsychic[]" class="form-check-input" type="checkbox" value="Chemical or Physical Restraints">
    				<label class="form-check-label">Chemical or Physical Restraints</label>
    			</div>
			</div>
			
			<div class="col-sm form-group">
				<h2 class="text-left">Patient Requires Medical Monitoring:</h2>
				<div class="form-check">
    				<input name="chkPatientRequire[]" class="form-check-input" type="checkbox" value="Airway / Suctioning">
    				<label class="form-check-label">Airway / Suctioning</label>
    			</div>
    			<div class="form-check">
    				<input name="chkPatientRequire[]" class="form-check-input" type="checkbox" value="Ventilator Dependent">
    				<label class="form-check-label">Ventilator Dependent</label>
    			</div>
    			<div class="form-check">
    				<input name="chkPatientRequire[]" class="form-check-input" type="checkbox" value="Seizure Precautions">
    				<label class="form-check-label">Seizure Precautions</label>
    			</div>
    			<div class="form-check">
    				<input name="chkPatientRequire[]" class="form-check-input" type="checkbox" value="IV / Rx Infusion">
    				<label class="form-check-label">IV / Rx Infusion</label>
    			</div>
    			<div class="form-check">
    				<input name="chkPatientRequire[]" class="form-check-input" type="checkbox" value="Cardiac Monitoring">
    				<label class="form-check-label">Cardiac Monitoring</label>
    			</div>
    			<div class="form-check">
    				<input name="chkPatientRequire[]" class="form-check-input" type="checkbox" value="Unable to self-administer Oxygen needed">
    				<label class="form-check-label">Unable to self-administer Oxygen needed</label>
    			</div>
    			<div class="form-check">
    				<input name="chkPatientRequire[]" class="form-check-input" type="checkbox" value="Comatose / LOC">
    				<label class="form-check-label">Comatose / LOC</label>
    			</div>
    			
    			<h2 class="text-left">Isolation due to:</h2>
    			<div class="form-check form-check-inline">
    				<input name="chkIsolation[]" class="form-check-input" type="checkbox" value="MRSA">
    				<label class="form-check-label">MRSA</label>
    			</div>
    			<div class="form-check form-check-inline">
    				<input name="chkIsolation[]" class="form-check-input" type="checkbox" value="VRE">
    				<label class="form-check-label">VRE</label>
    			</div>
    			<div class="form-check form-check-inline">
    				<input name="chkIsolation[]" class="form-check-input" type="checkbox" value="C-DIFF">
    				<label class="form-check-label">C-DIFF</label>
    			</div>
    			<div class="form-check form-check-inline">
    				<input name="chkIsolation[]" class="form-check-input" type="checkbox" value="TB">
    				<label class="form-check-label">TB</label>
    			</div>
    			<div class="form-check form-check-inline">
    				<input name="chkIsolation[]" class="form-check-input" type="checkbox" value="Meningitis">
    				<label class="form-check-label">Meningitis</label>
    			</div>
    			<div class="form-check form-check-inline form-inline" >
    				<input name="chkAPCFtxt6" class="form-check-input" type="checkbox">
    				<label class="form-check-label">Other:</label>
    				<input name="txtIsolation6" class="form-control" type="text">
    			</div>
    			
    			<h2 class="text-left">Other (Describe what or why):</h2>
    			<div class="form-group">
    				<textarea name="txtAPCFother" class="form-control" rows="4"></textarea>
    			</div>
			</div>
		</div>
		<!-- Require Ambulance Row End -->
		
		<div class="row form-group border border-dark">
    		<div class="col-12">
    			<p>I certify the above information is true and correct based on my evaluation of this patient. I understand that the information herin shall be used by the Department of Health and Human Services to support the determination of Medical Necessity for Ambulance transportation. 
    			This does not guarantee or assure payment shall be made for services rendered to your patient.
    			</p>
    		
    			<div class="form-inline">
    				<label class="form-input font-weight-bold">Physician or Designee Name (print):</label>
    				<input name="txtPhysicianName" class="form-control" type="text">
    				<div class="form-check ml-2">
        				<input name="chkPhysician[]" class="form-check-input" type="checkbox" value="MD">
        				<label class="form-check-label">MD</label>
        			</div>
        			<div class="form-check ml-2">
        				<input name="chkPhysician[]" class="form-check-input" type="checkbox" value="PA">
        				<label class="form-check-label">PA</label>
        			</div>
        			<div class="form-check ml-2">
        				<input name="chkPhysician[]" class="form-check-input" type="checkbox" value="RN">
        				<label class="form-check-label">RN</label>
        			</div>
        			<div class="form-check ml-2">
        				<input name="chkPhysician[]" class="form-check-input" type="checkbox" value="SW">
        				<label class="form-check-label">SW</label>
        			</div>
        			<div class="form-check ml-2">
        				<input name="chkPhysician[]" class="form-check-input" type="checkbox" value="DP">
        				<label class="form-check-label">DP</label>
        			</div>
    			</div>
    			<div class="form-group">
    				<label class="form-input font-weight-bold">Physician or Designee Signature:</label>
    			</div>
    			<div id="signatureAPCF">
    			</div>
    		</div>
    	</div>	
    	<div class="row form-group border border-dark">
    		<div class="col-12">
    			<div class="form-inline">
    				<label class="form-input font-weight-bold">Senior Care Emergency Medical Services Inc EMT Name:</label>
    				<input name="txtIncEmt" class="form-control" type="text">
    			</div>
    		</div>
    	</div>
	</div>

</div>