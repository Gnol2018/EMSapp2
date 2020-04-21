<!DOCTYPE>
<html>
	<head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   		
   		<style>
            body {
              background: rgb(204,204,204); 
            }
            page {
              font-size: small;
              background: white;
              display: block;
              margin: 0 auto;
              margin-bottom: 0.5cm;
              box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
            }
            table {
                width: 100%;
                margin: 2px 0px;
                font-size: 11px;
               
            }
            p {
                font-size: 11px;
            }
            td {
                border: 1px solid black;
                font-size: 11px;
            }
            th {
                font-size: 11px;
            }
            .label {
                font-weight:bold;
                font-size: 11px;
               
            }
            page[size="A4"] {  
              width: 21cm;
              height: 29.7cm; 
            }
            page[size="A4"][layout="landscape"] {
              width: 29.7cm;
              height: 21cm;  
            }
            @media print {
            body, page {        
            margin: 0;
            box-shadow: 0;
            }
            }
           .text-center {
            text-align: center;
            }
             .border {
            border: 1px solid black;
            }
            
            .margin {
                margin: 1em;
            }
           .padding {
                padding: 4px;
           }
           
           .grid-container {
                
           } 
       
   		</style>
   		<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
   		<script type="text/javascript" src="js/jquery.imagemapster.js"></script>
   		<script type="text/javascript" src="js/jSignature/jSignature.min.js"></script>
	</head>
	
	
	<body>
		<page>
			<h3 style="text-align:center;">INTERCITY AMBULANCER FOR EMGERCENCY MEDICAL REPORT</h3>
    		<h4 style="text-align:center;">PATIENT CARE REPORT</h4>
    		
    		<table>
    			<tr>
    				<td colspan='7'><p><span class="label" style="text-align:left;">Run Id:</span> <?php print($runId)?></p></td>
    			</tr>
        		<tr>
        			
    				<td><p><span class="label" style="text-align:left;">Call Received:</span> <?php print($dispatchDate)?></p></td>
    				<td><p><span class="label" style="text-align:left;">On Route:</span> <?php print($runId)?></p></td>
    				<td><p><span class="label" style="text-align:left;">At Scene:</span> <?php print($vehId)?></p></td>
    				<td><p><span class="label" style="text-align:left;">From Scene:</span> <?php print($mileage)?> miles</p></td>
    				<td><span class="label">Destination:</span> <?php print($timeAtDes)?></td>
    				<td><span class="label">In Service:</span> <?php print($timeInService)?></td>
    				<td><span class="label">In Quarter:</span> <?php print($timeInQuarter)?></td>
        		</tr>
        		
        		<tr>
        			<td><p><span class="label" style="text-align:left;">Total Milleage:</span> <?php print($mileage)?> miles</p></td>
    				<td><span class="label">L.code:</span> <?php print($locationCode)?></td>
    				<td><p><span class="label" style="text-align:left;">Veh. Id:</span> <?php print($vehId)?></p></td>
    				<td><p><span class="label" style="text-align:left;">At Scene:</span> <?php print($vehId)?></p></td>
    				<td colspan="2">
    					<input type="checkbox">Emerg.
    					<input type="checkbox">Non-Emerg.
    					<input type="checkbox">Refusal
    					<input type="checkbox">10-22
    				</td>
    				<td rowspan="2">
    					X
    				</td>
        		</tr>
        		
        		<tr>
        			<td colspan="3">
        				<input type="checkbox">Police
    					<input type="checkbox">Fire
    					<input type="checkbox">Family
    					<input type="checkbox">Physician
        			</td>
        			<td colspan="3">
        				<span class="label">Sex:</span> 
        				<?php 
        				print($patientGender);
        				?>
        			</td>
        			<!-- Span Row 
        			<td>
        				
        			</td>
        			 -->
        		</tr>
        		
        		<tr>
        			<td><span class="label">First Name:</span> <?php print($patientFname)?></td>
    				<td><span class="label">Middle Name:</span> <?php print($patientMname)?></td>
    				<td><span class="label">Last Name:</span> <?php print($patientLname)?></td>
    				<td><span class="label">DOB:</span> <?php print($patientDOB)?></td>
    				<td><span class="label">Address:</span> <?php print($patientAddress)?></td>
    				<td><span class="label">APT/Unit:</span> <?php print($patientApt)?></td>
    				<td><span class="label">Phone#1:</span> <?php print($patientPhone1)?></td>
        		</tr>
        		<tr>
        			<td><span class="label">City:</span> <?php print($patientCity)?></td>
    				<td><span class="label">State:</span> <?php print($patientState)?></td>
    				<td><span class="label">Zip:</span> <?php print($patientZipcode)?></td>
    				<td><span class="label">Age:</span> <?php print($patientAge)?></td>
    				<td colspan="3"><span class="label">SS#:</span> <?php print($patientSS)?></td>
        		</tr>
        		<tr>
        			<td colspan="2"><span class="label">Insurance:</span> <?php print($insurPolicy1)?></td>
    				<td colspan="2"><span class="label">Groups:</span> <?php print($insurGroup1)?></td>
    				<td colspan="2"><span class="label">Policy ID:</span> <?php print($insurPol1)?></td>
    				<td><span class="label">Phone:</span> <?php print($insurPhone1)?></td>
        		</tr>
        		<tr>
        			<td colspan="4"><span class="label">Medicaid:</span> <?php print($insurMedicaid1)?></td>
    				<td colspan="3"><span class="label">Medicare:</span> <?php print($insurMedicare1)?></td>
        		</tr>
        	
    		</table> 
    		<!-- Generate vital table -->
    		<table>
    			<tr>
    				<td>
            		<?php 
            		fillVitalTable()
            			/*$maxRow =  $_SESSION['maxRow'];
            			$vitalTime = $_SESSION['vitalTime'];
            			$vitalResRate = $_SESSION['vitalResRate'];
            			$vitalPulseRate = $_SESSION['vitalPulseRate'];
            			$txtBP = $_SESSION['$txtBP'];
            		
            			echo "<table>";
            			echo "<tr>";
            			echo "<th>Vital Time</th>
                            <th>Respiration</th>
                            <th>Pulse/BP</th>
                            <th>Level of Conscousness</th>
                            <th>Pupils</th>
                            <th>Skin</th>
                            <th>Status</th>";
            			for ($i = 0; $i <= $maxRow; $i++){
            			    $radCons = $_SESSION['radCons'. $i];
            			    $radRightPupil = $_SESSION['radRightPupil'. $i];
            			    $radLeftPupil = $_SESSION['radLeftPupil'. $i];
            			    $radSkin = $_SESSION['radSkin'. $i];
            			    $radStatus = $_SESSION['radStatus'. $i];
            			    
            			    $vitalResCheck = $_SESSION['vitalResCheck' . $i];
            			    $vitalPulseCheck = $_SESSION['chkPulse' . $i];
            			  
            			    echo "</tr><tr>";
            			    echo "<td>Vital time:" . $vitalTime[$i] . "</td>";
            			    echo "<td>Respiration: " . $vitalResRate[$i] . "<br>"
                        . "(" . implode(',', $vitalResCheck) . ")" ."</td>";
                        echo "<td>Pulse: ". $vitalPulseRate[$i] . "<br>" . implode(', ', $vitalPulseCheck) . "<br>" .
                            "BP: ". $txtBP[$i] . "</td>";
                        echo "<td>Level of Conscousness: ". $radCons ."</td>";
                        echo "<td>Pupils: " . $radRightPupil ."(Right)" . "/ ". $radLeftPupil . "(Left)" . " </td>";
                        echo "<td>Skin: " . $radSkin . "</td>";
                        echo "<td>Status: " . $radStatus ."</td>";
                			};
            			echo "</tr>";
            			echo "</table>";*/
        		    ?>
		    		</td>
    		    	<td>
    		    		<table>
        		    		<tr>
        		    			<th colspan="3"><span class="label">REVISED TRAUMA SCORE</span><th>
        		    		</tr>
        		    		<tr>
        		    			<th>GCS</th>
        		    			<th>RESP</th>
        		    			<th>Sys. B/P</th>
        		    		</tr>
        		    		<tr>
        		    			<td>4=13-15</td>
        		    			<td>3=9-12</td>
        		    			<td>2=6-8</td>
        		    		</tr>
        		    		<tr>
        		    			<td>4=13-15</td>
        		    			<td>3=9-12</td>
        		    			<td>2=6-8</td>
        		    		</tr>
        		    		<tr>
        		    			<td>4=13-15</td>
        		    			<td>3=9-12</td>
        		    			<td>2=6-8</td>
        		    		</tr>
        		    		<tr>
        		    			<td>4=13-15</td>
        		    			<td>3=9-12</td>
        		    			<td>2=6-8</td>
        		    		</tr>
    		    		</table>
    		    	</td>
    		    </tr>
    		    <tr>
		    		<td><span class="label">Medication:</span> <?php print($patientMedication) ?></td>
		    		<td><span class="label">Medical History: </span> <?php print($medicalHistory)?></td>
		    	</tr>
		    </table>
		    <!-- Vital Table End -->
		    <!-- Picture Start -->
		    <table>
		    	<tr style="display: none;">
		    		<td >
		    			<p id="painKey" class="painKey" ><?php print($painKey)?></p>
		    		</td>
		    	</tr>
		    	<tr>
		    		<td width="70%">
		    			<p>
		    			<span class="label">Different Diagnostic: </span><?php print($traumaMapItems) ?>
		    			</p>
		    		</td>
		    		<td width="30%">
		    			<img style="width:250px; height:150px" id="painMap" usemap="#painMap1" alt ="Pain Map" src="img/ron2.png">
		    			<map name="painMap1">
						<!-- To use ImageMapster, it will require to have href="#", but when it bugs out, the customJquery will keep making the page go up on top -->
						<area data-key="head" href="#" class="headArea" name="head" shape="circle" coords="60,17,13"  alt="Head">
						<area data-key="neck" href="#" class="neckArea" name="neck" shape="rect" coords="50,32,69,25"   alt="Neck">
						<area data-key="thoraxArea" href="#" alt="thoraxArea" namr="thoraxArea" coords="34,34,42,31,50,28,56,32,62,32,68,29,75,31,82,32,79,39,79,52,43,52,40,43" shape="poly">
  						<area data-key="abdomenArea" href="#" alt="abdomenArea" name="abdomenArea"  coords="44,52,77,52,76,59,80,67,73,70,68,74,62,72,55,74,48,70,40,70,44,60" shape="poly">
						<area data-key="leftArm1" href="#"  class="armArea" name="arm" shape="poly" coords="36,34,40,45,35,59,17,85,3,77,13,73,27,53,30,38"  alt="Arm" >
						<area data-key="leftArm2" href="#"  class="armArea" name="arm" shape="poly" coords="86,31,93,44,96,55,103,65,111,74,119,74,119,80,113,83,106,81,103,74,86,60,81,43"  alt="Arm" >
						<area data-key="groinArea" href="#" class="groinArea" name="groin" shape="circle" coords="63,78,7"  alt="Groin">
						<area data-key="leftLeg1" href="#"  class="legArea" name="leg" shape="poly" coords="39,73,56,75,61,82,53,109,53,118,50,128,49,143,46,148,38,142,42,131,38,118,41,107,43,99"  alt="Leg">						
						<area data-key="rightLeg2" href="#"  class="legArea" name="leg" shape="poly" coords="70,74,78,70,83,78,83,96,83,105,84,113,83,135,86,143,78,146,73,133,74,126,71,119,72,111,65,84"  alt="Leg">
						<!-- Set coordination point for click to second part of the map-- -->
						
					</map>
		    		</td>
		    	</tr>
		    </table>
		    <script>
		  
        	$('#painMap').mapster({
        		mapKey: 'data-key'
        	});
        	//Need to get this information from database
        	
        	var selectedArea = $(painKey).html();
        	
        	$('img').mapster('set',true, selectedArea);
        	</script>
		    <!-- Picture End -->
		    <p><span class="label">Chief Medical History: </span> <?php print($medicalComplain)?></p>
		    <p><span class="label">Chief Trauma Complaint: </span> <?php print($traumaComplain)?></p>
		    <p><span class="label">Reason for Transport: </span></p>
		    <table>
		    	<tr>
		    		<td class="label">Charger: </td>
		    		<td class="label">Attendant: </td>
		    		<td class="label">Receiving Nurse: </td>
		    	</tr>
		    </table>
		</page>
	</body>