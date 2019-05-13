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
				<div class="row">
					<div class="col">
						<input onclick="deselectAll()" class="btn btn-secondary" id="deselectMap" value="Deselect All">
					</div>
				</div>
				<div id="mapRow" class="row my-2">
					<div class="col">
						<script>
						
						</script>
						<!-- Insert Picture for Map -->
						<img id="painMap" usemap="#painMap1" alt ="Pain Map" src="img/ron1.gif">
						
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
						<div class="form-group" id="thoraxMapList" style="position:absolute; z-index:10; left:12px; top:50px; width:400px;background-color:black; border:1px solid #464f5a; display:none;">
    						<label id="selectThorax">Thorax</label>
    						<select size="19" id="thoraxMapListBox" onchange="checkMap(thoraxMapListBox, traumaMapItems, selectAbdomen)" class="form-control form-control-sm">
    							<option value="2ND DEGREE BURN NOS">2ND DEGREE BURN NOS</option>
            					<option value="3RD DEGREE BURN NOS">3RD DEGREE BURN NOS</option>
            					<option value="BACK DISORDER NOS">BACK DISORDER NOS</option>
            					<option value="BACKACHE NOS">BACKACHE NOS</option>
            					<option value="CARDIAC ARREST">CARDIAC ARREST</option>
            					<option value="CARDIAC DYSRHYTHMIA NOS">CARDIAC DYSRHYTHMIA NOS</option>
            					<option value="CHEST PAIN NOS">CHEST PAIN NOS</option>
            					<option value="EMPHYSEMA NEC">EMPHYSEMA NEC</option>
            					<option value="HEART FAILURE NOS">HEART FAILURE NOS</option>
            					<option value="INTERNAL INJ NOS-CLOSED">INTERNAL INJ NOS-CLOSED</option>
            					<option value="INTERNAL INJURY NOS-OPEN">INTERNAL INJURY NOS-OPEN</option>
            					<option value="OTHER LUNG DISEASE NEC">OTHER LUNG DISEASE NEC</option>
            					<option value="PALPITATIONS">PALPITATIONS</option>
            					<option value="PERSISTENT VOMITING">PERSISTENT VOMITING</option>
            					<option value="RESPIRATORY ABNORM NEC">RESPIRATORY ABNORM NEC</option>
            					<option value="RESPIRATORY ARREST">RESPIRATORY ARREST</option>
            					<option value="RESPIRATORY FAILURE">RESPIRATORY FAILURE</option>
            					<option value="SHORTNESS OF BREATH">SHORTNESS OF BREATH</option>
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
					
					<!-- Set coordination point for click to certain area on the map -->
					<map name="painMap1">
						<area class="headArea" name="head" shape="circle" coords="115,42,31" onclick="boxShow('headMapList')" href="#" alt="Head">
						<area class="neckArea" name="neck" shape="rect" coords="98,79,133,99" onclick="boxShow('neckMapList')" href="#" alt="Neck">
						<area onclick="boxShow('thoraxMapList')" class="thorax" name="thorax" shape="poly" coords="70,104,96,93,114,99,132,91,159,101,153,155,84,153" href="#" alt="Thorax" >
						<area onclick="boxShow('abdomenMapList')" class="abdomenArea" name="abdomen" shape="poly" coords="83,156,84,187,80,212,105,225,130,223,156,213,152,158" href="#" alt="Abdomen" >
						<area onclick="boxShow('armMapList')" class="armArea" name="arm" shape="poly" coords="67,104,77,140,75,166,65,189,42,231,32,262,6,257,4,238,27,224,38,192,51,165,56,127" href="#" alt="Arm" >
						<area onclick="boxShow('armMapList')" class="armArea" name="arm" shape="poly" coords="166,101,170,114,177,137,192,178,210,220,230,230,228,248,222,261,204,252,200,233,163,185,153,149,158,105" href="#" alt="Arm" >
						<area onclick="boxShow('groinMapList')" class="groinArea" name="groin" shape="circle" coords="121,238,14" href="#" alt="Groin">
						<area onclick="boxShow('legMapList')" class="legArea" name="leg" shape="poly" coords="76,217,108,228,108,239,114,251,108,303,102,339,102,365,97,398,97,412,97,440,88,457,73,442,82,413,81,395,75,368,84,331,84,312,74,255" href="#" alt="Leg">						
						<area onclick="boxShow('legMapList')" class="legArea" name="leg" shape="poly" coords="157,217,133,227,132,239,122,252,137,333,137,347,138,377,145,400,143,417,147,447,153,457,165,447,158,415,162,357,159,335,160,311,162,273" href="#" alt="Leg">
						<!-- Set coordination point for click to second part of the map-- -->
						<area onclick="boxShow('headMapList')" class="headArea" name="head" shape="circle" coords="367,33,26" href="#" alt="Head">
						<area onclick="boxShow('armMapList')" class="armArea" name="arm" shape="poly" coords="321,94,330,144,325,177,293,225,284,257,258,250,258,234,281,217,295,177,308,158,312,121" href="#" alt="Arm">
						<area onclick="boxShow('armMapList')" class="armArea" name="arm" shape="poly" coords="413,94,427,124,448,194,457,222,477,233,476,255,473,262,450,263,438,224,416,174,404,149" href="#" alt="Arm">
						<area onclick="boxShow('neckMapList')" class="neckArea" name="neck" shape="poly" coords="348,63,350,77,365,76,383,76,385,64,368,62" href="#" alt="Neck">	
						<area onclick="boxShow('thoraxMapList')" class="thorax" name="thorax" shape="poly" coords="324,97,352,78,385,79,409,93,402,150,336,149" href="#" alt="Thorax" >			
						<area onclick="boxShow('abdomenMapList')" class="abdomenArea" name="abdomen" shape="poly" coords="337,157,400,157,397,178,410,233,391,250,372,239,346,248,324,230,339,174" href="#" alt="Abdomen">
						<area onclick="boxShow('legMapList')" class="legArea" name="leg" shape="poly" coords="325,230,345,249,368,246,356,325,348,405,350,457,327,444,334,405,325,348,336,320" href="#" alt="Leg">						
						<area onclick="boxShow('legMapList')" class="legArea" name="leg" shape="poly" coords="372,245,395,249,412,238,408,321,420,441,400,455,390,409,388,329" href="#" alt="Leg">
					</map>
					<script>
					//Initialize Imapster for pain map
					$('#painMap').mapster({
						 fillColor: 'ff0000',
					     fillOpacity: 0.3
					}
					);
					console.log($('#painMap').mapster());
					</script>
				
					
					<!-- Text box for obtain the input from user click to the map -->
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
				<input hidden name="rowNumber" id="rowNumber" type="text" value="Row_0">	
			</div>	
			</div>
			
		</div>	