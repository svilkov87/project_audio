<?php
include("include/connection.php");
//
//## проверка ошибок
//error_reporting(E_ALL | E_STRICT);
//ini_set('display_errors', TRUE);
//ini_set('display_startup_errors', TRUE);
//
//
////
////    $name = $_POST['name'];
////    $contacts = $_POST['s_name'];
////    $theme = $_POST['theme'];
//    $insert = $pdo->prepare("
//        INSERT INTO `orders`
//        SET
//        user_data=:user_data,
//        contacts=:contacts,
//        theme=:theme
//        ");
//    $insert->bindParam(':user_data', $name);
//    $insert->bindParam(':contacts', $contacts);
//    $insert->bindParam(':theme', $theme);
//    $insert->execute();


//$st = $pdo->query('SELECT * FROM `orders`');
//$tags = $st->fetchAll();
//
//echo "<pre>";
//var_dump($tags);
//echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Услуги</title>
    <?php include("include/head.php"); ?>
    <script src="libs/jquery/jquery-1.11.1.min.js"></script>
</head>
<body>
<?php include("include/button_top.php"); ?>
<?php include("include/loader.php"); ?>
<?php include("include/modal.php"); ?>
<?php include("include/side_fixed.php"); ?>
<div class="filter_bg">
<?php include("include/nav.php"); ?>
    <section class="one">
        <div class="container">
            <div class="row">
                <div class="wrapp_title_one">
                    <h1 class="header_one">Выбери свой ролик</h1>
                    <p class="p_one">Зесь вы найдете то, что вам по-душе</p>
                    <i class="fa fa-angle-down wow fadeIn" data-wow-delay="1s" id="fa-angle-down-one"
                       aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </section>
    <section class="two">
        <div class="two_inner">
            <div class="two_header">
                <p>Примеры наших работ</p>
            </div>
            <div class="block_content">
                <div class="container">
                    <div class="col-md-4 col-sm-4">
                        <div class="wrapp_item">
                            <div class="item_image">
                                <img src="http://placehold.it/280/280">
                            </div>
                            <div class="top_block">
                                <div class="top_head">
                                    <h4 class="h4_head">Озвучка роликов</h4>
                                    <p class="top_p">Голос без фоновой музыки</p>
                                    <div class="span_play">
                                        <i class="fa fa-play" aria-hidden="true"></i>
                                        <audio class="sound" src="https://html5book.ru/examples/media/track.mp3" preload="auto" controls></audio>
                                    </div>
                                    <div class="span_pause">
                                        <i class="fa fa-pause" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="top_body">
                                    <div class="t_body_head">
                                        <p class="p_desc">Стоимость</p>
                                        <p class="p_price">от 300р</p>
                                    </div>
                                    <div class="t_body_bott">
                                        <div class="cssload-container">
                                            <div class="cssload-tube-tunnel"></div>
                                        </div>
                                    </div>
                                    <div class="get_order">
                                        <p class="p_get_ord">Сформировать заказ</p>
                                    </div>
                                </div>
                                <div class="get_order">
                                    <p class="p_get_ord">Сформировать заказ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="wrapp_item">
                            <div class="item_image">
                                <img src="http://placehold.it/280/280">
                            </div>
                            <div class="top_block">
                                <div class="top_head">
                                    <h4 class="h4_head">Сценарии</h4>
                                    <p class="top_p">Текст для ролика</p>
                                    <div class="span_play">
                                        <i class="fa fa-play" aria-hidden="true"></i>
                                        <audio class="sound" src="https://html5book.ru/examples/media/track.mp3" preload="auto" controls></audio>
                                    </div>
                                    <div class="span_pause">
                                        <i class="fa fa-pause" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <!--</div>-->
                                <div class="top_body">
                                    <div class="t_body_head">
                                        <p class="p_desc">Стоимость</p>
                                        <p class="p_price">от 300р</p>
                                    </div>
                                    <div class="t_body_bott">
                                        <div class="cssload-container">
                                            <div class="cssload-tube-tunnel"></div>
                                        </div>
                                    </div>
                                    <div class="get_order">
                                        <p class="p_get_ord">Сформировать заказ</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="wrapp_item">
                            <div class="item_image">
                                <img src="http://placehold.it/280/280">
                            </div>
                            <div class="top_block">
                                <div class="top_head">
                                    <h4 class="h4_head">Простой ролик</h4>
                                    <p class="top_p">Голос на фоне музыки</p>
                                    <div class="span_play">
                                        <i class="fa fa-play" aria-hidden="true"></i>
                                        <audio class="sound" src="https://html5book.ru/examples/media/track.mp3" preload="auto" controls></audio>
                                    </div>
                                    <div class="span_pause">
                                        <i class="fa fa-pause" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <!--</div>-->
                                <div class="top_body">
                                    <div class="t_body_head">
                                        <p class="p_desc">Стоимость</p>
                                        <p class="p_price">от 300р</p>
                                    </div>
                                    <div class="t_body_bott">
                                        <div class="cssload-container">
                                            <div class="cssload-tube-tunnel"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include("include/footer.php"); ?>
</div>
<?php include("include/scripts.php"); ?>
<script>
//    $(function() {
//        $('audio').on('play', function() {
//            $('audio').addClass('stoped').removeClass('playing');
//            $(this).removeClass('stoped').addClass('playing');
//            $('.stoped').each(function() {
//                $(this).trigger('pause');
//                $(this)[0].currentTime = 0;
//            })
//        })
//    })
</script>
</body>
</html>
