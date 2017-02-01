$(document).ready(function(){

  //выпадающий блок "о нас"
  $("#about_us").click(function(){
    $(".about-ul").slideToggle(100);
  });

  //мышка на/не выпавшем блоке о нас 
  // $("#about_us").mouseover(function(){
  //   $(".about-ul").fadeIn(500);
  // });

  // $(document).mouseup(function (e){ // событие клика по веб-документу
  //   var block_about = $('.about-ul');// тут указываем ID элемента
  //   if(!block_about.is(e.target) 
  //   && block_about.has(e.target).length === 0){// если клик был не по нашему блоку
  //       block_about.fadeOut();
  //   }
  // });



// выпадающее меню
  $("#justify_nav").click(function(){
    $(".menu").fadeToggle(500);
  });


// выпадающий поиск

  $("#stuff_menu_search").click(function(e){
    e.preventDefault();
    $(".stuff_menu_search_field").slideToggle(100);
        // $(".stuff_menu_search_field").css("display" , "block");
  });


  // показать кнопку наверх
  $(window).scroll(function() {
    if ($(this).scrollTop() > 350){
      $('#top').fadeIn(100);
    }
    else{
      $('#top').fadeOut(100);
    }
  });

  //Кнопка "Наверх"
  //Документация:
  //http://api.jquery.com/scrolltop/
  //http://api.jquery.com/animate/
  $("#top").click(function () {
    $("body, html").animate({
      scrollTop: 0
    }, 800);
    return false;
  });

});