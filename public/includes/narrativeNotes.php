<div class="card">
	<div class="card-header" id="headingOne">
        <h5 class="mb-0">
            <a class="btn btn-link" data-toggle="collapse" data-target="#narrativePanel" aria-expanded="true" aria-controls="collapseOne">
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
    	<div class="row">
    		<h3>Signature</h3>
    	</div>
    	<div class="row">
    		<div class="col">
    			<p class= "font-weight-bold">I hereby refuse emergency medical treatment and/or transportation to the nearest emergency medical facility. I acknowledge that such treatment was advised by the ambulance technician or physician. 
    			I hereby release such persons from liability for respecting my wishes and following my express directions.</p>
    		</div>
    	</div>
    	<div id="patientSign" class="row">
    	</div>
    	<script>
    	 $(document).ready(function() {
    	        $("#signature").jSignature({
        	        })
    	    });
    	</script>
    </div>
</div>