$(document).ready(function(){
	var i=0;
	var e=1;
	var slide2 = $(".slide");
	var countSlide2= slide2.length;
	var widthSlide2 = $(slide2[0]).innerWidth();
	var margeArrow = ($(window).width()*12)/100;
	$(".slider .arrow").css("right",margeArrow);
	
	$.each(slide2,function(key){
		$(slide2[key]).css("grid-column",key+1);
		$(slide2[key]).css("grid-row",1);
	});
	
	$(".arrow").on("click",function(){
		var slide = $(".slide");
		var countSlide= slide.length;	
		var NBrepeat=countSlide+countSlide2;
		
		$(".slider").css("grid-template-columns","repeat("+NBrepeat+","+widthSlide2+"px)");
			
		$.each(slide,function(key){
			$(slide[key+i]).animate({left: -widthSlide2*e});
			$(slide2[key]).clone().css({"grid-column":countSlide+key+1,"grid-row":1}).animate({left: -widthSlide2}).appendTo(".slider");	
		
		});
		
		
		i++;
		e++;
	});
});