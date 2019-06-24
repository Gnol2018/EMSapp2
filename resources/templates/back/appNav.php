<header class="text-center py-3">
		<nav class="appNav navbar navbar-expand-sm">
    		<a class="navbar-brand" href="#">
      		  <img src="img/interCity.jpg" alt="logo" style="width:200px;">
     		</a>
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="pcrApp.php">Medical Report</a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="form.php">EMS Charge Sheet</a>
                </li>
                <li class="nav-item">
               	  <a class="nav-link" href="infoFind.php">Dispatch Info</a>
                </li>
                <li class="nav-item">
               	  <a class="nav-link" href="patientSec.php">Patient</a>
                </li>
              </ul>
              <div class="dropdown show">
              	<a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  				<?php echo 'Welcome, ' . $_SESSION['userName']?>
 				 </a>
 				 <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
 				 	<a class="nav-link" href="inside/logout.php">Log Out</a>
 				 </div>
              </div>
		</nav>
</header>