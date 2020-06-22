$(document).ready(function(){
			
	$("dd").hide();
	$("dt").click(function(){
		$("dd").slideUp(500);
		$(this).next().slideDown(500);
	});

});