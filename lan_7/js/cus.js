$(".menu-left > li").on("mouseenter",function(){
	
	var text = $(this).find("a").attr("title");
	
	$(".menu-content").css("background","rgba(52, 59, 66, 0.6)");
	
	$(".menu-content").text(text);
	
});

$(".menu-left > li").on("mouseleave",function(){
	
	$(".menu-content").css("background","none");
	$(".menu-content").text("");
	
});

// Speaker
$('document').ready(function(){
	var content = $(".content-avatar").html();
	$(".speakers section.content").html(content);
	$(".speakers ul li:eq(0)").find("img").css("border", "5px solid #ff8000");
});
$(".speakers ul > li").click(function(){
	
	var name = $(this).find("img").attr("alt");
	var content = $(".content-"+name).html();
	
	$(".speakers ul li img").css("border", "5px solid #dadada");
	$(this).find("img").css("border", "5px solid #ff8000");
	
	$(".speakers section.content").html(content);
	
	return false;
});

//$(".agenda ul > li").click(function(){
//	 
//	$(".agenda ul").find("li figure:eq(1)").removeClass("white");
//	$(".agenda ul").find("li figure:eq(1)").addClass("gray");
//	
//	$(this).find("figure:eq(1)").removeClass("gray");
//	$(this).find("figure:eq(1)").addClass("white");
//	
//	var sub = $("figure.sub");
//	if($(this).find( sub ).length > 0){
//		$(this).find( sub ).toggle();
//	}
//	
//	 
//});

$("#range_01").ionRangeSlider();
$("#range_02").ionRangeSlider();
$("#range_03").ionRangeSlider();
$("#range_04").ionRangeSlider();
$("#range_05").ionRangeSlider();
$("#range_06").ionRangeSlider();
$("#range_07").ionRangeSlider();

$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});





	

