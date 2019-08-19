//Search Patient Ajax


//Navigation Expand and Close All Button 
function expandAll(){
	
		$('#dispatchPanel').collapse('show');
		$('#demographicPanel').collapse('show');
		$('#problemPanel').collapse('show');
		$('#treatmentPanel').collapse('show');
		$('#dispositionPanel').collapse('show');
		$('#narrativePanel').collapse('show');
		$('#authorizationPanel').collapse('show');
		$('#apcfpPanel').collapse('show');
	
};
function closeAll(){
	
	$('#dispatchPanel').collapse('hide');
	$('#demographicPanel').collapse('hide');
	$('#problemPanel').collapse('hide');
	$('#treatmentPanel').collapse('hide');
	$('#dispositionPanel').collapse('hide');
	$('#narrativePanel').collapse('hide');
	$('#authorizationPanel').collapse('hide');
	$('#apcfpPanel').collapse('hide');
	
};
	//Script to calculate the milleage
function mileCal(){
	var e = document.getElementById("mileEnd").value ;
	var b = document.getElementById("mileBegin").value;
	var t = e - b;
	if (t < 0) {
		document.getElementById("mileTotal").value = "The Input is Invalid"
	} else {
		document.getElementById("mileTotal").value = t;
	}
}


// Extra Input when User check "Other EMS" 
var chkbox = $('#chk1OtherEMS');
var showAgency = $('#emsAgency');


chkbox.on('click', function() {
	if($(this).is(':checked')){
		showAgency.show();
		
	} else {
		showAgency.hide();
	}				
})
//Show the Trauma Section 		
var checkbox = $('#chkTrauma');
var showTrauma = $('#emsTrauma');

console.log(checkbox)
console.log(showAgency)
showAgency.hide();

checkbox.on('click', function() {
	if($(this).is(':checked')){
		showTrauma.show();		
		} else {
		showTrauma.hide();
		}				
	})	
//Helpful Checkbox Function
function chkBoxGetInput(txtBox,inputVal){
	txtBox = $(txtBox);
	inputVal = $(inputVal);
	txtBox.on('change', function() {
		inputVal.attr('value') = txtBox.attr('value');
	})
};

//Add Vital Sign Table

$("#btnAdd").click(function(){
	var btnAdd = $('#btnAdd');
	//Select last ID of the last row
	var vitalTime = $('.cloned-row .col-sm input[type=text]:nth-child(2)').last().attr('id');
	
	var vitalCons = $('.cloned-row .vitalCons input[type=radio]').last().attr('name');
	var vitalResRate = $('.cloned-row .resRate input[type=text]:nth-child(3)').last().attr('id');
	
	var split_id = vitalTime.split('_');
	console.log(split_id);
	var splitResRate = vitalResRate.split('_');
	
	//New Index
	var index = Number(split_id[1]) + 1;
	
	//Testing Variable 
	
	console.log(vitalTime);
	console.log(vitalResRate);
	console.log(index);

	$(rowNumber).val("Row_" + index); 
	//Create Clone
	var newRow = $(".cloned-row:last").clone(true);
	console.log(newRow);
	//Set new Id for textbox
	 $(newRow).find('.col-sm input[type=text]:nth-child(2)').attr("id","vitalTime_"+index);
	 
	 //Set new Name for Radio Button
	 $(newRow).find('.vitalCons input[type=radio]').attr("name","radCons" + index);
	 $(newRow).find('.col-sm .rightPupils input[type=radio]').attr("name","radRightPupil" + index);
	 $(newRow).find('.col-sm .leftPupils input[type=radio]').attr("name","radLeftPupil" + index);
	 $(newRow).find('.vitalSkin input[type=radio]').attr("name","radSkin" + index);
	 $(newRow).find('.vitalStatus input[type=radio]').attr("name","radStatus" + index);
	 //Set new Name for Checkbox
	 $(newRow).find('.resRate input[type=checkbox]').attr("name","vitalResCheck" + index + "[]");
	 $(newRow).find('.vitalPulse input[type=checkbox]').attr("name","chkPulse" + index + "[]");
	 
	 $(newRow).find('.col-sm input[type=text]:nth-child(2)').attr("onclick","getClock(vitalTime_" + index + ")");
	 //Set Value
	 $(newRow).find('.col-sm input[type=text]:nth-child(2)').val("vitalTime_"+ index);
	 
	//Insert Element
	$(newRow).insertAfter(".cloned-row:last");
});

//Drop Vital Sign Table

$("#btnDrop").click(function(){
	var btnDrop = $('#btnDrop');
	//Select last ID of the last row
	var vitalTime = $('.cloned-row .col-sm input[type=text]:nth-child(2)').last().attr('id');
	var split_id = vitalTime.split('_');
	if (split_id[1] > 0){
		$(".cloned-row:last").remove();
	}
	else {
		return false;
	}
	
});

//----------------Add Jsignature Pad when document is loaded-----------------
$(document).ready(function() {
	
	$("#signature1").jSignature({
		height: 150
		});
	$("#signature2").jSignature({
		height: 150
		});
	$("#signatureSec1").jSignature({
		height: 150
		});
	$("#signatureSec2").jSignature({
		height: 150
		});
	$("#signatureSec3").jSignature({
		height: 150
		});
	$("#signatureSec4").jSignature({
		height: 150
		});
	$("#signatureSec5").jSignature({
		height: 150
		});
	$("#signatureAPCF").jSignature({
		height: 150
		});
	//When a stroke is made, save data to textbox for submitting
	$('#signature1').bind('change', function()
   		   	{
       	   		var signOutput1 = $("#signature1").jSignature("getData");
       	
       	   		$('#signOut1').val(signOutput1);
   		   	});
	$('#signature2').bind('change', function()
	   	{
   	   		var signOutput2 = $("#signature2").jSignature("getData");
   	   		
   	   		$('#signOut2').val(signOutput2);
	   	});
	$('#signatureSec1').bind('change', function()
	   	{
   	   		var signSec1 = $("#signatureSec1").jSignature("getData");
   	  
   	   		$('#signSec1').val(signSec1);
	   	});
	$('#signatureSec2').bind('change', function()
	   	{
   	   		var signSec2 = $("#signatureSec2").jSignature("getData");
   	  
   	   		$('#signSec2').val(signSec2);
	   	});
	$('#signatureSec3').bind('change', function()
	   	{
   	   		var signSec3 = $("#signatureSec3").jSignature("getData");
   	  
   	   		$('#signSec3').val(signSec3);
	   	});
	$('#signatureSec4').bind('change', function()
   		{
   	   		var signSec4 = $("#signatureSec4").jSignature("getData");
   	  
   	   		$('#signSec4').val(signSec4);
	   	});
	$('#signatureSec5').bind('change', function()
   		{
   	   		var signSec5 = $("#signatureSec5").jSignature("getData");
   	  
   	   		$('#signSec5').val(signSec5);
	   	});
	$('#signatureAPCF').bind('change', function()
   		{
   	   		var signAPCF = $("#signatureAPCF").jSignature("getData");
   	   		$('#signAPCF').val(signAPCF);
	   	});
});
//Add Reset button
function signatureReset(signatureDiv) {
	$(signatureDiv).jSignature("reset");
}


//---------------------------Jsignature Pad end here----------------------------

//------------Imapster Function Right Here-------------------------
function deselectAll(){
	$('area').mapster('deselect');
}
 
//------------Imapster Function End Here-------------------------

//------------Show Item List for Pain Map----------------
function mapClearLists()
{
	$( "#headMapList" ).css( "display", "none" );
	$( "#neckMapList" ).css( "display", "none" );
	$( "#thoraxMapList" ).css( "display", "none" );
	$( "#abdomenMapList" ).css( "display", "none" );
	$( "#armMapList" ).css( "display", "none" );
	$( "#groinMapList" ).css( "display", "none" );
	$( "#legMapList" ).css( "display", "none" );
}

function boxShow(listName)
{
	mapClearLists();
	listName = $( "#" + listName);
	listName.css("display", "");
}

//Select Item for Pain Map then display to the Text Area

function checkMap(listBox, boxName, selectName)
{
    console.log(listBox);
    console.log(boxName);
    console.log(selectName);
    var prefix = $(selectName).text();
	var currentItems = $(listBox).val();
	//How the heck does this work?
	$(boxName).val($(boxName).val() + prefix + ": " + currentItems + "," + "\n");
	mapClearLists();
}
//Pick Date for dispatch fomr
function getDate(txtDate){
	var time = new Date();
	var month = time.getMonth() + 1;
	var monthFormat = month;
	if (month < 10) {
		monthFormat = "0" + month;
	} else {
		monthFormat = month;
	}
	var date = time.getDate();
	var year = time.getFullYear();
	var today = monthFormat + "/" + date + "/" + year;
	txtDate.value = today;
	$(txtDate).attr('readonly', true);
}
//Get Run Id for dispatch Form
function getRunId(txtDate){
	var time = new Date();
	var month = time.getMonth() + 1;
	var date = time.getDate();
	var year = time.getFullYear();
	var dateIndex = month + date + year;
}
//Pick Hours + Minutues + Seconds for time calling
function getClock(timeCall){
	var time = new Date();
	var minutes = time.getMinutes();
	var minutesFormat = minutes; 
	if (minutes < 10) {
		minutesFormat = "0" + minutes;
	} else {
		minutesFormat = minutes;
	}
	var showTime = time.getHours() + ":" + minutesFormat;
	timeCall.value = showTime;
	$(timeCall).attr('readonly');

}
//------------Show Item List for Pain Map End----------------

//------------------Autofill Function----------------------

//------------------Autofill Function End Here----------------------