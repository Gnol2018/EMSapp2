<div class="card">
	<div class="card-header" id="headingOne">
        <h5 class="mb-0">
            <a class="btn btn-link" data-toggle="collapse" data-target="#authorizationPanel" aria-expanded="true" aria-controls="collapseOne">
              A U T H O R I Z A T I O N
    	 	</a>
    	</h5>
    </div>
    <div class="container-fluid my-2 py-2 collapse " id="authorizationPanel">
		<blockquote class="blockquote">
         I request that payment of authorized Medicare, Medicaid, or 
          any other insurance benefits be made on my behalf to Senior Care EMS for any services provided 
          to me by Senior Care now or in the future. I understand that I am financially responsible for 
          the services provided to me by Senior Care MES 
          regardless of my insurance coverage, and in some cases, may be responsible for an amount in 
          addition to that which was paid by my insurance. I agree to immediately remit to Senior Care EMS amy payments that I receive directly from insurance or any source whatsoever for the services provided to me and I assign all rights to such payments to Senior Care EMS. I authorize Senior Care EMS to to appeal payment denials or other adverse decisions on my behalf without further authorization. I authorize and direct any holder of medical information or documentation about me to release such information to Senior Care EMS and its billing agents, and/or the Centers for Medicare andMedicaid Services and its carriers and agents, and/or any other payers or insurers as may be necessary to determine these or other benefits payable for any services provided to me by Senior Care EMS, now or in the future. A copy of this form is as valid as an original. </p>
        </blockquote>
		<p><span class="font-weight-bold">Privacy Practices Acknowledgment:</span> by signing below, I acknowledge that I
		 have received Senior Care EMS Notice of Privacy Practices.</p>
    	<h3 class="text-center">SIGNATURE SECTION: One of the following three sections MUST be completed.</h3>
    	<div class="container-fluid my-4 border border-light" >
    		<h4>SECTION I - PATIENT SIGNATURE</h4>
    		<p>The patient must sign here unless the patient is physically or mentally incapable of signing:</p>
    		<h5>Patient Signature or Mark:</h5>
    		
    		<div id="signatureSec1"></div>
    		
    		<div class="col">
       			<a onclick="signatureReset(signatureSec1)" class="btn btn-secondary">Reset</a>
       		</div>
       		
    		<p>If the patient signs with an "X" or other mark, it is recommended that someone sign below as a witness:
    		</p>
    		<h5>Witness Signature:</h5>
    		
    		<div id="signatureSec2"></div>
    		
    		<div class="col">
       			<a onclick="signatureReset(signatureSec2)" class="btn btn-secondary">Reset</a>
       		</div>
       		
    		<div class="form-inline">
    			<label class="font-weight-bold">Witness Printed Name: </label>
    			<input name="txtWitnessName" class="form-control" type="text">
    		</div>
    		<p class="font-weight-bold">
    		If patient is physically or mentally incapable of signing, Section II must be completed.
    		</p>
    	</div>
    	<div class="container-fluid my-4 border border-light">
    		<h4>SECTION II - AUTHORIZED REPRESENTATIVE SIGNATURE</h4>
    		<p>Complete this section only if patient is physically or mentally incapable of signing.</p>
    		<div class="form-inline">
    			<label>Reason the patient is physically or mentally incapable of signing: </label>
    			<input name="txtReasonII" class="form-control" type="text">
    		</div>
    		<p>Authorized representatives include only the following individuals (check one):</p>
            <div class="form-inline">
            	<input name="chkSecII[]" type="checkbox" class="form-control" value="Patient's Legal Guardian">
            	<label>Patient's Legal Guardian</label>      
            	<input name="chkSecII[]" type="checkbox" class="form-control" value="Patient's Health Care Power of Attorney">
              	<label>Patient's Health Care Power of Attorney</label>        	
            </div>
            <div class="form-inline">
            	<input name="chkSecII[]" type="checkbox" class="form-control" value="Relative or other person who receives government benefits on behalf of patient">
            	<label>Relative or other person who receives government benefits on behalf of patient</label>      
            </div>
            <div class="form-inline">
            	<input name="chkSecII[]" type="checkbox" class="form-control" value="Relative or other person who arranges treatment or handles the patient's affairs">
            	<label>Relative or other person who arranges treatment or handles the patient's affairs</label>      
            </div>
             <div class="form-inline">
            	<input name="chkSecII[]" type="checkbox" class="form-control" value="Representative of an agency or institution that furnished care, services or assistance to the patient.">
            	<label>Representative of an agency or institution that furnished care, services or assistance to the patient.</label>      
            </div>
           <p class="font-italic">I am signing on behalf of the patient. I recognize that signing on behalf of 
            the patient is not an acceptance of financial responsibility for the services rendered.</p>
            <h5>Representative's Signature:</h5>
            
             <div id="signatureSec3"></div>
             
             <div class="col">
       			<a onclick="signatureReset(signatureSec3)" class="btn btn-secondary">Reset</a>
       		 </div>
       		
            <div class="form-inline">
    			<label class="font-weight-bold">Representatives Printed Name: </label>
    			<input name="txtRepName" class="form-control" type="text">
    		</div>
    	</div>
    	
    	<div class="container-fluid my-4 border border-light">
    		<h4>SECTION III - EMERGENCIES ONLY - AMBULANCE CREW AND FACILITY REPRESENTATIVE SIGNATURES</h4>
    		<p>Complete this section only for emergency ambulance transports, if patient was physically or mentally incapable of signing,
    		 and no authorized representative (as listed in Section II) was available or willing to sign on behalf of the patient at the time of service.
    		 </p>
    		 <p class="font-weight-bold";>A. Ambulance Crew Member Statement (must be completed by crew member at time of transport)</p>
    		 <p>My signature below indicates that, at the time of service, the patient named above was physically or mentally incapable of signing, and that none of the authorized representatives listed in Section II of this form were available or willing to sign on the patient's behalf.</p>
    		 <div class="form-inline">
    		 	<label>Reason patient incapable of signing:</label>
    		 	<input name="txtReasonIII" type="text" class="form-control">
    		 	<label>	Name and Location of Receiving Facility:</label>
    		 	<input name="txtFacilityIII" type="text" class="form-control">
    		 </div>
    		 <div class="form-inline">
    		 	<label>Time at Receiving Facility:</label>
    		 	<input name="txtFacilityTime" type="text" class="form-control">
    		 </div>
    		 <h5>Signature of Crewmember:</h5>
    		 
    		 <div id="signatureSec4"></div>
    		 
    		 <div class="col">
       			<a onclick="signatureReset(signatureSec4)" class="btn btn-secondary">Reset</a>
       		 </div>
       		 
    		 <div class="form-inline">
    		 	<label class="font-weight-bold">Printed Name of Crewmember:</label>
    		 	<input name="txtCrewIII" type="text" class="form-control">
    		 </div>
    		 <p class="font-weight-bold">B. Receiving Facility Representative Signature</p>
    		 <p>The above-named patient was received by this facility at the date and time indicated above.</p>
    		 <p class="font-weight-bold">Signature of Receiving Facility Representative:</p>
    		 
    		 <div id="signatureSec5"></div>
    		 
    		 <div class="col">
       			<a onclick="signatureReset(signatureSec5)" class="btn btn-secondary">Reset</a>
       		 </div>
    		 
    		 <div class="form-inline">
    		 	<label class="font-weight-bold">Printed Name of Receiving Facility Representative: </label>
    		 	<input name="txtRepIII" type="text" class="form-control">
    		 </div>
    		 <p class="font-weight-bold">C. Secondary Documentation</p>
    		 <p>If no facility representative signature is obtained, the ambulance crew should attempt to obtain one or more of the following forms of documentation from the receiving facility that indicates that the patient was transported to that facility by ambulance on the date and time indicated above. 
    		 The release of this information by the hospital to the ambulance service is expressly permitted by Section 164.506(c) of HIPAA.
    		 </p>
    		 <div class="form-inline">
    		 	<input name="chkSecIII[]" type="checkbox" class="form-control">
    		 	<label>Patient Care Report (signed by representative of facility)</label>
    		 	<input name="chkSecIII[]" type="checkbox" class="form-control">
    		 	<label>Facility Face Sheet/Admissions Record</label>
    		 </div>
    		 <div class="form-inline">
    		 	<input name="chkSecIII[]" type="checkbox" class="form-control">
    		 	<label>Patient Medical Record</label>
    		 	<input name="chkSecIII[]" type="checkbox" class="form-control ml-1">
    		 	<label>Hospital Log or Other Similar Facility Record</label>
    		 </div>
    	</div>
   		<input hidden type="text" id="signSec1" name="signSec1">
    	<input hidden type="text" id="signSec2" name="signSec2">
    	<input hidden type="text" id="signSec3" name="signSec3">
    	<input hidden type="text" id="signSec4" name="signSec4">
    	<input hidden type="text" id="signSec5" name="signSec5">
    	
    </div>
</div>