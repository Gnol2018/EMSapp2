<?php
require_once("../resources/pdoConnect.php");
?>
<!DOCTYPE html>
<html lang="en">

<?php 

include(TEMPLATE_BACK . DS . "appHeader.php") ?>
<script>
//Ajax 


/*function selectPatient() {
	var id = $(this).data('id');
	console.log(id);
};*/

function loaddata(){
	var patient_Fname = document.getElementById("patientFname").value ;
	
	console.log(patient_Fname);
	if (patientFname) {
		$.ajax({
			type: 'post',
			url: 'loaddata.php',
			data: {
				patientFname:patient_Fname,
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
    		var id = $(this).data('id');
    		var firstName = $('#'+ id).children('td[data-target=firstName]').text();
    		var lastName = $('#' + id).children('td[data-target=lastName]').text();
    		var address = $('#' + id).children('td[data-target=address]').text();
    		var phone1 = $('#' + id).children('td[data-target=phone1]').text();
    		var phone2 = $('#' + id).children('td[data-target=phone2]').text();
    		console.log(firstName);
    		console.log(lastName);
    		console.log(address);
    		console.log(phone1);
    		console.log(phone2);
    		event.preventDefault();

    		$('#firstName').val(firstName);
    	    $('#lastName').val(lastName);
    	    $('#address').val(address);
    	    $('#myModal').modal('toggle');
    		
    		$.ajax({
				type: 'post',
				url: 'patientSes.php',
				data: {
					valueTrue : true,
					valueFalse: false,
					valueNull : "Null",
					//passing javascript variable to php Post variable
					patientFname:firstName,
					patientLname:lastName,
					address: patientAddress,
					phone1: patientPhone1,
					phone2: patientPhone2,
				},
				success: function(response) {
					$('#myModal').modal('toggle');
				}
            });
    	});
    	// I need to pass Javascript Value to PhP Session Here
    })
});

//Normal Javascript Here

</script>
<?php 
    if(isset($_POST['selectSubmit'])) {
      redirect('pcrAppTest.php');
    }
?>
<?php include(TEMPLATE_FRONT . DS . "patientBody.php") ?>

</html>