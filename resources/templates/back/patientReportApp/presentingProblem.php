		<div class="card">
			<div class="card-header" id="headingOne">
		      <h5 class="mb-0">
		        <a class="btn btn-link" data-toggle="collapse" data-target="#problemPanel" aria-expanded="true" aria-controls="collapseOne">
		          P R E S E N T I N G P R O B L E M
		        </a>
		      </h5>
		    </div>
		    
			<div class="container-fluid my-2 py-2 collapse" id="problemPanel" >
			
				<div class="form-row">
					<div class="col-12">
    					<div class="form-check form-check-inline">
    						<input class="form-check-input" type="checkbox" id="chkTrauma">
    						<label class="form-check-label" for="chkTrauma">Trauma</label>
    					</div>
    					<div class="form-check form-check-inline">
    						<input class="form-check-input" type="checkbox" id="chkALS">
    						<label class="form-check-label" for="chkALS">ALS On Screen</label>
    					</div>
					</div>
				</div>
				
				<!-- Trauma Section Start Here -->
				<div id="emsTrauma" style="display:block">
				<div class="form-row">
					<div class="col-lg">
					<h2>Chief Complaint - Trauma</h2>
					<input type="text" class="form-control" name="traumaComplaint"></input>
					</div>
				</div>
				
				<div class="form-row">
					<h2>Mechanism of Injury</h2>
				</div>
				<div  class="form-row">
					<div class="col-md">
						<div class="form-check form-check-inline">
    						<input class="form-check-input" name="trauma_injury[]" type="checkbox" value="MVA">
    						<label class="form-check-label" for="chkTrauma">MVA</label>
    					</div>
    					<div class="form-check form-check-inline">
    						<input class="form-check-input" name="trauma_injury[]" type="checkbox" value="GSW" id="chkALS">
    						<label class="form-check-label" for="chkALS">GSW</label>
    					</div>
    					<div class="form-check form-check-inline">
    						<input class="form-check-input" name="trauma_injury[]" type="checkbox" value="Knife" id="chkTrauma">
    						<label class="form-check-label" for="chkTrauma">Knife</label>
    					</div>
    					<div class="form-check form-check-inline">
    						<input class="form-check-input" name="trauma_injury[]" type="checkbox" value="Unarmed Assault" id="chkALS">
    						<label class="form-check-label" for="chkALS">Unarmed Assault</label>
    					</div>
    					<div class="form-check form-check-inline">
    						<input class="form-check-input" name="trauma_injury[]" type="checkbox" value="Struck By Vehicle" id="chkTrauma">
    						<label class="form-check-label" for="chkTrauma">Struck By Vehicle</label>
    					</div>
    					<div class="form-check form-check-inline">
    						<input class="form-check-input" name="trauma_injury[]" type="checkbox" value="Machinery" id="chkALS">
    						<label class="form-check-label" for="chkALS">Machinery</label>
    					</div>
    					<div class="form-check form-check-inline">
    						<label>Fall of</label>
    						<input name="trauma_injury[]"  id="traumaInjuryFall"type="number" class="form-control form-control-sm">
    						<label>feet</label>
    					</div>
    					<div class="form-check form-check-inline">
    						<label  class="form-check-label" for="chkALS">Other:</label>
    						<input name="trauma_injury[]" id="traumaInjuryOther" type="text" class="form-control form-control-sm"></input>
    					</div>
					</div>
					<div class="col-2">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" id="chkALS">
    						<label>Extrication Req.</label>	
						</div>
						<div class="form-check">
							<input type="text" class="form-control form-control-sm"></input>
    						<label>minutes</label>
						</div>
					</div>
					<div class="col-lg">
						<p>Seat Belt Used?</p>
						<div class="form-check form-check-inline">
							<input class="form-check-input " type="radio" id="radSeatbeltYes">
							<label class="form-check-label">
                            Yes
                            </label>
                       	</div >
                       	<div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="radSeatbeltNo">
							<label class="form-check-label">
                            No
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="radSeatbeltUnknown">
							<label class="form-check-label">
                            Unknown
                            </label>
						</div>
						<p>Belt Use Rep. By<p>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" id="chkCrew">
							<label class="form-check-label">Crew</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" id="chkPatient">
							<label class="form-check-label">Patient</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" id="chkPolice">
							<label class="form-check-label">Police</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" id="chkOther">
							<label class="form-check-label">Other</label>
						</div>
					</div>
				</div>
				<div class="form-row">
					<h2>Presenting Problem</h2>
				</div>
				<div class="form-row">
					<div class="col-sm">
						<div class="form-check">
    						<input name="present_problem[]" class="form-check-input" type="checkbox" value="Airway Obstruction">
    						<label class="form-check-label">Airway Obstruction</label>
						</div>
						<div class="form-check">
    						<input name="present_problem[]" class="form-check-input" type="checkbox" value="Resp. Arrest">
    						<label class="form-check-label">Resp. Arrest</label>
						</div>
						<div class="form-check">
    						<input name="present_problem[]" class="form-check-input" type="checkbox" value="Resp. Arrest">
    						<label class="form-check-label">Resp. Distress</label>
						</div>
						<div class="form-check">
    						<input name="present_problem[]" class="form-check-input" type="checkbox" value="Cardiac Related">
    						<label class="form-check-label">Cardiac Related</label>
						</div>
						<div class="form-check">
    						<input name="present_problem[]" class="form-check-input" type="checkbox" value="Cardiac Arrest">
    						<label class="form-check-label">Cardiac Arrest</label>
						</div>
					</div>
					<div class="col-sm">
						<div class="form-check">
    						<input name="present_problem[]" class="form-check-input" type="checkbox" value="Alergic Reaction">
    						<label class="form-check-label">Alergic Reaction</label>
						</div>
						<div class="form-check">
    						<input name="present_problem[]" class="form-check-input" type="checkbox" value="Syncope">
    						<label class="form-check-label">Syncope</label>
						</div>
						<div class="form-check">
    						<input name="present_problem[]" class="form-check-input" type="checkbox" value="Stroke/CVA">
    						<label class="form-check-label">Stroke/CVA</label>
						</div>
						<div class="form-check">
    						<input name="present_problem[]" class="form-check-input" type="checkbox" value="Seizure">
    						<label class="form-check-label">Seizure</label>
						</div>
						<div class="form-check">
    						<input name="present_problem[]" class="form-check-input" type="checkbox" value="Shock">
    						<label class="form-check-label">Shock</label>
						</div>
					</div>
					<div class="col-sm">
						<div class="form-check">
    						<input name="present_problem[]" class="form-check-input" type="checkbox" value="Gen. Illness/Malaise">
    						<label class="form-check-label">Gen. Illness/Malaise</label>
						</div>
						<div class="form-check">
    						<input name="present_problem[]" class="form-check-input" type="checkbox" value="Gastro. Distress">
    						<label class="form-check-label">Gastro. Distress</label>
						</div>
						<div class="form-check">
    						<input name="present_problem[]" class="form-check-input" type="checkbox" value="Diabetic Related">
    						<label class="form-check-label">Diabetic Related</label>
						</div>
						<div class="form-check">
    						<input name="present_problem[]" class="form-check-input" type="checkbox" value="Uncons./Unresp.">
    						<label class="form-check-label">Uncons./Unresp.</label>
						</div>
						<div class="form-check">
    						<input name="present_problem[]" class="form-check-input" type="checkbox" value="Behavioral Disorder">
    						<label class="form-check-label">Behavioral Disorder</label>
						</div>
					</div>
					<div class="col-sm">
						<div class="form-check">
    						<input name="present_problem[]" class="form-check-input" type="checkbox" value="Substance Abuse">
    						<label class="form-check-label">Substance Abuse</label>
						</div>
						<div class="form-check">
    						<input name="present_problem[]" class="form-check-input" type="checkbox" value="Poisoning">
    						<label class="form-check-label">Poisoning</label>
						</div>
						<div class="form-check">
    						<input name="present_problem[]" class="form-check-input" type="checkbox" value="Head Injury">
    						<label class="form-check-label">Head Injury</label>
						</div>
						<div class="form-check">
    						<input name="present_problem[]"class="form-check-input" type="checkbox" value="Spinal Injury">
    						<label class="form-check-label">Spinal Injury</label>
						</div>
						<div class="form-check">
    						<input name="present_problem[]"class="form-check-input" type="checkbox" value="Fracture/Disloc.">
    						<label class="form-check-label">Fracture/Disloc.</label>
    					</div>
					</div>
					<div class="col-sm">
						<div class="form-check">
    						<input name="present_problem[]" class="form-check-input" type="checkbox" value="Amputation">
    						<label class="form-check-label">Amputation</label>
						</div>
						<div class="form-check">
    						
    						<label class="form-check-label">Major Trauma:</label>
						</div>
						<div class="form-check">
    						<input name="present_problem[]" class="form-check-input" type="checkbox" value="Major Trauma: Blunt">
    						<label class="form-check-label">-Blunt</label>
						</div>
						<div class="form-check">
    						<input name="present_problem[]" class="form-check-input" type="checkbox" value="Major Trauma: Penetrating">
    						<label class="form-check-label">-Penetrating</label>
						</div>
						<div class="form-check">
    						<input name="present_problem[]" class="form-check-input" type="checkbox" value="Soft Tissue Injury">
    						<label class="form-check-label">Soft Tissue Injury</label>
    					</div>
					</div>
					<div class="col-sm">
						<div class="form-check">
    						<input name="present_problem[]" class="form-check-input" type="checkbox" value="Bleeding/Hemm.">
    						<label class="form-check-label">Bleeding/Hemm.</label>
						</div>
						<div class="form-check">
    						<input name="present_problem[]" class="form-check-input" type="checkbox" value="OB/GYN">
    						<label class="form-check-label">OB/GYN</label>
						</div>
						<div class="form-check">
    						<input class="form-check-input" type="checkbox">
    						<label class="form-check-label">Burns: </label>
    						<input name="present_problem[]" class="form-control form-control-sm" type="text"></input>
						</div>
						<div class="form-check">
    						<input class="form-check-input" type="checkbox">
    						<label class="form-check-label">Other: </label>
    						<input name="present_problem[]" class="form-control form-control-sm" type="text"></input>
						</div>
					</div>
				</div>
				<div  id="mapRow" class="row my-2">
					<div class="col">
					
						<img id="painMap1" class="" usemap="#painMap1" alt ="Image Map" ismap src="img/ron1.gif">
						
						<div class="form-group" id="headMapList" style="position:absolute; left: 10px; top:0 ;z-index:10; width:400px;background-color:black; border:1px solid #464f5a; display:none;">
    						<label id="selectHead">Head</label>
    						<select id="headMapListBox" onchange="checkMap(headMapListBox, traumaMapItems, selectHead)" multiple="multiple" class="form-control form-control-sm">
    							<option value="2ND DEGREE BURN NOS">2ND DEGREE BURN NOS</option>
            					<option value="3RD DEGREE BURN NOS">3RD DEGREE BURN NOS</option>
            					<option value="ACUTE DELIRIUM">ACUTE DELIRIUM</option>
            					<option value="CEREBROVASC DISEASE NOS">CEREBROVASC DISEASE NOS</option>
            					<option value="COMA">COMA</option>
            					<option value="CONTUSION OF EYE NOS">CONTUSION OF EYE NOS</option>
            					<option value="DRUG MENTAL DISORDER NOS">DRUG MENTAL DISORDER NOS</option>
            					<option value="EYE DISORDER NOS">EYE DISORDER NOS</option>
            					<option value="LACK OF COORDINATION">LACK OF COORDINATION</option>
            					<option value="MENINGOCOCCAL INFECT NOS">MENINGOCOCCAL INFECT NOS</option>
            					<option value="PSYCHOSIS NOS">PSYCHOSIS NOS</option>
            					<option value="PSYCHOSIS NOS">PSYCHOSIS NOS</option>
            					<option value="REACT PSYCHOSIS NEC/NOS">REACT PSYCHOSIS NEC/NOS</option>
            					<option value="SUBACUTE DELIRIUM">SUBACUTE DELIRIUM</option>
            					<option value="TRANS ALTER AWARENESS">TRANS ALTER AWARENESS</option>
            					<OPTION value="OTHER">OTHER...</OPTION>
    						</select>
						</div>
						
						<div class="form-group" id="neckMapList" style="position:absolute; z-index:10; left:12px; top:50px; width:400px;background-color:black; border:1px solid #464f5a; display:none;">
    						<label id="selectNeck">Neck</label>
    						<select size="5" id="neckMapListBox" onchange="checkMap(neckMapListBox, traumaMapItems, selectNeck)" class="form-control form-control-sm">
    							<option value="2ND DEGREE BURN NOS">2ND DEGREE BURN NOS</option>
            					<option value="3RD DEGREE BURN NOS">3RD DEGREE BURN NOS</option>
            					<option value="CHR AIRWAY OBSTRUCT NEC">CHR AIRWAY OBSTRUCT NEC</option>
            					<option value="SYMP INVOL HEAD/NECK NEC">SYMP INVOL HEAD/NECK NEC</option>
            					<OPTION value="OTHER">OTHER...</OPTION>
    						</select>
						</div>
						
						<div class="form-group" id="abdomenMapList" style="position:absolute; z-index:10; left:12px; top:50px; width:400px;background-color:black; border:1px solid #464f5a; display:none;">
    						<label id="selectAbdomen">Abdomen</label>
    						<select size="7" id="abdomenMapListBox" onchange="checkMap(abdomenMapListBox, traumaMapItems, selectAbdomen)" class="form-control form-control-sm">
    							<option value="2ND DEGREE BURN NOS">2ND DEGREE BURN NOS</option>
            					<option value="3RD DEGREE BURN NOS">3RD DEGREE BURN NOS</option>
            					<option value="ABDMNAL PAIN UNSPCF SITE">ABDMNAL PAIN UNSPCF SITE</option>
            					<option value="GASTRITIS/DUODENITIS NOS*">GASTRITIS/DUODENITIS NOS*</option>
            					<option value="NAUSEA WITH VOMITING">NAUSEA WITH VOMITING</option>
            					<option value="NORMAL DELIVERY">NORMAL DELIVERY</option>
            					<OPTION value="OTHER">OTHER...</OPTION>
    						</select>
						</div>
						
						<div class="form-group" id="armMapList" style="position:absolute; z-index:10; left:12px; top:50px; width:400px;background-color:black; border:1px solid #464f5a; display:none;">
    						<label id="selectArm">Arm</label>
    						<select size="6" id="armMapListBox" onchange="checkMap(armMapListBox, traumaMapItems, selectArm)" class="form-control form-control-sm">
    							<option value="2ND DEGREE BURN NOS">2ND DEGREE BURN NOS</option>
            					<option value="3RD DEGREE BURN NOS">3RD DEGREE BURN NOS</option>
            					<option value="AMPUTAT">AMPUTAT</option>
            					<option value="AMPUTATION FINGER">AMPUTATION FINGER</option>
            					<option value="OPEN WOUND OF SHOULDER">OPEN WOUND OF SHOULDER</option>
            					<OPTION value="OTHER">OTHER...</OPTION>
    						</select>
						</div>
						
						<div class="form-group" id="groinMapList" style="position:absolute; z-index:10; left:12px; top:50px; width:400px;background-color:black; border:1px solid #464f5a; display:none;">
    						<label id="selectGroin">Groin</label>
    						<select size="6" id="groinMapListBox" onchange="checkMap(groinMapListBox, traumaMapItems, selectGroin)" class="form-control form-control-sm">
    							<option value="2ND DEGREE BURN NOS">2ND DEGREE BURN NOS</option>
            					<option value="3RD DEGREE BURN NOS">3RD DEGREE BURN NOS</option>
            					<option value="AMPUTAT">AMPUTAT</option>
            					<option value="AMPUTATION FINGER">AMPUTATION FINGER</option>
            					<option value="OPEN WOUND OF SHOULDER">OPEN WOUND OF SHOULDER</option>
            					<OPTION value="OTHER">OTHER...</OPTION>
    						</select>
						</div>
						
						<div class="form-group" id="legMapList" style="position:absolute; z-index:10; left:12px; top:50px; width:400px;background-color:black; border:1px solid #464f5a; display:none;">
    						<label id="selectLeg">Leg</label>
    						<select size="6" id="legMapListBox" onchange="checkMap(legMapListBox, traumaMapItems, selectLeg)" class="form-control form-control-sm">
    							<option value="2ND DEGREE BURN NOS">2ND DEGREE BURN NOS</option>
            					<option value="3RD DEGREE BURN NOS">3RD DEGREE BURN NOS</option>
            					<option value="AMPUTAT LEG UNILAT NOS">AMPUTAT LEG UNILAT NOS</option>
            					<option value="AMPUTATION TOE">AMPUTATION TOE</option>
            					<OPTION value="OTHER">OTHER...</OPTION>
    						</select>
						</div>
					</div>
					
					<map name="painMap1">
						<area class="headArea" name="head" shape="circle" coords="115,42,31" href="javascript:boxShow('headMapList')" alt="Head" OnMouseOver="window.status='Head'; return true" OnMouseOut="window.status=''; return true">
						<area class="neckArea" name="neck" shape="rectangle" coords="98,79,133,99" href="javascript:boxShow('neckMapList')" alt="Neck" OnMouseOver="window.status='Neck'; return true" OnMouseOut="window.status=''; return true">
						<area class="abdomenArea" name="abdomen" shape="polygon" coords="99,89,112,103,133,91,160,102,154,145,149,177,155,211,129,221,111,223,83,212,89,174,81,140,71,101" href="javascript:boxShow('abdomenMapList')" alt="Abdomen" OnMouseOver="window.status='Abdomen'; return true" OnMouseOut="window.status=''; return true">
						<area class="armArea" name="arm" shape="polygon" coords="67,104,77,140,75,166,65,189,42,231,32,262,6,257,4,238,27,224,38,192,51,165,56,127" href="javascript:boxShow('armMapList')" alt="Arm" OnMouseOver="window.status='Arm'; return true" OnMouseOut="window.status=''; return true">
						<area class="armArea" name="arm" shape="polygon" coords="166,101,170,114,177,137,192,178,210,220,230,230,228,248,222,261,204,252,200,233,163,185,153,149,158,105" href="javascript:boxShow('armMapList')" alt="Arm" OnMouseOver="window.status='Arm'; return true" OnMouseOut="window.status=''; return true">
						<area class="groinArea" name="groin" shape="polygon" coords="115,224,128,222,130,237,127,248,121,253,110,244,108,23" href="javascript:boxShow('groinMapList')" alt="Arm" OnMouseOver="window.status='Groin'; return true" OnMouseOut="window.status=''; return true">
						<area class="legArea" name="leg" shape="polygon" coords="76,217,108,228,108,239,114,251,108,303,102,339,102,365,97,398,97,412,97,440,88,457,73,442,82,413,81,395,75,368,84,331,84,312,74,255" href="javascript:boxShow('legMapList')" alt="Arm" OnMouseOver="window.status='Groin'; return true" OnMouseOut="window.status=''; return true">
						<area class="legArea" name="leg" shape="polygon" coords="157,217,133,227,132,239,122,252,137,333,137,347,138,377,145,400,143,417,147,447,153,457,165,447,158,415,162,357,159,335,160,311,162,273" href="javascript:boxShow('legMapList')" alt="Arm" OnMouseOver="window.status='Groin'; return true" OnMouseOut="window.status=''; return true">
					</map>
					
					<div class="col">
						<textarea name="traumaMapItems" id="traumaMapItems" class="w-100 h-100"></textarea>
						
					</div>
				</div>	
				
				</div>
				<!-- Trauma Section Row Here -->
				
				<!-- Past Medical History Row  -->
				<div class="form-row">
					<div class="col-lg">
					<h2>Chief Complaint - Medical</h2>
					<input name="medicalComplaint" type="text" class="form-control" id="txtCheifMedical"></input>
					</div>
				</div>
				<div class="form-row form-group">
					<div class="col-lg">
    					<h2>Past Medical History</h2>	
        			</div>	
        		</div>	
        		<div class="form-row mb-2">
        			<div class="col-lg">
        				<div class="form-check form-check-inline">
    						<input name="past_medical[]" class="form-check-input" type="checkbox" id="chk1None" value="None">
    						<label class="form-check-label" for="checkBox1None">None</label>
						</div>
						<div class="form-check form-check-inline">
    						<input name="past_medical[]" class="form-check-input" type="checkbox" id="chk1Citizen" value="Hypertension">
    						<label class="form-check-label" for="checkBox1Citizen">Hypertension</label>
						</div>
						<div class="form-check form-check-inline">
    						<input name="past_medical[]" class="form-check-input" type="checkbox" id="chk1PDFD" value="Seizures">
    						<label class="form-check-label" for="checkBox1PDFD">Seizures</label>
						</div>
						<div class="form-check form-check-inline">
    						<input name="past_medical[]" class="form-check-input" type="checkbox" id="chk1None" value="Stroke">
    						<label class="form-check-label" for="checkBox1None">Stroke</label>
						</div>
						<div class="form-check form-check-inline">
    						<input name="past_medical[]" class="form-check-input" type="checkbox" id="chk1Citizen" value="Diabetes">
    						<label class="form-check-label" for="checkBox1Citizen">Diabetes</label>
						</div>
						<div class="form-check form-check-inline">
    						<input name="past_medical[]" class="form-check-input" type="checkbox" id="chk1PDFD" value="COPD">
    						<label class="form-check-label" for="checkBox1PDFD">COPD</label>
						</div>
						<div class="form-check form-check-inline">
    						<input name="past_medical[]" class="form-check-input" type="checkbox" id="chk1None" value="Cardiac">
    						<label class="form-check-label" for="checkBox1None">Cardiac</label>
						</div>
						<div class="form-check form-check-inline">
    						<input name="past_medical[]" class="form-check-input" type="checkbox" id="chk1Citizen" value="Ashthma">
    						<label class="form-check-label" for="checkBox1Citizen">Ashthma</label>
						</div>
        			</div>
        		</div>
        		<div class="form-row">
            		<label>Medication:</label>
            		<input name="patientMedication" type="text" class="form-control"></input>
        		</div>
        		<div class="form-row form-check form-check-inline">
        			<div class="col-sm">
            			<input type="checkbox" class="form-check-input"></input>
            			<label>Allergy to:</label>
            			<input type="text" class="form-control"></input>
        			</div>
            		<div class="col-sm">
                		<input type="checkbox" class="form-check-input"></input>
                		<label>Other:</label>
                		<input type="text" class="form-control"></input>
            		</div>	
        		</div>
				<!-- Past Medical Problem Row End Here -->
				
				<!-- Vital Sign Row Start Here -->
				<div class="row">
					<h2>Vital Sign</h2>
					<button id="btnAdd" type="button" class="btn btn-primary btn-small mr-2">add</button>
					<button id="btnDrop" type="button" class="btn btn-primary btn-small">drop</button>
				</div>
				<div class="form-row mt-2 border border-warning cloned-row">
					<div class="col-sm">
						<h3>Time</h3>
						<input name="vitalTime[]" onclick="getClock(vitalTime_0)" id="vitalTime_0" type="text">
					</div>
					<div class="resRate col-sm">
						<h3>Respiration</h3>
						<label>Rate</label>
						<input name="vitalResRate[]" id="vitalResRate_1" type="text" class="form-control form-control-sm"></input>
						<div class="form-check">
    						<input name="vitalResCheck0[]" class="form-check-input" type="checkbox"  value="Regular">
    						<label class="form-check-label">Regular</label>
						</div>
						<div class="form-check">
    						<input name="vitalResCheck0[]" class="form-check-input" type="checkbox"  value="Shallow">
    						<label class="form-check-label">Shallow</label>
						</div>
						<div class="form-check">
    						<input name="vitalResCheck0[]" class="form-check-input" type="checkbox"  value="Labored">
    						<label class="form-check-label">Labored</label>
						</div>
					</div>
					<div class="vitalPulse col-sm">
						<h3>Pulse/BP</h3>
						<label class="form-input">Rate</label>
						<input name="vitalPulseRate[]" type="text" class="form-control form-control-sm"></input>
						<div class="form-check">
    						<input name="chkPulse0[]" class="form-check-input" type="checkbox" value="Regular">
    						<label class="form-check-label">Regular</label>
						</div>
						<div class="form-check">
    						<input name="chkPulse0[]" class="form-check-input" type="checkbox" value="Irregular">
    						<label class="form-check-label">Irregular</label>
						</div>
						<label class="form-input">BP:</label>
						<input name="txtBP[]" type="text" class="form-control"></input>
					</div>
					<div class="vitalCons col-sm">
						<h3>Level of Conscousness</h3>
						<div class="form-check">
    						<input name="radCons0" class="form-check-input" type="radio"  value="Alert">
    						<label class="form-check-label">Alert</label>
						</div>
						<div class="form-check">
    						<input name="radCons0" class="form-check-input" type="radio" value="Voice">
    						<label class="form-check-label">Voice</label>
						</div>
						<div class="form-check">
    						<input name="radCons0" class="form-check-input" type="radio" value="Pain">
    						<label class="form-check-label">Pain</label>
						</div>
						<div class="form-check">
    						<input name="radCons0" class="form-check-input" type="radio" value="Unresponsive">
    						<label class="form-check-label">Unresponsive</label>
						</div>
					</div>
					<div class="col-sm">
					<h3>Pupils</h3>
				
							<span class="d-block">Right</span>
							<div class="rightPupils form-check form-check-inline">
        						<input name="radRightPupil0" class="form-check-input" type="radio" value="Normal">
        						<label class="form-check-label">Normal</label>
							</div>
							<div class="rightPupils form-check form-check-inline">
        						<input name="radRightPupil0"  class="form-check-input" type="radio" value="Dilated">
        						<label class="form-check-label">Dilated</label>	
							</div>
							<div class="rightPupils form-check form-check-inline">
        						<input name="radRightPupil0"  class="form-check-input" type="radio" value="Constricted">
        						<label class="form-check-label">Constricted</label>		
							</div>
							<div class="rightPupils form-check form-check-inline">
        						<input name="radRightPupil0"  class="form-check-input" type="radio" value="Sluggish">
        						<label class="form-check-label">Sluggish</label>
							</div>
							<div class="rightPupils form-check form-check-inline">
        						<input name="radRightPupil0"  class="form-check-input" type="radio" value="No Reaction">
        						<label class="form-check-label">No Reaction</label>
							</div>
					
							<span class="d-block">Left</span>
							<div class="leftPupils form-check form-check-inline">
        						<input name="radLeftPupil0" class="form-check-input" type="radio" value="Normal">
        						<label class="form-check-label">Normal</label>
							</div>
							<div class="leftPupils form-check form-check-inline">
        						<input name="radLeftPupil0" class="form-check-input" type="radio" value="Dilated">
        						<label class="form-check-label">Dilated</label>	
							</div>
							<div class="leftPupils form-check form-check-inline">
        						<input name="radLeftPupil0" class="form-check-input" type="radio" value="Constricted">
        						<label class="form-check-label">Constricted</label>		
							</div>
							<div class="leftPupils form-check form-check-inline">
        						<input name="radLeftPupil0" class="form-check-input" type="radio" value="Sluggish">
        						<label class="form-check-label">Sluggish</label>
							</div>
							<div class="leftPupils form-check form-check-inline">
        						<input name="radLeftPupil0" class="form-check-input" type="radio" value="No Reaction">
        						<label class="form-check-label">No Reaction</label>
							</div>
					</div>
					<div class="vitalSkin col-sm">
						<h3>Skin</h3>
						<div class="form-check form-check-inline">
        					<input name="radSkin0" class="form-check-input" type="radio" value="Normal">
        					<label class="form-check-label">Normal</label>
						</div>
						<div class="form-check form-check-inline">
        					<input name="radSkin0"  class="form-check-input" type="radio" value="Cool">
        					<label class="form-check-label">Cool</label>	
						</div>
						<div class="form-check form-check-inline">
        					<input name="radSkin0" class="form-check-input" type="radio" value="Pale">
        					<label class="form-check-label">Pale</label>		
						</div>
						<div class="form-check form-check-inline">
        					<input name="radSkin0"  class="form-check-input" type="radio" value="Warm Cyanotic">
        					<label class="form-check-label">Warm Cyanotic</label>
						</div>
						<div class="form-check form-check-inline">
        					<input name="radSkin0"  class="form-check-input" type="radio" value="Moist">
        					<label class="form-check-label">Moist</label>
						</div>
						<div class="form-check form-check-inline">
        					<input name="radSkin0" class="form-check-input" type="radio" value="Flushed">
        					<label class="form-check-label">Flushed</label>		
						</div>
						<div class="form-check form-check-inline">
        					<input name="radSkin0"  class="form-check-input" type="radio" value="Dry">
        					<label class="form-check-label">Dry</label>
						</div>
						<div class="form-check form-check-inline">
        					<input name="radSkin0"  class="form-check-input" type="radio" value="Jaund">
        					<label class="form-check-label">Jaund.</label>
						</div>
					</div>
					<div class="vitalStatus col-sm">
						<h3>Status</h3>
						<div class="form-check form-check-inline">
        					<input name="radStatus0"  class="form-check-input" type="radio" value="C">
        					<label class="form-check-label">C</label>
						</div>
						<div class="form-check form-check-inline">
        					<input name="radStatus0" class="form-check-input" type="radio" value="U">
        					<label class="form-check-label">U</label>		
						</div>
						<div class="form-check form-check-inline">
        					<input name="radStatus0" class="form-check-input" type="radio" value="P">
        					<label class="form-check-label">P</label>
						</div>
						<div class="form-check form-check-inline">
        					<input name="radStatus0"  class="form-check-input" type="radio" value="S">
        					<label class="form-check-label">S</label>
						</div>
					</div>
				</div>
			<div class="form-row">
				<input name="rowNumber" id="rowNumber" type="text" value="Row_0">	
			</div>	
			</div>
			
		</div>	