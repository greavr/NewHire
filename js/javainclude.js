$(document).ready(function() {
	////Date Picker
	$( "#StartDate" ).datepicker({ dateFormat: 'MM d, yy', minDate: 0 });
	////Pulse Account Toggle
	$("#PulseAccount").click(function(){
		$("p").toggle();
	});
 
	//Hide Divs
	$("div.PulseAccountContent").hide();
	$("div.PulseDevAccountContent").hide();
	$("div.EmailOptions").hide();
	$("div.PersonalFolderOptions").hide();
	$("div.ManagerOptions").hide();
	$("div.HardwareNotes").hide();
 });
 