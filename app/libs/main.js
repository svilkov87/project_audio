$(document).ready(function(){

  //выпадающий блок "о нас"
  $("#about_us").click(function(){
    $(".about-ul").slideToggle(100);
  });

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
    $.scrollTo($("#main_about"), 800, {
      offset: 0
    });
  });

    $(".serv").click(function() {
    $.scrollTo($(".one-footer"), 800, {
      offset: 0
    });
  });
    $(".serv2").click(function() {
    $.scrollTo($(".two-footer"), 800, {
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
var linkPrice = document.getElementById('linkPrice'),
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