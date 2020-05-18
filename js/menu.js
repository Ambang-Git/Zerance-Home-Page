$(document).ready(function(){
	$(".navMobile").click(function() {
		var nav = $(this).parent().find("ul");
		var htmlNav = $(this).html();
		if(htmlNav=="☰"){$(this).html("✕");}
		else{$(this).html("☰");}
		$(nav).toggle();
	});
});