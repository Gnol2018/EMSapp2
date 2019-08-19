<?php
require_once("../resources/pdoConnect.php");
$pageLocation = $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html lang="en">

<?php 

include(TEMPLATE_BACK . DS . "appHeader.php") ?>
<script>

//Ajax 
function loaddata(){
	var patient_Fname = document.getElementById("patientFname").value ;
	var patient_Lname = document.getElementById("patientLname").value ;
	
	
	console.log(patient_Fname);
	if (patientFname) {
		$.ajax({
			type: 'post',
			url: 'loaddata.php',
			data: {
				patientFname:patient_Fname,
				patientLname:patient_Lname,
			
			},
			success: function(response) {
				$('#display_info').html(response);
			}
		});
	}
	else {
		$('#display_info').html("Please Enter First Name and Last Name of the Patient");
	}
};

function loadall() {
	$.ajax({
		type: 'post',
		url: 'loadAll.php',
		success: function(response) {
			$('#display_info').html(response);
		}
	})	
};


$(document).ajaxComplete(function() {
    $(document).ready(function(){
        
    	$(document).on('click', 'a[data-role=select]', function() {
        	//Find data input in the row of the select button
    		var id = $(this).data('id');
    		var firstName = $('#'+ id).children('td[data-target=firstName]').text();
    		var lastName = $('#' + id).children('td[data-target=lastName]').text();
    		var address = $('#' + id).children('td[data-target=address]').text();
    		var dob = $('#' + id).children('td[data-target=dob]').text();
    		var phone1 = $('#' + id).children('td[data-target=phone1]').text();

    		
    		event.preventDefault();
			//Pass data form input to modal
    		$('#firstName').val(firstName);
    	    $('#lastName').val(lastName);
    	    $('#address').val(address);
    	    $('#dob').val(dob);
    	    $('#phone1').val(phone1);
    	    $('#myModal').modal('toggle');

    	    console.log(firstName);
    		console.log(lastName);
    		console.log(address);
    		console.log(dob);
    		console.log(phone1);

			var modalFnam = $('#firstName').val();
			 console.log(modalFnam);
			 
    	});
    	
    })
});

//Normal Javascript Here

</script>

<?php 
//Pick Information to auto-fill
transferPatient();

include(TEMPLATE_FRONT . DS . "patientBody.php") 

?>

</html>