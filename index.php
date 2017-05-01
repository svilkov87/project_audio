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
    <?php include("include/nav.php"); ?>
<section class="wrapp_head">
    <div class="wrapp_header wow fadeIn" data-wow-delay="0.1s">
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
                <i class="fa fa-angle-down wow fadeIn" data-wow-delay="1s" id="fa-angle-down" aria-hidden="true"></i>
            </div>
        </div>
    </div>
</section>
    <section id="main_about">
        <div class="container">
            <div class="main_about_header">
                <h1>Озвучка, запись и монтаж аудиороликов</h1>
            </div>
            <div class="hello_there">
                <div class="col-md-8 col-md-offset-2">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Architecto dicta ea eligendi est impedit iste molestias,
                    mollitia nisi odio perspiciatis placeat porro possimus, quae
                    quaerat ullam vitae voluptatem. Assumenda debitis maxime repellat
                    totam vero. At beatae dolores enim excepturi id officiis reiciendis
                    repudiandae totam unde velit. Beatae dignissimos dolore iste
                    maxime minima molestiae nostrum similique veniam? Ad adipisci
                    amet, asperiores aspernatur blanditiis debitis delectus dignissimos
                    dolores ducimus, eaque esse eum exercitationem harum in ipsam ipsum
                    labore libero magnam minus molestiae natus non nulla odio officiis
                    omnis perspiciatis quo ratione recusandae repudiandae vero! Ab at ex
                    explicabo fuga magnam magni quod ut! Ab aliquid atque distinctio
                    eius necessitatibus numquam officia, qui? Aliquid animi esse maxime
                    quasi rem sapiente! Alias animi autem esse exercitationem in inventore
                    ipsum iste itaque labore libero non obcaecati, odit officia pariatur placeat
                    suscipit, velit voluptatum! Facere itaque possimus recusandae. Atque,
                    dolorum iure. Animi expedita magni reprehenderit sapiente?
                </div>
            </div>
        </div>
        <div class="wrapp_items">
            <div class="container">
                <div class="col-md-3 col-sm-3 wow fadeIn" data-wow-delay=".3s">
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
                            <p>item1</p>
                            <p>item2</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 wow fadeIn" data-wow-delay=".4s">
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
                            <p>item1</p>
                            <p>item2</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 wow fadeIn" data-wow-delay=".5s">
                    <div class="main_about_items">
                        <div class="items_top">
                            <div class="img_block">
                                <img src="dist/img/Money%20Box-96.png">
                            </div>
                            <div class="main_block_desc">
                                <span>Бюджетно</span>
                            </div>
                        </div>
                        <div class="items_bottom">
                            <p>item1</p>
                            <p>item2</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 wow fadeIn" data-wow-delay=".6s">
                    <div class="main_about_items">
                        <div class="items_top">
                            <div class="img_block">
                                <img src="dist/img/Microphone-96%20(1).png">
                            </div>
                            <div class="main_block_desc">
                                <span>Профессионально</span>
                            </div>
                        </div>
                        <div class="items_bottom">
                            <p>item1</p>
                            <p>item2</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="main_wach_serv">
                <a href="servises.php" class="follow_serv">Посмотреть услуги</a>
            </div>
    </section>
    <?php include("include/footer.php"); ?>
<?php include("include/scripts.php"); ?>
</body>
</html>
