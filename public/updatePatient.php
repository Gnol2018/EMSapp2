<?php
require_once("../resources/pdoConfig.php");
$pageLocation = $_SERVER['REQUEST_URI'];
?>

<!DOCTYPE html>
<html lang="en">

<?php 
include(TEMPLATE_FRONT . DS . "appHeader.php");
?>

<body>
<?php 
include(TEMPLATE_FRONT. DS. "appNav.php");

?>
<?php 
if(isset($_POST['btnUpdatePatient'])) {
    updatePatient();
    updateInsurance();
};
 if($_SESSION['patientId']) {
    
     //Fill function pick up variable from the database based on searchPatient patient Index
     fillDemographicForUpdate();
   
 } 


?>

</body>
</html>