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
</head>
<body>
<?php include("include/modal.php"); ?>
<?php include("include/modal_price.php"); ?>
<div class="bg_section">
    <?php include("include/nav.php"); ?>
    <div class="wrapp_header wow fadeIn" data-wow-delay="1.5s">
        <div class="front wow fadeIn">
            <div class="voicing wow fadeInDown">
                <h1>Недорогая&nbsp;Озвучка</h1>
            </div>
            <div class="youre wow fadeInRight">
                <h1>Для тех</h1>
            </div>
            <div class="youre_dream wow fadeInLeft">
                <h1>кто не хочет усложнять</h1>
            </div>
            <i class="fa fa-angle-down wow fadeIn" data-wow-delay="1s" id="fa-angle-down" aria-hidden="true"></i>
        </div>
    </div>
    <section id="main_about">
        <div class="container">
            <div class="main_about_header">
                <h1>Озвучка, запись и монтаж аудиороликов</h1>
            </div>
            <div class="wrapp_items">
                <div class="col-md-4 col-sm-4 wow fadeIn" data-wow-delay=".3s">
                    <div class="main_about_items">
                        <div class="img_block">
                            <img src="dist/img/circular-clock.png">
                        </div>
                        <div class="main_block_desc">
                            <span>Быстро</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 wow fadeIn" data-wow-delay=".4s">
                    <div class="main_about_items">
                        <div class="img_block">
                            <img src="dist/img/tuxedo.png">
                        </div>
                        <div class="main_block_desc">
                            <span>Креативно</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 wow fadeIn" data-wow-delay=".5s">
                    <div class="main_about_items">
                        <div class="img_block">
                            <img src="dist/img/money-bag.png">
                        </div>
                        <div class="main_block_desc">
                            <span>Бюджетно</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main_wach_serv">
                <a href="servises.php" class="follow_serv">Посмотреть услуги</a>
            </div>
        </div>
    </section>
    <?php include("include/footer.php"); ?>
</div>
<?php include("include/scripts.php"); ?>
</body>
</html>
