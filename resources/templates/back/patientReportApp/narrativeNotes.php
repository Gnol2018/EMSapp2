<div class="card">
	<div class="card-header" id="headingOne">
        <h5 class="mb-0">
            <a id="narrativeToggle" class="btn btn-link" data-toggle="collapse" data-target="#narrativePanel" aria-expanded="true" aria-controls="collapseOne">
              N A R R A T I V E N O T E S
    	 	</a>
    	</h5>
    </div>
   
    	
    <div class="container-fluid my-2 py-2 collapse signature-component " id="narrativePanel">
      
    	<div class="row">
    		<div class="col-lg">
        		<div class="form-group">
        			<label>Notes</label>
        			<textarea class="form-control" row="10"></textarea>
        		</div>
    		</div>
    	</div>
    	
    	
    	
    	 <div id="signature1">
    	 <h3>Signature</h3>
       	</div>
       	<div class="row">
       		<div class="col">
       			<a class="btn" id="signatureSave">Save Signature</a>
       		</div>
       	</div>
    	
    	
    	<div class="row">
    
    		<div class="col">
    			<h3>Patient</h3>
    			<p class= "font-weight-bold">I hereby refuse emergency medical treatment and/or transportation to the nearest emergency medical facility. I acknowledge that such treatment was advised by the ambulance technician or physician. 
    			I hereby release such persons from liability for respecting my wishes and following my express directions.</p>
    		</div>
    	</div>
    	<div id="signature2">
    	
    	</div>
    	<input type="text" id="signOut1" name="signOut1">
    	<input type="text" id="signOut2" name="signOut2">
   		<script>
   		$('#accordion').one('shown.bs.collapse', function() {
   			$("#signature1").jSignature();
   			$("#signature2").jSignature();
   			
   		});
   		
   		$('#signatureSave').on('click', function() {
   			var signOutput1 = $("#signature1").jSignature("getData");
   			var signOutput2 = $("#signature2").jSignature("getData");
   			
   			$('#signOut1').val(signOutput1);
   			$('#signOut2').val(signOutput2);
   	   		});
   		
   		   		
   		</script>
    </div>
</div>