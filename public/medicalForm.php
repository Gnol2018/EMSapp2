<?php 
    ob_start();
    session_start();
    
    $mileTotal = $_SESSION['mileTotal'];
    $dispatchDate = $_SESSION['dispatchDate'];
    $runId = $_SESSION['runId'];
    $vehId = $_SESSION['vehId'];
    $dispatchAgency = $_SESSION['dispatchAgency'];
    $dispatchLocation = $_SESSION['dispatchLocation'] ;
    $lCode = $_SESSION['lCode'];
    $dispatchInfo = $_SESSION['dispatchInfo'];
    $lType = $_SESSION['lType'];
    $dispatchCross = $_SESSION['dispatchCross'];
    $timeReceived = $_SESSION['timeReceived'];
    $timeRoute = $_SESSION['timeRoute'] ;
    $timeAtScene = $_SESSION['timeAtScene'] ;
    $timeFromScene = $_SESSION['timeFromScene'];
    $timeAtDes = $_SESSION['timeAtDes'] ;
    $timeInService = $_SESSION['timeInService'];
    $timeInQuarter = $_SESSION['timeInQuarter'];
    $dispatchCallType = $_SESSION['dispatchCallType'];
    $dispatchPatientNumb = $_SESSION['dispatchPatientNumb'];
    $dispatchMethod = $_SESSION['dispatchMethod'];
    
    $patientFname = $_SESSION['patientFname'];
    $patientMname = $_SESSION['patientMname'];
    $patientLname = $_SESSION['patientLname'];
    $patientAddress = $_SESSION['patientAddress'];
    $patientApt = $_SESSION['patientAptUnit'];
    $patientPhone1 = $_SESSION['patientPhone1'];
    $patientPhone2 = $_SESSION['patientPhone2'];
    $patientCity = $_SESSION['patientCity'];
    $patientState = $_SESSION['patientState'];
    $patientZipcode = $_SESSION['patientZipcode'];
    $patientDOB = $_SESSION['patientDOB'];
    $patientGender = $_SESSION['patientGender'];
    $patientSS = $_SESSION['patientSS'];
    $patientAge = $_SESSION['patientAge'];
    $patientEmerContact = $_SESSION['patientEmerContact'];
    $patientEmerPhone = $_SESSION['patientEmerPhone'];
    
    $traumaComplaint = $_SESSION['traumaComplaint'];
    $traumaInjury = $_SESSION['traumaInjury'];
    $presentProblem = $_SESSION['presentProblem'];
    $medicalComplaint = $_SESSION['medicalComplaint'];
    $pastMedical = $_SESSION['pastMedical'];
    $patientMedication = $_SESSION['patientMedication'];
    $traumaMapItems = $_SESSION['traumaMapItems'];
    
    //Treatment Given
    $chkALS = $_SESSION['chkALS'];
    $chkALStxt1 = $_SESSION['chkALStxt1'];
    $chkALStxt2 = $_SESSION['chkALStxt2'];
    $radEKG = $_SESSION['radEKG'];
    $chkALStxt3 = $_SESSION['chkALStxt3'];
    $txtCath = $_SESSION['txtCath'];
    $chkBLS = $_SESSION['chkBLS'];
    $txtArtificial = $_SESSION['txtArtificial'];
    $txtCPR = $_SESSION['txtCPR'];
    $txtCPRstart = $_SESSION['txtCPRstart'];
    $txtCPRarrest = $_SESSION['txtCPRarrest'];
    
    $numDef = $_SESSION['numDef'];
    $radBLS4 = $_SESSION['radBLS4'];
    $txtMast = $_SESSION['txtMast'];
    $txtBleedCtrl = $_SESSION['txtBleedCtrl'];
    $radLimb = $_SESSION['radLimb'];
    $radBackBoard = $_SESSION['radBackBoard'];
    $txtVomit = $_SESSION['txtVomit'];
    $txtVomitMethod = $_SESSION['txtVomitMethod'];
    $radLimb = $_SESSION['radLimb'];
    $radLimb = $_SESSION['radLimb'];
    $txtRestraints = $_SESSION['txtRestraints'];
    $txtBabyDelivery = $_SESSION['txtBabyDelivery'];
    $txtBabyCountry = $_SESSION['txtBabyCountry'];
    $radBaby = $_SESSION['radBaby'];
    $txtAEDshock = $_SESSION['txtAEDshock'];
    $txtBLSother = $_SESSION['txtBLSother'];
    
  /*  $_SESSION['txtBabyDelivery'] = $txtBabyDelivery;
    $_SESSION['txtBabyCountry'] = $txtBabyCountry;
    $_SESSION['radBaby'] = $radBaby;
    $_SESSION['txtAEDshock'] = $txtAEDshock;
    $_SESSION['txtBLSother'] = $txtBLSother;
    
    */
    
    //Narrtive Notes
    $txtNarrativeNote = $_SESSION['txtNarrativeNote'];
    $signOut1 = $_SESSION['signOut1'];
    $signOut2 = $_SESSION['signOut2'];
?>
<!DOCTYPE>
<html>
	<head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   		
   		<style>
      	body {
          background: rgb(204,204,204); 
        }
       
        .page {
          background: white;
          display: block;
          margin: 0 auto;
          margin-bottom: 0.5cm;
          box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
        }
        .header{
          text-align: center;
        }
        
        .title {
        font-family:Arial,sans-serif;
        font-size:133.1%;
        font-weight:bold;
        width:100%;
        }
        table {
        width: 100%;
        margin: 5px;
        border: 2px solid black;
        }
        table th td {
        margin: 1px;
        border: 1px solid black;
        
        }
        
        .label {
            font-weight:bold;
            text-decoration:underline;
        }
        .signaturePad {
            background-color: black;
        }
       /* .page[size="A4"] {  
          width: 21cm;
          height: 29.7cm; 
        }
        .page[size="A4"][layout="landscape"] {
          width: 29.7cm;
          height: 21cm;  
        }*/
        @media print {
          body, page {
            margin: 0;
            box-shadow: 0;
          }
        }
   		</style>
	</head>
	<body class="page">
		<div>
			<h1 style="text-align:center;">INTERCITY AMBULANCER FOR EMGERCENCY MEDICAL REPORT</h1>
			<h2 style="text-align:center;">PATIENT CARE REPORT</h2>
			<table>
				<tr>
					<td><p><span class="label" style="text-align:left;">Total Milleage:</span> <?php print($mileTotal)?> miles</p></td>
					<td><p><span class="label" style="text-align:left;">Date:</span> <?php print($dispatchDate)?></p></td>
					<td><p><span class="label" style="text-align:left;">Run Id:</span> <?php print($runId)?></p></td>
					<td><p><span class="label" style="text-align:left;">Veh. Id:</span> <?php print($vehId)?></p></td>
				</tr>
				
				<tr>
    				<td><span class="label">Agency Name:</span> <?php print($dispatchAgency)?></td>
    				<td><span class="label">Location:</span> <?php print($dispatchLocation)?></td>
    				<td><span class="label">L.code:</span> <?php print($lCode)?></td>
    				<td><span class="label">Dispatch Info:</span> <?php print($dispatchInfo)?></td>
    			</tr>
    			
				<tr>
    				<td colspan="2"><span class="label">L. Type</span> <?php print($lType)?></td>
    				<td colspan="2"><span class="label">Cross Street:</span> <?php print($dispatchCross)?></td>
    			</tr>
    			
    			<tr>
    				<td><span class="label">Call Received:</span> <?php print($timeReceived)?></td>
    				<td><span class="label">On Route:</span> <?php print($timeRoute)?></td>
    				<td><span class="label">At Scene:</span> <?php print($timeAtScene)?></td>
    				<td><span class="label">From Scene:</span> <?php print($timeFromScene)?></td>
    			</tr>
    			<tr>
    				<td><span class="label">At Destination:</span> <?php print($timeAtDes)?></td>
    				<td><span class="label">In Serrvice:</span> <?php print($timeInService)?></td>
    				<td><span class="label">In Quarter:</span> <?php print($timeInQuarter)?></td>
    			</tr>
    			<tr>
    				<td><span class="label">Call Type:</span> <?php print($dispatchCallType)?></td>
    				<td><span class="label">Patient Number:</span> <?php print($dispatchPatientNumb)?></td>
    				<td><span class="label">Dispatch Method:</span> <?php print($dispatchMethod)?></td>
				</tr>
			</table>
			
			<table>
				<tr>
					<td><span class="label">First Name:</span> <?php print($patientFname)?></td>
    				<td><span class="label">Middle Name:</span> <?php print($patientMname)?></td>
    				<td><span class="label">Last Name:</span> <?php print($patientLname)?></td>
    				<td><span class="label">DOB:</span> <?php print($patientDOB)?></td>
				</tr>
				<tr>
					<td><span class="label">Address:</span> <?php print($patientAddress)?></td>
    				<td><span class="label">APT/Unit:</span> <?php print($patientApt)?></td>
    				<td><span class="label">Phone#1:</span> <?php print($patientPhone1)?></td>
    				<td><span class="label">Phone#2:</span> <?php print($patientPhone2)?></td>
				</tr>
				<tr>
					<td><span class="label">City:</span> <?php print($patientCity)?></td>
    				<td><span class="label">State:</span> <?php print($patientState)?></td>
    				<td><span class="label">Zip:</span> <?php print($patientZipcode)?></td>
    				<td><span class="label">Age:</span> <?php print($patientAge)?></td>
				</tr>
				<tr>
					<td><span class="label">Gender:</span> <?php print($patientGender)?></td>
    				<td><span class="label">SS#:</span> <?php print($patientSS)?></td>
    				<td><span class="label">Emergency Contact:</span> <?php print($patientEmerContact)?></td>
    				<td><span class="label">Emergency Phone:</span> <?php print($patientEmerPhone)?></td>
				</tr>
			</table>
		
			<table>
				<tr>
					<td colspan="2"><span class="label">Chief Complaint - Trauma:</span> <?php print($traumaComplaint)?>
					</td>
					<td>
    					<span class="label">Mechanism of Injury:</span> <?php foreach($traumaInjury as $result){
                        echo $result, ', ';}?></td>
                   	<td>
                       	<p><span class="label">Presenting Problem:</span> <?php foreach($presentProblem as $Problemresult){                                echo $Problemresult, ', ';
                        }?></p>
                    </td>
   
				</tr>
				<tr>
					<td colspan="2"><span class="label">Diagnostic:</span> <?php print($traumaMapItems)?></td>
					<td colspan="2"><img src="img/ron1.gif"</td>
				</tr>
				
				
			</table>
			<table>
				<tr>
					<td colspan="2"><span class="label">Chief Complaint - Medical:</span> <?php print($medicalComplaint)?>
					</td>
					<td><span class="label">Past Medical History:</span> <?php foreach($pastMedical as $result){
                    echo $result, ', ';}?>
                    </td>
                    <td><span class="label">Medication:</span> <?php print($patientMedication)?>
					</td>
				</tr>
				<tr>
					<td><span class="label">Allergy:</span>
					</td>
					<td><span class="label">Other:</span> 
					</td>
				</tr>
			</table>
		</div>
		<table>
			<tr>
				<td>
				<p><span class="label">Advanced Life Support (ALS):</span> 
					<?php 
					foreach($chkALS as $result){
                        echo $result . ', ';}; 
                    if(isset($chkALStxt1)){
                        echo'EKG Monitored[Rythm(s): ' . $chkALStxt1 . ']' . ", "; 
                        } 
                    if(isset($chkALStxt2)){
                        echo'Cardioversion No. Times: ' . $chkALStxt2 . '('. $radEKG . ')' . ", ";
                        } 
                    if(isset($chkALStxt3)){
                        echo 'IV Established Fluid: ' . $chkALStxt3 . "/ " . 'Cath. Gauge ' . $txtCath  . ", ";
                    }
                 ?></p>
				</td>
				<td>
				<p><span class="label">Basic Life Support (BLS)</span> 
				<?php 
				
				
				if(isset($txtArtificial)) {
				    echo 'Artificial Ventilation Method: ' . $txtArtificial;
				}
				if(isset($txtCPRstart)) {
				    echo 'C.P.R. started @ ' . $txtCPRstart . "/ Time from Arrest til CPR " . $txtCPRarrest . ", ";
				}
				if(isset($numDef)) {
				    echo 'Defibrillation No. Times: ' . $txtCPRstart . "(" . $radBLS4 . "), ";
				}
				if(isset($txtMast)) {
				    echo 'Mast Infated: ' . $txtMast . ", ";
				}
				if(isset($txtBleedCtrl)) {
				    echo 'Bleeding/Hemorrhage Controlled (Method:' . $txtBleedCtrl . "), ";
				}
				if(isset($radLimb)){
				    echo 'Limb Immobilized by: ' . $radLimb . ', ';
				}
				if(isset($radBackBoard)){
				    echo 'Backboard Immobil: ' . $radBackBoard . ', ';
				}
				if(isset($txtVomit)){
				    echo 'Vomiting Induced @ ' . $txtVomit . '/ Method: '. $txtVomitMethod . ', ';
				}
				
				echo implode(", ", $chkBLS);
				?></p>
				</td>
			</tr>
		</table>
		<table>
			<tr>
				<td><p><span class="label">Narrative Note:  </span><?php echo $txtNarrativeNote;?></p></td>
				<td>
				<img class="signaturePad" style="width:350px; height:auto;" src= <?php print($signOut1)?> alt="Signature">
				</td>
			</tr>
			<tr>
				<td colspan="2">
				<p style="font-weight: bold">I hereby refuse emergency medical treatment and/or transportation to the nearest emergency medical facility.
				 I acknowledge that such treatment was advised by the ambulance technician or physician.
				  I hereby release such persons from liability for respecting my wishes and following my express directions.</p>
				</td>
			</tr>
			<tr>
    			<td colspan="2">
        			<p><span class="label">Patient Signature:  </span></p>
        			<img class="signaturePad" style="width:350px; height:auto;" src= <?php print($signOut2)?> alt="Patient Signature">
    			</td>
			</tr>
		</table>
		<div>
			<blockquote>
				I request that payment of authorized Medicare, Medicaid, or any other insurance benefits be made on my behalf to Senior Care EMS for any services provided to me by Senior Care now or in the future. I understand that I am financially responsible for the services provided to me by Senior Care MES regardless of my insurance coverage, and in some cases, may be responsible for an amount in addition to that which was paid by my insurance. I agree to immediately remit to Senior Care EMS amy payments that I receive directly from insurance or any source whatsoever for the services provided to me and I assign all rights to such payments to Senior Care EMS. I authorize Senior Care EMS to to appeal payment denials or other adverse decisions on my behalf without further authorization. I authorize and direct any holder of medical information or documentation about me to release such information to Senior Care EMS and its billing agents, and/or the Centers for Medicare andMedicaid Services and its carriers and agents, and/or any other payers or insurers as may be necessary to determine these or other benefits payable for any 
				services provided to me by Senior Care EMS, now or in the future. A copy of this form is as valid as an original.
			</blockquote>
		</div>
		<p><span style="font-weight:bold">Privacy Practices Acknowledgment:</span> by signing below, I acknowledge that I have received Senior Care EMS Notice of Privacy Practices.</p>
	</body>
</html>