$(document).ready(function(){

$("#viewjobid").click(function(event){

	let jobid = $("#viewjobid").data('id');

	$.ajax({
		method:"get"
		url:"getjobinfo.php",
		data: jobid,
		success: (response){
			
		}

	});

});



});