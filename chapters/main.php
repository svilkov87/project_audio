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
</head>
<body>
<?php include("include/button_top.php"); ?>
<?php include("include/loader.php"); ?>
<?php include("include/modal.php"); ?>
<?php include("include/modal_price.php"); ?>
<!-- /modal -->
<div class="filter_bg">
    <section class="wrapp_head">
        <?php include("include/side_fixed.php"); ?>
        <div class="header">
            <div class="container">
                <div class="row">
                    <h1 class="header__title wow fadeIn" data-wow-delay="0.4s">Озвучка, запись и монтаж аудио роликов</h1>
                    <div class="header__description wow fadeIn" data-wow-delay="0.6s">Аудио ролики от 790 рублей</div>
                    <div class="header__button-block">
                        <div class="header__button_about wow fadeIn" data-wow-delay="0.8s">О нас</div>
                        <div class="header__button-price price_block wow fadeIn" data-wow-delay="1s">Посмотреть прайс</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="main_about">
        <div class="container">
            <div class="main_about_header">
                <p class="what_we_do wow fadeInDown" data-wow-delay=".5s">Что мы делаем</p>
            </div>
            <div class="row">
                <div class="we_do" id="why_we">
                    <div class="col-md-4">
                        <div class="wrapp">
                            <h3>Озвучка</h3>
                            <p>В нашей базе есть мужские, женские и детские голоса. В зависимости от вашей задачи, мы сами подберем диктора, или можем выслать вам демо на выбор. </p>
                            <a href="/servises#two">
                                <div class="see_more">Узнать больше</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="wrapp">
                            <h3>СценариЙ</h3>
                            <p>Мы напишем для вас информационный, игровой, стихотворный или вокальный сценарии. Сценарий - основа ролика. Именно от него зависит конечный продукт.</p>
                            <a href="/servises#scenario">
                                <div class="see_more">Узнать больше</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="wrapp">
                            <h3>Монтаж роликов</h3>
                            <p>Монтаж - это то, что превращает озвучку и музыку в единое целое. Если добавить к этому разнообразные шумы и звуки, ролик станет еще эффектнее.</p>
                            <a href="/servises">
                                <div class="see_more">Узнать больше</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="main_us">
        <div class="container">
            <div class="row">
                <div class="main_about_us">
                    <p class="what_we_do wow fadeInDown" data-wow-delay=".5s">О нас</p>
                </div>
                <div class="content_us">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="item_us"><span>Мы </span>не предлагаем вам статусные дорогие ролики, которые стоят баснословных денег. Мы сделаем для
                            вас простые ролики по очень доступным ценам.</div>
                        <div class="hr"></div>
                        <div class="item_us">Наши сценаристы пишут недорогие и креативные тексты для вашей рекламы или другого аудио.</div>
                        <div class="hr"></div>
                        <div class="item_us">У нас есть команда дикторов (мужские, женские и детские голоса), которые постараются озвучить
                            ваш ролик в кротчайшие сроки, и сделают это профессионально.</div>
                        <div class="hr"></div>
                        <div class="item_us">                        Наши монтажеры подберут к вашему ролику подходящее музыкальное сопровождение и звуковые эффекты.
                        </div>
                        <div class="hr"></div>
                    </div>
<!--                     <div class="col-md-6">
                        <div class="bg_studio">
                            <img src="app/img/idance-disco-500-watt-channel-recording-studio-equipment-blue-and-silver-3546-441751-1-zoom.jpg" alt="">
                        </div>
                    </div> -->
                </div>
            </div>
        </div>

    </section>
    <section class="main_why_we">
        <div class="container">
            <div class="row">
                <div class="main_about_we">
                    <p class="what_we_do wow fadeInDown" data-wow-delay=".5s">Почему мы?</p>
                </div>
                <div class="content">
                    <div class="col-md-12">
                        <div class="wh_we_slide">
                            <div class="cont_item wow fadeInLeft" data-wow-delay=".5s">
                                <div class="img_block"><img src="app/img/Money%20Box-96.png" alt="alt"></div>
                                <div class="desc">
                                    <h4>Бюджетно</h4>
                                    <p>Наши цены ниже, чем по рынку</p>
                                </div>
                            </div>
                            <div class="cont_item wow fadeInLeft" data-wow-delay=".8s">
                                <div class="img_block"><img src="app/img/icons8-Speed-96.png" alt="alt"></div>
                                <div class="desc">
                                    <h4>Быстро</h4>
                                    <p>Возможность создания ролика за один час</p>
                                </div>
                            </div>
                            <div class="cont_item wow fadeInLeft" data-wow-delay="1.1s">
                                <div class="img_block"><img src="app/img/icons8-Engineering-96.png" alt="alt"></div>
                                <div class="desc">
                                    <h4>Достойно</h4>
                                    <p>Вы получаете профессиональный продукт</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--<div class="col-md-6">-->
                    <!--<div class="few_reasons">Несколько причин, чтобы выбрать нас:</div>-->
                    <!--<div class="cont_item wow fadeInLeft" data-wow-delay=".5s">-->
                    <!--<div class="img_block"><img src="img/Money%20Box-96.png" alt="alt"></div>-->
                    <!--<div class="desc">-->
                    <!--<h4>Бюджетно</h4>-->
                    <!--<p>Наши цены ниже, чем по рынку</p>-->
                    <!--</div>-->
                    <!--</div>-->
                    <!--<div class="cont_item wow fadeInLeft" data-wow-delay=".8s">-->
                    <!--<div class="img_block"><img src="img/icons8-Speed-96.png" alt="alt"></div>-->
                    <!--<div class="desc">-->
                    <!--<h4>Быстро</h4>-->
                    <!--<p>Возможность создания ролика за один час</p>-->
                    <!--</div>-->
                    <!--</div>-->
                    <!--<div class="cont_item wow fadeInLeft" data-wow-delay="1.1s">-->
                    <!--<div class="img_block"><img src="img/icons8-Engineering-96.png" alt="alt"></div>-->
                    <!--<div class="desc">-->
                    <!--<h4>Достойно</h4>-->
                    <!--<p>Вы получаете профессиональный продукт</p>-->
                    <!--</div>-->
                    <!--</div>-->
                    <!--</div>-->
                </div>
            </div>
        </div>

    </section>
    <div class="main_wach_serv">
        <a href="servises" class="follow_serv">Посмотреть примеры</a>
    </div>
     <?php include("include/footer.php"); ?>
</div>
<?php include("include/scripts.php"); ?>
    <script src="libs/jquery.bxslider/jquery.bxslider.min.js"></script>
    <link href="libs/jquery.bxslider/jquery.bxslider.css" rel="stylesheet">
    <script>
        $(document).ready(function(){
            $('.wh_we_slide').bxSlider({
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
</body>
</html>
