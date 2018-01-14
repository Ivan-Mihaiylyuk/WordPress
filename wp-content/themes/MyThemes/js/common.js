$(document).ready(function() {

 $("#portfolio_grid").mixItUp();//Анимация плиток

 $(".s_portfolio li").click(function() {//Портфолио клики на ссылки
 	 $(".s_portfolio li").removeClass("active");
 	 $(this).addClass("active")//Портофолио клики на ссылки
 });
 
 $('.popup').magnificPopup({type:'image'});//Фото - открытие
 $(".popup_content").magnificPopup({//Фото блогов
		type:"inline",
		midClick: true
	});

$(".portfolio_item").each(function(i) {//Раздача айди плиткам
		$(this).find("a").attr("href", "#work_" + i);
		$(this).find(".podrt_descr").attr("id", "work_" + i);
	});//Айдишники для плиток

 $(".section_header").animated("fadeInUp", "fadeOutDown");

 $(".animation_1").animated("zoomInDown", "zoomOutDown");//Фото анимация
 $(".animation_2").animated("fadeInLeft", "fadeOutDown");//Анимация левый блок
 $(".animation_3").animated("fadeInRight", "fadeOutDown");//Анимация правый блок
 
  $(".left .resume_item").animated("fadeInLeft", "fadeOutDown");//Анимация работа
  $(".right .resume_item").animated("fadeInRight", "fadeOutDown");//Анимация учеба
function heightDetect() { //Адаптация начало
	$(".main_head").css("height", $(window).height());  //Паралакс
	};
heightDetect();  
$(window).resize(function() {
	heightDetect();
}); //Адаптация конец

$("input, select, textarea").jqBootstrapValidation();//Форма ввода

 $(".top_text h1").animated("fadeInDown", "fadeOutUp");//Аниммация заголовка в рамке
 $(".top_text p").animated("fadeInUp", "fadeOutDown");//Анимация заголовка
 $(".section_header").animated("fadeInUp", "fadeOutDown");//Анимация секций

$(".top_menu ul a").mPageScroll2id();//скрол для пунктов меню

$(".toggle_menu").click(function() {//Меню
		$(".sandwich").toggleClass("active");
		});

	$(".top_menu ul a").click(function() {
		$(".top_menu").fadeOut(600);
		$(".sandwich").toggleClass("active");
		$(".top_text").css("opacity", "1");
	}).append("<span>");

	$(".toggle_menu").click(function() {
		if ($(".top_menu").is(":visible")) {
			$(".top_text").css("opacity", "1");
			$(".top_menu").fadeOut(600);
			$(".top_menu li a").removeClass("fadeInUp animated");//Анимация меню
} else {
			$(".top_text").css("opacity", ".1");
			$(".top_menu").fadeIn(600);
			$(".top_menu li a").addClass("fadeInUp animated");//Анимация меню
 };
  
});

}); 

$(window).load(function() {    //Прелоадер
	$(".loader_inner").fadeOut(); 
	$(".loader").delay(400).fadeOut("slow"); 
	$(".top_text h1").animated("fadeInDown", "fadeOutUp");
	$(".top_text p").animated("fadeInUp", "fadeOutDown");
});