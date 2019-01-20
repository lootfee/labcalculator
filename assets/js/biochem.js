$(document).ready(function() {
	
	$("#showegfrPediaCalculator").click(function() {
		$("#egfrAdult").hide();
		$("#egfrPedia").show();
	});
	
	$("#showegfrAdultCalculator").click(function() {
		$("#egfrAdult").show();
		$("#egfrPedia").hide();
	});
});