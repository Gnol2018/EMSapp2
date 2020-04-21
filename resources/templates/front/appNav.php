<header class="text-center py-3">
		<nav class="appNav navbar navbar-expand-sm">
    		<a class="navbar-brand" href="#">
      		  <img src="img/interCity.jpg" alt="logo" style="width:200px;">
     		</a>
              <ul class="navbar-nav">
              	<div class="dropdown show">
               		<a class="btn dropdown-toggle" class="nav-link" href="patientSec.php" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Patient</a>
               		<div class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
     					<a class="dropdown-item" href="addPatient.php">Add Patient</a>
     					<a class="dropdown-item" href="searchPatient.php">Search Patient</a>
     				</div>
                </div>
                <div class="dropdown show">
                  	<a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  	Medical Report
                  	</a>
                  
     				<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
     					<!-- <a class="dropdown-item" href="pcrApp.php">Patient Care Report</a> -->
     					<!--<a class="dropdown-item" href="initializePCR.php">Initialize PCR</a>  -->
     					<a class="dropdown-item" href="pcrProcess1.php">Encounter</a>
     				</div>
                </div>
               
                <li class="nav-item">
                  <a class="nav-link" href="form.php">EMS Charge Sheet</a>
                </li>
                <li class="nav-item">
               	  <a class="nav-link" href="infoFind.php">Print</a>
                </li>
               
              </ul>
              <div class="dropdown show">
              	<a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  				<?php echo 'Welcome, ' . $_SESSION['userName']?>
 				 </a>
 				 <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
 				 	<a class="dropdown-item" href="inside/logout.php">Log Out</a>
 				 </div>
              </div>
		</nav>
</header>