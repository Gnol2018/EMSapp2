<?php
require_once("../resources/pdoConnect.php");
$pageLocation = $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html lang="en">

<?php 

include(TEMPLATE_BACK . DS . "appHeader.php");
if (isset($_POST["btnAddPatient"])) { 
    require_once("../resources/pdoConfig.php");
    $patientFname = ($_POST['patientFname']);
    $patientLname = ($_POST['patientLname']);
    $patientAddress = ($_POST['patientAddress']);
    $patientPhone1 = ($_POST['patientPhone1']);
    $patientPhone2 = ($_POST['patientPhone2']);
    $patientZipcode = ($_POST['patientZipcode']);
    $patientDOB = ($_POST['patientDOB']);
    $patientGender = ($_POST['patientGender']);
    $patientSS = ($_POST['patientSS']);
    $patientEmerContact = ($_POST['patientEmerContact']);
    $patientEmerPhone = ($_POST['patientEmerPhone']);
    
    //Select patient info in DB then compare to not allow duplicate
    $sqlPatientIndex = 'SELECT patientFname, patientLname, patientAddress, patientDOB
                                       FROM patients
                                       WHERE (patientFname = ?
                                       AND patientLname = ?
                                       AND patientAddress = ?
                                       AND patientDOB = ?)';
    $stmtIndex = $conn->prepare($sqlPatientIndex);
    $stmtIndex->execute([$patientFname, $patientLname, $patientAddress, $patientDOB]);
    $row = $stmtIndex->fetch(PDO::FETCH_ASSOC);
    
    if($row >= 1) {
        echo '<script language="javascript">';
        echo 'alert("Patient Is Already Existed. Please Search for The Patient or Retry!")';
        echo '</script>';
    } 
    else {
        //PDO prepare SQL and Insert if patient is not existed
        $sqlPatientInfo = "INSERT INTO patients (patientFname, patientLname, patientAddress, patientPhone1, patientPhone2, patientZipcode, patientDOB, patientGender, patientSS,patientEmerContact,patientEmerPhone)
                           VALUE (?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = $conn->prepare($sqlPatientInfo);
        $stmt->execute([$patientFname,$patientLname,$patientAddress,$patientPhone1,$patientPhone2, $patientZipcode,$patientDOB,$patientGender,$patientSS,$patientEmerContact,$patientEmerPhone]);
        echo '<script language="javascript">';
        echo 'alert("Patient has been added sucessfully")';
        echo '</script>';
    }          
}
?>
<script>
//Ajax 
/*function insertPatient() {

    var patient_Fname = document.getElementById("patientFname").value;
    var patient_Lname = document.getElementById("patientLname").value;
    var patient_Address = document.getElementById("patientAddress").value;
    var patient_Phone1 = document.getElementById("patientPhone1").value;
    var patient_Phone2 = document.getElementById("patientPhone2").value;
    var patient_Zipcode = document.getElementById("patientZipcode").value;
    var patient_DOB = document.getElementById("patientDOB").value;
    var patient_Gender = document.getElementById("patientGender").value;
    var patient_SS = document.getElementById("patientSS").value;
    var patient_EmerContact = document.getElementById("patientEmerContact").value;
    var patient_EmerPhone = document.getElementById("patientEmerPhone").value;

    console.log(patient_Fname);
    console.log(patient_Lname);
    console.log(patient_Address);
    console.log(patient_Phone1);
    console.log(patient_Phone2);
    console.log(patient_Zipcode);
    console.log(patient_DOB);
    console.log(patient_Gender);
    console.log(patient_SS);
    console.log(patient_EmerContact);
    console.log(patient_EmerPhone);
    if (patient_Fname) {
		$.ajax({
			type: 'post',
			url: 'insertPatient.php',
			data: {
				patientFname:patient_Fname,
				patientLname:patient_Lname,
				patientAddress:patient_Address,
				patientPhone1:patient_Phone1,
				patientPhone2:patient_Phone2,
				patientZipcode:patient_Zipcode,
				patientDOB:patient_DOB,
				patientGender:patient_Gender,
				patientSS:patient_SS,
				patientEmerContact:patient_EmerContact,
				patientEmerPhone:patient_EmerPhone,
				
			},
			success: function(response) {
				$('#display_info').html(response);
			}
		});
	}
	else {
		$('#display_info').html("Please Enter First Name and Last Name of the Patient");
	}
}

    */
//Normal Javascript Here

</script>
<?php 

?>

<?php include(TEMPLATE_FRONT . DS . "patientBody.php") ?>

</html>