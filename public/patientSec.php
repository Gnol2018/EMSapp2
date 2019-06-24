<?php
require_once("../resources/pdoConnect.php");
?>
<!DOCTYPE html>
<html lang="en">

<?php include(TEMPLATE_BACK . DS . "appHeader.php") ?>
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
    		alert('Click');
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
    	});
    })
});

//Normal Javascript Here

</script>
<?php include(TEMPLATE_FRONT . DS . "patientBody.php") ?>

</html>