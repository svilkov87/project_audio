<?php
include("include/connection.php");
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
                pause: 4200,            // время между сменой слайдов в м-сек
                speed: 500           // длительность перехода слайда в м-сек
            });
        });
</script>
</head>
<body>
<?php include("include/button_top.php"); ?>
<?php include("include/loader.php"); ?>
<?php include("include/modal.php"); ?>
<?php include("include/modal_price.php"); ?>
<?php include("include/side_fixed.php"); ?>
<!-- /modal -->
<div class="filter_bg">
    <section class="wrapp_head">
        <div class="wrapp_header wow fadeIn" data-wow-delay="0.2s">
            <div class="front wow fadeIn">
                <div class="front_inner">
                    <div class="voicing wow fadeInDown" data-wow-delay="0.4s">
                        <p>Недорогая&nbsp;Озвучка</p>
                    </div>
                    <div class="youre wow fadeInRight" data-wow-delay="0.4s">
                        <p>Для тех</p>
                    </div>
                    <div class="youre_dream wow fadeInLeft" data-wow-delay="0.4s">
                        <p>кто не хочет усложнять</p>
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
    <section class="main_about">
        <div class="container-fluid">
            <div class="main_about_header">
                <p class="corot wow fadeInDown" data-wow-delay=".4s">коротко о том</p>
                <p class="what_we_do wow fadeInDown" data-wow-delay=".5s">что мы делаем</p>
                <h1 class="wow fadeInDown" data-wow-delay=".6s">Озвучка, запись и монтаж аудиороликов</h1>
            </div>
            <div class="row">
                <div class="we_do">
                    <div class="col-md-6 col-sm-6">
                        <div class="row">
                            <div class="we_left_1 wow fadeIn" data-wow-delay=".8s">
                                <div class="left_1_inner">
                                    <p class="l_1_header">О нашей компании</p>
                                    <p class="l_1_desc">Описание деятельности компании</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="row">
                            <div class="we_right_1 wow fadeIn" data-wow-delay="1s">
                                <div class="right_1_inner">
                                    <p class="r_1_header">VSEMROLIKI</p>
                                    <p class="r_1_desc">Наша компания предоставляет услуги по...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--<div class="hello_there">-->
            <!--<div class="row">-->
            <!--<div class="col-md-3 col-sm-3 wow fadeIn" data-wow-delay="0.4s">-->
            <!--<div class="main_about_items">-->
            <!--<div class="items_top">-->
            <!--<div class="img_block">-->
            <!--<img src="img/Clock-96.png">-->
            <!--</div>-->
            <!--<div class="main_block_desc">-->
            <!--<span>Быстро</span>-->
            <!--</div>-->
            <!--</div>-->
            <!--<div class="items_bottom">-->
            <!--<p>слоган</p>-->
            <!--</div>-->
            <!--<div class="items_b_bottom">-->
            <!--<p>описание</p>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <!--<div class="col-md-3 col-sm-3 wow fadeIn" data-wow-delay="0.6s">-->
            <!--<div class="main_about_items">-->
            <!--<div class="items_top">-->
            <!--<div class="img_block">-->
            <!--<img src="img/Christmas%20Star-96.png">-->
            <!--</div>-->
            <!--<div class="main_block_desc">-->
            <!--<span>Креативно</span>-->
            <!--</div>-->
            <!--</div>-->
            <!--<div class="items_bottom">-->
            <!--<p>слоган</p>-->
            <!--</div>-->
            <!--<div class="items_b_bottom">-->
            <!--<p>описание</p>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <!--<div class="col-md-3 col-sm-3 wow fadeIn" data-wow-delay="0.8s">-->
            <!--<div class="main_about_items">-->
            <!--<div class="items_top">-->
            <!--<div class="img_block">-->
            <!--<img src="img/Money%20Box-96.png">-->
            <!--</div>-->
            <!--<div class="main_block_desc">-->
            <!--<span>Бюджетно</span>-->
            <!--</div>-->
            <!--</div>-->
            <!--<div class="items_bottom">-->
            <!--<p>слоган</p>-->
            <!--</div>-->
            <!--<div class="items_b_bottom">-->
            <!--<p>описание</p>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <!--<div class="col-md-3 col-sm-3 wow fadeIn" data-wow-delay="1s">-->
            <!--<div class="main_about_items">-->
            <!--<div class="items_top">-->
            <!--<div class="img_block">-->
            <!--<img src="img/Microphone-96%20(1).png">-->
            <!--</div>-->
            <!--<div class="main_block_desc">-->
            <!--<span>Профессионально</span>-->
            <!--</div>-->
            <!--</div>-->
            <!--<div class="items_bottom">-->
            <!--<p>слоган</p>-->
            <!--</div>-->
            <!--<div class="items_b_bottom">-->
            <!--<p>описание</p>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
        </div>
    </section>
    <section class="wrapp_advantages">
        <div class="adv_inner">
            <div class="container">
                <div class="adv_title">
                    <p>Наши преимущества</p>
                </div>
            </div>
            <ul class="bx_head">
                <li class="bx_li">
                    <div class="bx_block">
                        <p class="bx_par">Быстро</p>
                        <div class="buttons-group">
                            <p class="bx_link">- Создание ролика за 3 дня -</p>
                        </div>
                    </div>
                </li>
                <li class="bx_li">
                    <div class="bx_block">
                        <p class="bx_par">Креативно</p>
                        <div class="buttons-group">
                            <p class="bx_link">- Всегда следуем тренду -</p>
                        </div>
                    </div>
                </li>
                <li class="bx_li">
                    <div class="bx_block">
                        <p class="bx_par">Бюджетно</p>
                        <div class="buttons-group">
                            <p class="bx_link">- Наши цены ниже, чем по рынку -</p>
                        </div>
                    </div>
                </li>
                <li class="bx_li">
                    <div class="bx_block">
                        <p class="bx_par">Профессионально</p>
                        <div class="buttons-group">
                            <p class="bx_link">- Вы получаете продук абсолютного качества -</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <div class="main_wach_serv">
        <a href="servises" class="follow_serv">Посмотреть примеры</a>
    </div>
</div>
<?php include("include/footer.php"); ?>
<?php include("include/scripts.php"); ?>
</body>
</html>
