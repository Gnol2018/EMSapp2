<?php
require_once("../resources/pdoConnect.php");
if(empty($_SESSION['userName'])) {
    redirect('index.php');
    
} else {
    findUserRole();
}


?>
<!DOCTYPE html>
<html lang="en">
<?php include(TEMPLATE_BACK . DS . "appHeader.php") ?>


<?php 
if($_SESSION['userRole'] == 'admin'){  
    
    include(TEMPLATE_BACK . DS . "adminForm.php");
    
} elseif($_SESSION['userRole'] == 'medic') {
    
    include(TEMPLATE_BACK . DS . "addPatient.php");
    
}

elseif ($_SESSION['userRole'] == 'dispatcher') {
   
    
    if($_SESSION['patientFname'] & $_SESSION['patientLname']) {
        //Fill function pick up variable from the database based on searchPatient patient Index
        fillDemographic();
       
        //Assign Session Variable to Local Variable from fillDemographic()    
       
        include(TEMPLATE_BACK . DS . "varConvert.php");
        
    }
    
    //Output pcr form HTML for dispatcher
    //PhP also will echo the variable into the HTML form
    include(TEMPLATE_BACK . DS . "dispatcherForm.php");
    
}
?>
</html>
