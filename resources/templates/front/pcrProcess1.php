<body>
	<?php 
	include(TEMPLATE_BACK. DS. "appNav.php");
	?>
	<?php 
	if(isset($_POST['runIdSubmit'])) {
	   $patientRunId = $_POST['patientRunId'];
	   $_SESSION['patientRunId'] = $patientRunId;
	   redirect('pcrProcess2.php');
	    print $_SESSION['patientRunId'];
	}
	?>
	<form class="container-fluid" method="POST">
	<div class="card">
			<div class="card-header" id="headingOne">
		      <h5 class="mb-0">
		        <a class="btn btn-link" data-toggle="collapse" data-target="#dispatchPanel" aria-expanded="true" aria-controls="collapseOne">
		          P A T I E N T
		        </a>
		      </h5>
		    </div>
			<div class="container-fluid my-2 py-2 collapse show" id="dispatchPanel" >
				<div class="form-row">
					<div class="form-group col-xl">
    					<label>Insert Run Id</label>
    					<input type="text" class="form-control" name="patientRunId" id="patientRunId" value=""></input>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-xl">
    					<input href="pcrProcesss2.php" type="submit" class="btn btn-primary" id="runIdSubmit" name="runIdSubmit" value="Submit"></input>
					</div>
				</div>
			</div>
	</div>
	</form>	
</body>