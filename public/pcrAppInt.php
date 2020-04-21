<?php
require_once("../resources/pdoConfig.php");
if(empty($_SESSION['userName'])) {
    redirect('index.php');
    
} else {
    findUserRole();
}
echo $_SESSION['runId'];


?>
<!DOCTYPE html>
<html lang="en">

<?php 
include(TEMPLATE_FRONT . DS . "appHeader.php") 
?>



<?php 


?>
<body>
<?php 
include(TEMPLATE_FRONT. DS. "appNav.php");
	
?>
<!-- Navgiation Start Here -->
<?php 

    include(TEMPLATE_BACK. DS. "patientReportApp/nav.php");

?>
    <!-- Navgiation End Here -->
    <script type="text/javascript" src="js/customJquery.js"></script>
    <form class="container-fluid" method="POST" id="accordion">
        <!-- Dispatch Panel Start Here -->
        <?php
        if(!empty($_SESSION['runId'])) {
            //the dispatch form should be already existed
            fillIntDispatch();
            fillDemographic1();
        }
          
        
        ?>
    	
       <!---------------- Disptach Panel End Here------------------- -->
    
       <!------------------------- Demographic Panel Start Here--------------- -->
         <?php 
         
        ?>
    	<!-- Demogrpahic Panel End Here -->
    	
    	
    	<div class="row">	
    		<div class="col-12 submitRow">
    			<input class="btn btn-primary" id="pcrSubmit" name="pcrSubmit" type="submit" value="Submit"></input>
    		</div>
    	</div>
    	<?php 
    	if(isset($_POST['pcrSubmit'])) {
    	    if (!empty($_POST['mileTotal'])) {
    	        insertDispatchForm();
    	    } 
    	}
    	?>
    	
    </form>
</body>

</html>
