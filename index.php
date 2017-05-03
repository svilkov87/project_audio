<?php
include("include/connection.php");
session_start();
## проверка ошибок
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

//    echo "<pre>";
//    var_dump($_SESSION);
//    echo "</pre>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
    <?php include("include/head.php"); ?>
    <script src="libs/jquery/jquery-1.11.1.min.js"></script>
    <script src="libs/jquery.bxslider/jquery.bxslider.min.js"></script>
    <link href="libs/jquery.bxslider/jquery.bxslider.css" rel="stylesheet">
    <script>
        $(document).ready(function(){
            $('.bx_head').bxSlider({
                mode: 'horizontal',           // тип перехода между слайдами может быть 'horizontal', 'vertical', 'fade'
                captions: true,         // отображение title
                easing: 'easeInOutQuad', // анимация слайда
                controls: false,         // отображение стрелки - вперед, назад
                startSlide: 0,          // Показ начнется с заданного слайда
                infiniteLoop: true,     // показывать первый слайд за последним
                auto: true,             // сделать автоматический переход
                pager: false,
                pause: 3000,            // время между сменой слайдов в м-сек
                speed: 500           // длительность перехода слайда в м-сек
            });
        });
</script>
</head>
<body>
<?php include("include/modal.php"); ?>
<?php include("include/modal_price.php"); ?>
<div class="side_fixed">
    <i class="fa fa-times x" aria-hidden="true"></i>
    <a href="#" class="side_logo">vsemroliki</a>
    <ul class="ul_side">
        <li class="li_side"><a href="">test items</a></li>
        <li class="li_side"><a href="">test items</a></li>
        <li class="li_side"><a href="">test items</a></li>
        <li class="li_side"><a href="">test items</a></li>
    </ul>
</div>
<div class="side_fixed_b"></div>
<!-- /modal -->
<div class="filter_bg">
    <section class="wrapp_head">
        <div class="nav">
            <div class="container">
                <div class="row">
                    <div class="brand">
                        <a href="index.html" class="logo_link">Vsemroliki.ru</a>
                        <a href="reg.html" class="logo_mail">info@vsemroliki.ru</a>
                    </div>
                    <i class="fa fa-align-justify" id="justify_nav" aria-hidden="true"></i>
                    <div class="menu">
                        <ul>
                            <li class="menu-list"><a href="#" id="active">Главная</a></li>
                            <li class="menu-list" id="about_us">
                                <a href="#">О проекте</a>
                                <i class="fa fa-chevron-right" aria-hidden="true"></i>                                <ul class="about-ul">

                                <ul class="about-ul">
                                    <li class="about--li"><a href="test.html">услуги</a></li>
                                    <li class="about--li" id="linkModal">связаться с нами</li>
                                    <li class="about--li"><a href="#">спеециальные предложения</a></li>
                                    <li class="about--li"><a href="lk.html">личный кабинет</a></li>
                                    <li class="about--li"><a href="reg.html">регистрация</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapp_header wow fadeIn" data-wow-delay="0.2s">
            <div class="front wow fadeIn">
                <div class="front_inner">
                    <div class="voicing wow fadeInDown" data-wow-delay="0.4s">
                        <h1>Недорогая&nbsp;Озвучка</h1>
                    </div>
                    <div class="youre wow fadeInRight" data-wow-delay="0.4s">
                        <h1>Для тех</h1>
                    </div>
                    <div class="youre_dream wow fadeInLeft" data-wow-delay="0.4s">
                        <h1>кто не хочет усложнять</h1>
                    </div>
                    <div class="price_block wow fadeInUp" data-wow-delay="1.2s">
                        <div class="price_block_inner">
                            <img src="dist/img/Check File-96.png" alt="alt" class="price_icon">
                        </div>
                        <div class="block_hov">
                            <p class="p1">посмотреть</p>
                            <p class="p2">прайс</p>
                        </div>
                    </div>
                    <i class="fa fa-angle-down wow fadeIn" data-wow-delay="1s" id="fa-angle-down"
                    aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </section>
    <section id="main_about">
        <div class="container">
            <div class="main_about_header">
                <p class="corot">коротко о том</p>
                <p class="what_we_do">что мы делаем</p>
                <h1>Озвучка, запись и монтаж аудиороликов</h1>
            </div>
            <div class="hello_there">
                <!-- <div class="container"> -->
                    <div class="col-md-3 col-sm-3 wow fadeIn" data-wow-delay="0.4s">
                        <div class="main_about_items">
                            <div class="items_top">
                                <div class="img_block">
                                    <img src="dist/img/Clock-96.png">
                                </div>
                                <div class="main_block_desc">
                                    <span>Быстро</span>
                                </div>
                            </div>
                            <div class="items_bottom">
                                <p>слоган</p>
                            </div>
                            <div class="items_b_bottom">
                                <p>описание</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 wow fadeIn" data-wow-delay="0.6s">
                        <div class="main_about_items">
                            <div class="items_top">
                                <div class="img_block">
                                    <img src="dist/img/Christmas%20Star-96.png">
                                </div>
                                <div class="main_block_desc">
                                    <span>Креативно</span>
                                </div>
                            </div>
                            <div class="items_bottom">
                                <p>слоган</p>
                            </div>
                            <div class="items_b_bottom">
                                <p>описание</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 wow fadeIn" data-wow-delay="0.8s">
                        <div class="main_about_items">
                            <div class="items_top">
                                <div class="img_block">
                                    <img src="app/img/Money%20Box-96.png">
                                </div>
                                <div class="main_block_desc">
                                    <span>Бюджетно</span>
                                </div>
                            </div>
                            <div class="items_bottom">
                                <p>слоган</p>
                            </div>
                            <div class="items_b_bottom">
                                <p>описание</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 wow fadeIn" data-wow-delay="1s">
                        <div class="main_about_items">
                            <div class="items_top">
                                <div class="img_block">
                                    <img src="app/img/Microphone-96%20(1).png">
                                </div>
                                <div class="main_block_desc">
                                    <span>Профессионально</span>
                                </div>
                            </div>
                            <div class="items_bottom">
                                <p>слоган</p>
                            </div>
                            <div class="items_b_bottom">
                                <p>описание</p>
                            </div>
                        </div>
                    </div>
                <!-- </div> -->
            </div>
        </div>
    </section>
    <div class="wrapp_items">
        <ul class="bx_head">
            <li class="bx_li">
                <div class="bx_block">
                    <p class="bx_par">Добро пожаловать к нам</p>
                    <div class="buttons-group">
                        <a href="" class="bx_link">перейти1</a>
                        <a href="" class="bx_link_order">перейти</a>
                    </div>
                </div>
            </li>
            <li class="bx_li">
                <div class="bx_block">
                    <p class="bx_par">Добро пожаловать к Варьке</p>
                    <div class="buttons-group">
                        <a href="" class="bx_link">перейти1</a>
                        <a href="" class="bx_link_order">перейти</a>
                    </div>
                </div>
            </li>
            <li class="bx_li">
                <div class="bx_block">
                    <p class="bx_par">Добро пожаловать к Паше</p>
                    <div class="buttons-group">
                        <a href="" class="bx_link">перейти1</a>
                        <a href="" class="bx_link_order">перейти</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="main_wach_serv">
        <a href="test.html" class="follow_serv">Посмотреть услуги</a>
    </div>
</div>
<?php include("include/footer.php"); ?>
<?php include("include/scripts.php"); ?>
</body>
</html>
