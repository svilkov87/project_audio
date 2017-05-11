
// loader start
// loader end

$(document).ready(function(){

    $(window).on("load",function(){ "use strict";
        $(".loader").fadeOut(1700);
    });

    // $(window).scroll(function() {
    //     // var s = $(".wrapp_advantages").scrollLeft();
    //     var offset = $(".bx_par").position();
    //     console.log(offset);
    //     // if(offset >)
    // });

    // параллакс
  // $(window).scroll(function(){
  //   var st = $(this).scrollTop();
  //
  //   // console.log(st);
  //
  //     $(".wrapp_items").css({
  //         "transform": "translate(0%, " + st /20 + "%"
  //     });
  //
  // });

    //выпадающий блок "о нас"
  $(".about_us").click(function(e){
    e.preventDefault();
    $(".side_fixed").addClass('fixed_go_left');
    $(".filter_bg").css({
      'filter'         : 'blur(3px)',
      '-webkit-filter' : 'blur(3px)',
      '-moz-filter'    : 'blur(3px)',
      '-o-filter'      : 'blur(3px)',
      '-ms-filter'     : 'blur(3px)'
    });
    $(".x").click(function(){
        $(".side_fixed").removeClass('fixed_go_left');
        $(".filter_bg").css({
          "filter": "none"
        });
    });
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

//11.05 аудио-плеер
    var mainWrapp = $(".wrapp_item"),
        chidPlay = mainWrapp.find(".span_play"),
        chidPause = mainWrapp.find(".span_pause"),
        tBlockPos = mainWrapp.find(".top_block");

  // показать/скрыть конпку воспроизведения
  mainWrapp.mouseenter(function(){
    $(this).find(".span_play").addClass('play_prew');
  });
  mainWrapp.mouseleave(function(){
    $(this).find(".span_play").removeClass('play_prew');
  });

    // воспроизведение роликов
    chidPlay.click(function () {
        $(this).css({
            "display": "none"
        });
        setTimeout(function(){
            $('.get_order').css({
                "opacity": "1"
            });
        }, 1000);

        $(this).css({
            "display": "none"
        });
        $(this).next(".span_pause").css({
            "display": "block"
        });

        var sound = $('audio', $(this));
        sound[0].play();


        var topBlock = sound.parents(".top_block").css({
            "bottom": "0"
        });


        // var cord= topBlock.position();
        // console.log(cord);
        // if (cord.top > 300){
        //     $('.get_order').css({
        //         "opacity": "1"
        //     });
        // }

        chidPause.click(function () {
            $(this).parents(".top_block").css({
                "bottom": "-260px"
            });
            $('.get_order').css({
                "opacity": "0"
            });
            $(this).css({
                "display": "none"
            });
            $(this).prev(".span_play").css({
                "display": "block"
            });
            sound[0].pause();
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
                data: $('.myform').serialize(),
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

    //Плавный скролл до блока .div по клику на .scroll
  //Документация: https://github.com/flesler/jquery.scrollTo
  $("#fa-angle-down").click(function() {
    $.scrollTo($(".main_about"), 800, {
      offset: 0
    });
  });

    //modal
    var modal = document.getElementById('myModlal'),
        btnModal = document.getElementById('linkModal'),
        close = document.getElementsByClassName('close')[0];

    btnModal.onclick = function () {
        modal.style.display = "block";
    }
    close.onclick = function () {
        modal.style.display = "none";
    }
    //закрытие модал, если юзер кликает на bg
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

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