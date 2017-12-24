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

    // выпадающее меню
    $("#justify_nav").on("click", function(){
        $(".menu").fadeToggle(500);
    });

    // показать меню
    $(".fa-bars").on("click", function(){
        $(".ul_side").fadeToggle(500);
    });

    // показать прайсы
    $(".price_block").on("click", function(){
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
    $('.btn_modal').on("click", function(e){
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

    //показать бриф
    // var breifPosition = $('.breif_position').offset().top; // позиция элемента брифа

    // console.log(breifPosition);
    // $(".breif").on("click", function() {
    //     $('html, body').animate({ scrollTop: breifPosition }, 500);
    //     $(".wrapp_breif").slideToggle(100);
    // });

    // форма отправки брифа

    $('.btn_breif').on("click", function(e){
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
            $('html, body').animate({ scrollTop: breifPosition }, 500);
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
    $("#fa-angle-down").on("click", function() {
        $.scrollTo($(".main_about"), 800, {
          offset: 0
        });
    });

    // var mainAboutPosition = $('.main_abou').offset().top; // позиция элемента брифа
    //     console.log(mainAboutPosition);
    // $("#fa-angle-down").on("click", function() {
    //     $('html, body').animate({ scrollTop: mainAboutPosition }, 500);
    // });

    $(".go").click(function() {
        // alert('test');
        $.scrollTo($("#products"), 800, {
          offset: 0
        });
    });

    $('#fa-angle-down-one').on("click", function() {
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

