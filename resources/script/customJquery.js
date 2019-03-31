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
		//Automatically Pick Time
		
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
        var btnAdd = $('#btnAdd');
    	btnAdd.click(function(){
    		//Select last ID
    		var vitalTime = $('.cloned-row .col-sm input[type=text]:nth-child(2)').last().attr('id');
    		var vitalName = $('.cloned-row .col-sm input[type=text]:nth-child(2)').last().attr('name');
    		
    		var vitalResRate = $('.cloned-row .resRate input[type=text]:nth-child(3)').last().attr('id');
    		
    		var split_id = vitalTime.split('_');
    		var split_name = vitalName.split('_') ;
    	
    		var splitResRate = vitalResRate.split('_');
    		
    		//New Index
    		var index = Number(split_id[1]) + 1;
    		
    		
    		//Testing Variable 
    		
    		console.log(vitalTime);
    		console.log(vitalResRate);
    		console.log(index);
    	
    		
    		//Create Clone
    		var newRow = $(".cloned-row:last").clone(true);
    		console.log(newRow);
    		//Set id of new elements on cloned Row
    		 $(newRow).find('.col-sm input[type=text]:nth-child(2)').attr("id","vitalTime_"+index);
    		 $(newRow).find('.col-sm input[type=text]:nth-child(2)').attr("name","vitalTime_"+index);
    		 $(newRow).find('.col-sm input[type=text]:nth-child(2)').attr("onclick","getClock(vitalTime_" + index + ")");
    		 //Set Value
    		 $(newRow).find('.col-sm input[type=text]:nth-child(2)').val("vitalTime_"+ index);
    		 
    		//Insert Element
    		$(newRow).insertAfter(".cloned-row:last");
    	});
    	
    	//Drop Vital Sign Table
    	var btnDrop = $('#btnDrop');
    	btnDrop.click(function(){
    		$(".cloned-row:last").remove();
    	});
    	
    	//Signature Pad
    	
    	//Show Item List for Pain Map
    	function mapClearLists()
        {
    		$( "#headMapList" ).css( "display", "none" );
    		$( "#neckMapList" ).css( "display", "none" );
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
    		var date = time.getDate();
    		var month = time.getMonth();
    		var year = time.getFullYear();
    		var today = month + "/" + date + "/" + year;
    		txtDate.value = today;
    		
    		$(txtDate).attr('readonly', true);
    		
    	}
    	//Pick Hours + Minutues + Seconds for time calling
    	function getClock(timeCall){
    		var time = new Date();
    		var showTime = time.getHours() + ":" + time.getMinutes();
    		timeCall.value = showTime;
        	$(timeCall).attr('readonly');

    	}
    	////Pick Hours + Minutues + Seconds for time Vital Sign
    	