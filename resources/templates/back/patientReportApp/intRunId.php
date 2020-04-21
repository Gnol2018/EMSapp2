<div class="card">
	<div class="card-header" id="headingOne">
    	<h5 class="mb-0">
            <a class="btn btn-link" data-toggle="collapse" data-target="#dispatchPanel" aria-expanded="true" aria-controls="collapseOne">
              D I S P A T C H
            </a>
    	</h5>
    </div>
    <div class="container-fluid my-2 py-2 collapse show" id="dispatchPanel">
    		<div class="form-row">
				<div class="col-sm">
					<label>Run Id: </label>
					<input type="text" class="form-control" name="runId" id="runId" value="">
				</div>
			</div>
			<div class="form-row">
    			<div class="form-group col-sm">
    				<label for="dispatchDate">Date</label>
    				<input required onclick="getDate(dispatchDate)" name="dispatchDate" id="dispatchDate" type="text" class="form-control" ></input>
    			</div>
    		</div>
	</div>
</div>