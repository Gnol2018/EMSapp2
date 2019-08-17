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



$(document).ajaxComplete(function() {
    $(document).ready(function(){
        
    	$(document).on('click', 'a[data-role=select]', function() {
        	//Find data input in the row of the select button
    		var id = $(this).data('id');
    		var firstName = $('#'+ id).children('td[data-target=firstName]').text();
    		var lastName = $('#' + id).children('td[data-target=lastName]').text();
    		var address = $('#' + id).children('td[data-target=address]').text();
    		var phone1 = $('#' + id).children('td[data-target=phone1]').text();
    		var phone2 = $('#' + id).children('td[data-target=phone2]').text();

    		
    		event.preventDefault();
			//Pass data form input to modal
    		$('#firstName').val(firstName);
    	    $('#lastName').val(lastName);
    	    $('#address').val(address);
    	    $('#phone1').val(phone1);
    	    $('#phone2').val(phone2);
    	    $('#myModal').modal('toggle');

    	    console.log(firstName);
    		console.log(lastName);
    		console.log(address);
    		console.log(phone1);
    		console.log(phone2);

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