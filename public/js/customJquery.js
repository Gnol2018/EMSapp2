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

//Age Calculation




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

function alertSubmit() {
	alert("");
}


//----------------Add Jsignature Pad when document is loaded-----------------
$(document).ready(function() {
	if (window.matchMedia("(max-width: 700px)").matches) {
		
		$("#signature1").jSignature({
			width: 40,
			'background-color': white,
			
			});
		$("#signature2").jSignature({
			width: 40
			});
		$("#signatureSec1").jSignature({
			width: 40
			});
		$("#signatureSec2").jSignature({
			width: 40
			});
		$("#signatureSec3").jSignature({
			width: 40
			});
		$("#signatureSec4").jSignature({
			width: 40
			});
		$("#signatureSec5").jSignature({
			width: 40
			});
		$("#signatureAPCF").jSignature({
			width: 40
			});
	}
	
	else {
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
			})
	}
	;
	
	//When a stroke is made, save data to textbox for submitting
	$('#signature1').bind('change', function()
   		   	{
       	   		var signOutput1 = $("#signature1").jSignature("getData");
       	
       	   		$('#signOut1').val(signOutput1);
   		   	});
	$('#signature2').bind('change', function()
	   	{
   	   		var signOutput2 = $("#signature2").jSignature("getData","base30");
   	   		
   	   		$('#signOut2').val(signOutput2);
	   	});
	$('#signatureSec1').bind('change', function()
	   	{
   	   		var signSec1 = $("#signatureSec1").jSignature("getData","base30");
   	  
   	   		$('#signSec1').val(signSec1);
	   	});
	$('#signatureSec2').bind('change', function()
	   	{
   	   		var signSec2 = $("#signatureSec2").jSignature("getData","base30");
   	  
   	   		$('#signSec2').val(signSec2);
	   	});
	$('#signatureSec3').bind('change', function()
	   	{
   	   		var signSec3 = $("#signatureSec3").jSignature("getData","base30");
   	  
   	   		$('#signSec3').val(signSec3);
	   	});
	$('#signatureSec4').bind('change', function()
   		{
   	   		var signSec4 = $("#signatureSec4").jSignature("getData","base30");
   	  
   	   		$('#signSec4').val(signSec4);
	   	});
	$('#signatureSec5').bind('change', function()
   		{
   	   		var signSec5 = $("#signatureSec5").jSignature("getData","base30");
   	  
   	   		$('#signSec5').val(signSec5);
	   	});
	$('#signatureAPCF').bind('change', function()
   		{
   	   		var signAPCF = $("#signatureAPCF").jSignature("getData","base30");
   	   		console.log(signAPCF);
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
	console.log($('area').mapster('deselect'));
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
	//The key need to collected here because it's the last action to pick pain Option
	console.log($('#painMap').mapster('get'));
	var painKey = ($('#painMap').mapster('get'));

	$('#painKey').val(painKey);
}

function boxShow(listName)
{
	mapClearLists();
	
	listName = $( "#" + listName);
	console.log(listName);
	//change the list to display
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