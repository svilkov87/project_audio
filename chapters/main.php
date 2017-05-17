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
<?php include("include/loader.php"); ?>
<?php include("include/modal.php"); ?>
<?php include("include/modal_price.php"); ?>
<?php include("include/side_fixed.php"); ?>
<!-- /modal -->
<div class="filter_bg">
    <?php include("include/nav.php"); ?>
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
        <div class="container">
            <div class="main_about_header">
                <p class="corot wow fadeInDown" data-wow-delay=".4s">коротко о том</p>
                <p class="what_we_do wow fadeInDown" data-wow-delay=".5s">что мы делаем</p>
                <h1 class="wow fadeInDown" data-wow-delay=".6s">Озвучка, запись и монтаж аудиороликов</h1>
            </div>
            <div class="row">
                <div class="we_do">
                    <div class="col-md-6 col-sm-6">
                        <div class="we_image wow fadeInLeft" data-wow-delay="0.6s">
                            <img src="dist/img/headphone-1868612_1920.jpg" alt="alt">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="we_items wow fadeInRight" data-wow-delay="0.6s">
                            <ul class="we_ul">
                                <li class="we_li">
                                    <img class="img_previev" src="dist/img/Microphone Filled-100.png" alt="">
                                    <div class="p_head">Озвучка роликов</div>
                                    <div class="p_desc">Голос без фоновой музыки</div>
                                    <div class="we_bott">
                                        <span class="span_price">от 300р</span>
                                        <a href="#" class="go_examples">примеры</a>
                                    </div>
                                </li>
                                <li class="we_li">
                                    <img class="img_previev" src="dist/img/Blog_Filled-50.png" alt="">
                                    <div class="p_head">Сценарии</div>
                                    <div class="p_desc">Придумываем текст ролика</div>
                                    <div class="we_bott">
                                        <span class="span_price">от 300р</span>
                                        <a href="#" class="go_examples">примеры</a>
                                    </div>
                                </li>
                                <li class="we_li">
                                    <img class="img_previev" src="dist/img/Survey Filled-100.png" alt="alt">
                                    <div class="p_head">Простой ролик</div>
                                    <div class="p_desc">Голос на фоне музыки</div>
                                    <div class="we_bott">
                                        <span class="span_price">от 790р</span>
                                        <a href="#" class="go_examples">примеры</a>
                                    </div>
                                </li>
                                <li class="we_li">
                                    <img class="img_previev" src="dist/img/Saturation Filled-100.png" alt="">
                                    <div class="p_head">Ролик с эффектами</div>
                                    <div class="p_desc">голос на музыке + шумы и дополнительные звуки</div>
                                    <div class="we_bott">
                                        <span class="span_price">от 890р</span>
                                        <a href="#" class="go_examples">примеры</a>
                                    </div>
                                </li>
                                <li class="we_li">
                                    <img class="img_previev" src="dist/img/Great%20Britain%20Filled-100.png" alt="">
                                    <div class="p_head">Озвучка на английском языке</div>
                                    <div class="p_desc">Do y speak in English?</div>
                                    <div class="we_bott">
                                        <span class="span_price">от 500р</span>
                                        <a href="#" class="go_examples">примеры</a>
                                    </div>
                                </li>
                                <li class="we_li">
                                    <img class="img_previev" src="dist/img/Voice Recognition Scan Filled-100.png" alt="">
                                    <div class="p_head">Вокал</div>
                                    <div class="p_desc">записываем уникальный вокал</div>
                                    <div class="we_bott">
                                        <span class="span_price">от 500р</span>
                                        <a href="#" class="go_examples">примеры</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="wrapp_advantages">
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
    </section>
    <div class="main_wach_serv">
        <a href="servises" class="follow_serv">Посмотреть примеры</a>
    </div>
</div>
<?php include("include/footer.php"); ?>
<?php include("include/scripts.php"); ?>
</body>
</html>
