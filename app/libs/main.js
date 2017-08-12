
// loader start
// loader end

$(document).ready(function(){

    $(window).on("load",function(){ "use strict";
        $(".loader").fadeOut(1700);
    });

    // параллакс
    $(window).scroll(function () {
        var st = $(this).scrollTop();

        // console.log(st);
        $(".one, .wrapp_head").css({
          "filter": "grayscale(" + st / 300 + ")"
          // "bottom" : "translate3d(0px, " + st/ 100  + "%, .01px)"
          // "-webkit-transform" : "translate3d(0px, " + st/ 100  + "%, .01px)"
        });
    });


    //скролл side главная страница
    $(window).scroll(function(){
        var $sections = $('.we_do');
        $sections.each(function(i,el){
        var top  = $(el).offset().top-100;
        var bottom = top +$(el).height();
        var scroll = $(window).scrollTop();
        var id = $(el).attr('id');
      if( scroll > top && scroll < bottom){
            $('a.active').removeClass('active');
      $('a[href="#'+id+'"]').addClass('active');

        }
    })
 });

var sScroll = $(".side_scroll").hide();
$(".side_scroll").on("click","a", function (event) {
        // исключаем стандартную реакцию браузера
        event.preventDefault();
 
        // получем идентификатор блока из атрибута href
        var id  = $(this).attr('href'),
 
        // находим высоту, на которой расположен блок
            top = $(id).offset().top;
         
        // анимируем переход к блоку, время: 800 мс
        $('body,html').animate({scrollTop: top}, 800);
    });

//test
$(window).scroll(function(){
  var wHeight = $(window).scrollTop(),
    elHeight = $('#about_company').offset().top;
    haftEl = elHeight/1.5;

    if (wHeight >= haftEl) {
      sScroll.fadeIn(1000);
    }
    else{
      sScroll.fadeOut();
    }
  console.log(elHeight);
});

  


    //gradient animations
    var colors = new Array(
        [62,35,255],
        [60,255,60],
        [255,35,98],
        [45,175,230],
        [255,0,255],
        [255,128,0]);

    var step = 0;
//color table indices for:
// current color left
// next color left
// current color right

// next color right
    var colorIndices = [0,1,2,3];

//transition speed
    var gradientSpeed = 0.002;

    function updateGradient()
    {

        if ( $===undefined ) return;

        var c0_0 = colors[colorIndices[0]];
        var c0_1 = colors[colorIndices[1]];
        var c1_0 = colors[colorIndices[2]];
        var c1_1 = colors[colorIndices[3]];

        var istep = 1 - step;
        var r1 = Math.round(istep * c0_0[0] + step * c0_1[0]);
        var g1 = Math.round(istep * c0_0[1] + step * c0_1[1]);
        var b1 = Math.round(istep * c0_0[2] + step * c0_1[2]);
        var color1 = "rgb("+r1+","+g1+","+b1+")";

        var r2 = Math.round(istep * c1_0[0] + step * c1_1[0]);
        var g2 = Math.round(istep * c1_0[1] + step * c1_1[1]);
        var b2 = Math.round(istep * c1_0[2] + step * c1_1[2]);
        var color2 = "rgb("+r2+","+g2+","+b2+")";

        $('.wrapp_advantages').css({
            background: "-webkit-gradient(linear, left top, right top, from("+color1+"), to("+color2+"))"}).css({
            background: "-moz-linear-gradient(left, "+color1+" 0%, "+color2+" 100%)"});

        step += gradientSpeed;
        if ( step >= 1 )
        {
            step %= 1;
            colorIndices[0] = colorIndices[1];
            colorIndices[2] = colorIndices[3];

            //pick two new target color indices
            //do not pick the same as the current one
            colorIndices[1] = ( colorIndices[1] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
            colorIndices[3] = ( colorIndices[3] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;

        }
    }

    setInterval(updateGradient,10);


    //выпадающий доп меню в лк (навигация)
  $("#showNav").click(function(){
    $(".lk_ul_child").slideToggle(100);
  });

  //убрать садбар
    $("#close_sb").click(function(){
    $(".lk_sidebar").toggleClass('close');
    $(".lk_wrapp_content").toggleClass('wr_left');
  });

// выпадающее меню
  $("#justify_nav").click(function(){
    $(".menu").fadeToggle(500);
  });

    // показать меню
  $(".fa-bars").click(function(){
    $(".ul_side").fadeToggle(500);
  });

    // показать прйси
  $(".price_block").click(function(){
    $(".modalPrice").addClass('active');
      $(".closePrice").click(function(){
          $(".modalPrice").removeClass('active');
      });
  });

//аудио-плеер
    var mainWrapp = $(".wrapp_item"),
        chidPlay = mainWrapp.find(".span_play"),
        chidPause = mainWrapp.find(".span_pause"),
        tBlockPos = mainWrapp.find(".t_body_bott");

  // показать/скрыть конпку воспроизведения
  mainWrapp.mouseenter(function(){
    $(this).find(".span_play").hide();
      $(this).find(".span_pause").show();
      var sound = $('audio', $(this));
      sound[0].play();
      var getOrder = $(this).find('.get_order').css({
          "opacity": "1"
      });
  });
    mainWrapp.mouseleave(function () {
        $(this).find(".span_pause").hide();
        $(this).find(".span_play").show();
        var sound = $('audio', $(this));
        sound[0].pause();
        var hideOrder = $(this).find('.get_order').css({
            "opacity": "0"
        });
    });

    // воспроизведение роликов
    chidPlay.click(function () {

        chidPause.click(function () {

          });

        //запрещаем одновременное воспроизведение
        $('audio').on('play', function() {
            $('audio').addClass('stoped').removeClass('playing');
            $(this).removeClass('stoped').addClass('playing');
            $('.stoped').each(function() {
                $(this).trigger('pause');
                $(this)[0].currentTime = 0;
            })
        });
    });

    // форма отправки заказа
    $('.btn_modal').click(function(e){
        e.preventDefault();
        var name = $('#name').val(),
            s_name = $('#s_name').val(),
            field = $('#modal_field').val();

        if( name == "" || s_name == "" || field == ""){
            $('.err_block').css("display" , "block");
        }
        else {
            $('.err_block').css("display" , "none");
            $.ajax({
                url: "../../ajax/upload.php",
                type: "POST",
                data: $('#order_form').serialize(),
                dataType: "html"
            }).done(function(){
                // $('#myModlal').css("display" , "none");
                $('.modal_forms').css("display" , "none");
                $('.modal_confirm').css("display" , "block");
                // alert('data');
            });
        }
        $('#name, #s_name, #modal_field').focus(function(){
            $('.err_block').css("display" , "none");
        });
    });


    // форма отправки брифа
    $('.btn_breif').click(function(e){
        e.preventDefault();
        var comp = $('#company').val(),
            gServ = $('#good_service').val(),
            customers = $('#customers').val(),
            main_message = $('#main_message').val(),
            adv = $('#advantages').val(),
            contacts = $('#contacts').val(),
            tScreen = $('#type_screen').val(),
            wishes = $('#wishes').val(),
            opt = $('#optionally').val(),
            chrono = $('#chrono').val(),
            dFinish = $('#date_finish').val(),
            lpr = $('#contacts_lpr').val();

        if( comp == "" || gServ == "" || customers == ""|| main_message == "" || adv == "" || contacts == "" || tScreen == "" || wishes == ""  || opt == ""|| chrono == "" || dFinish == "" || lpr == "" ){
            $('.breif_err_block').css("display" , "block");
            $.scrollTo($(".wrapp_breif"), 400, {
                offset: 0
            });
        }
        else {
            $('.breif_err_block').css("display" , "none");
            $.ajax({
                url: "../../ajax/breif.php",
                type: "POST",
                data: $('#breif_forms').serialize(),
                dataType: "html"
            }).done(function(){
                // $('#myModlal').css("display" , "none");
                $('.breif_modal_forms').css("display" , "none");
                $('.breif_modal_confirm').css("display" , "block");
                // alert('data');
            });
        }
        $('#name, #s_name, #modal_field').focus(function(){
            $('.breif_err_block').css("display" , "none");
        });
    });

    //Плавный скролл до блока .div по клику на .scroll
  //Документация: https://github.com/flesler/jquery.scrollTo
  $("#fa-angle-down").click(function() {
    $.scrollTo($(".main_about"), 800, {
      offset: 0
    });
  });

    //показать бриф
    $(".breif").click(function() {
        $(".wrapp_breif").slideToggle(100);
    $.scrollTo($(".wrapp_breif"), 400, {
      offset: 0
    });
  });

    $("#fa-angle-down-one").click(function() {
    $.scrollTo($(".two"), 800, {
      offset: 0
    });
  });

    


    //связаться с нами
    $('.linkModal').click(function() {
        $('#myModlal').addClass('active_connect');
        $('.modal_content').addClass('go_there');
        $('.close').click(function() {
            $('#myModlal').removeClass('active_connect');
            $('.modal_content').removeClass('go_there');
        });
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

    //фиксированный нав
    $(window).scroll(function() {
        if ($(this).scrollTop() > 150){
            $('.nav').addClass("fixed");
        }
        else{
            $('.nav').removeClass("fixed");
        }
    });

});


//modalPrice
var linkPrice = document.getElementsByClassName('price_block')[0],
    myPrice = document.getElementById('myPrice'),
    closePrice = document.getElementsByClassName('closePrice')[0];

linkPrice.onclick = function () {
    myPrice.style.display = "block";
}
closePrice.onclick = function () {
    myPrice.style.display = "none";
}
//закрытие модал, если юзер кликает на bg
window.onclick = function (event) {
    if (event.target == myPrice) {
        myPrice.style.display = "none";
    }
}

