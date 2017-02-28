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
</head>
<body>
<?php include("include/button_top.php"); ?>
<?php include("include/modal.php"); ?>
<?php include("include/nav.php"); ?>
<section class="one">
    <div class="one-inner">
        <div class="one-header">
            <p>hello</p>
        </div>
        <div class="block-content">
            <div class="wrapp_content">
                <ul class="cb-slideshow">
                    <li><span>Image 01</span><div><h3>Преимущество 1</h3></div></li>
                    <li><span>Image 02</span><div><h3>Преимущество 2</h3></div></li>
                    <li><span>Image 03</span><div><h3>Преимущество 3</h3></div></li>
                    <li><span>Image 04</span><div><h3>Преимущество 4</h3></div></li>
                    <li><span>Image 05</span><div><h3>Преимущество 5</h3></div></li>
                    <li><span>Image 06</span><div><h3>Преимущество 6</h3></div></li>
                </ul>
<!--                <h1>озвучка, сценарий</h1>-->
<!--                <div class="block_serv_desc">-->
<!--                    <span>Голос без фоновой музыки,</span>-->
<!--                    <span>текст ролика</span>-->
<!--                </div>-->
<!--                <i class="fa fa-angle-down wow fadeIn serv" data-wow-delay="1s" aria-hidden="true" ></i>-->
            </div>
            <div class="one-footer">
                <div class="container">
                    <div class="serv-footer-head">
                        <h3>Наши услуги</h3>
                    </div>
                    <div class="wrapp_serv">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="col-md-6 col-sm-6">
                                <div class="row">
                                    <div class="wrapp_blocks">
                                        <div class="serv_heades">
                                            <img class="img_previev" src="dist/img/Privacy%20Filled-100.png" alt="">
                                        </div>
                                        <div class="wrapp_blocks_hidd">
                                            <span>Озвучка</span>
                                            <div class="hidd_descr">
                                                <p>Голос без фоновой музыки</p>
                                                <p class="hidd_price">от 300р</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="row">
                                    <div class="wrapp_blocks">
                                        <div class="serv_heades">
                                            <img class="img_previev" src="dist/img/Privacy%20Filled-100.png" alt="">
                                        </div>
                                        <div class="wrapp_blocks_hidd">
                                            <span>Сценарий</span>
                                            <div class="hidd_descr">
                                                <p>Придумываем текст ролика</p>
                                                <p class="hidd_price">от 300р</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="row">
                                    <div class="wrapp_blocks">
                                        <div class="serv_heades">
                                            <img class="img_previev" src="dist/img/Privacy%20Filled-100.png" alt="">
                                        </div>
                                        <div class="wrapp_blocks_hidd">
                                            <span>Простой ролик</span>
                                            <div class="hidd_descr">
                                                <p>(голос на фоновой музыке)</p>
                                                <p class="hidd_price">от 790 р</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="row">
                                    <div class="wrapp_blocks">
                                        <div class="serv_heades">
                                            <img class="img_previev" src="dist/img/Privacy%20Filled-100.png" alt="">
                                        </div>
                                        <div class="wrapp_blocks_hidd">
                                            <span>Ролик с эффектами</span>
                                            <div class="hidd_descr">
                                                <p>(голос на музыке + шумы и дополнительные звуки)</p>
                                                <p class="hidd_price">от 890 р</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="row">
                                    <div class="wrapp_blocks">
                                        <div class="serv_heades">
                                            <img class="img_previev" src="img/Privacy%20Filled-100.png" alt="">
                                        </div>
                                        <div class="wrapp_blocks_hidd">
                                            <span>Озвучка на английском языке</span>
                                            <div class="hidd_descr">
                                                <p class="hidd_price">от 500 р</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="row">
                                    <div class="wrapp_blocks">
                                        <div class="serv_heades">
                                            <img class="img_previev" src="dist/img/Privacy%20Filled-100.png" alt="">
                                        </div>
                                        <div class="wrapp_blocks_hidd">
                                            <span>Вокал</span>
                                            <div class="hidd_descr">
                                                <p>(записываем уникальный вокал)</p>
                                                <p class="hidd_price">от 500 р</p>
                                            </div>
                                        </div>
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
<section class="two">
    <div class="two-inner">
        <div class="two-header">
            <p>hello</p>
        </div>
        <div class="block-content">
            <div class="wrapp_content">
                <h1>Ролик</h1>
                <div class="block_serv_desc">
                    <span>Простой,</span>
                    <span>с эффектами,</span>
                    <span>игровой</span>
                </div>
                <i class="fa fa-angle-down wow fadeIn serv2" data-wow-delay="1s" aria-hidden="true" ></i>
            </div>
        </div>
        <div class="two-footer">
            <div class="wrapp-footer">
<!--                 <div class="col-md-6">
                    <div class="left-block-footer">
                        <div class="left-block-head">
                            <h1>примеры роликов</h1>
                        </div>
                        <div class="img-wrapp-footer">
                            <img src="img/voice-recorder.png" alt="" class="img-left-footer">
                        </div>
                    </div>
                    <div class="wrapp-price">
                        <p class="footer-price">Сценарий: от 300р</p>
                        <p class="footer-price">Озвучка: от 300р</p>
                    </div>
                </div> -->
                <div class="col-md-8 col-md-offset-2">
                    <div class="right-block-footer">
                        <div class="wrapp_audio">
                            <span>Заказать аудиоролик для любого бизнеса</span>
                            <audio controls class="audio">
                                <source src="audio/Дима.mp3" type="audio/mp3">
                            </audio>
                        </div>
                        <div class="wrapp_audio">
                            <span>Заказать аудиоролик для любого бизнеса</span>
                            <audio controls class="audio">
                                <source src="audio/Дима.mp3" type="audio/mp3">
                            </audio>
                        </div>
                        <div class="wrapp_audio">
                            <span>Заказать аудиоролик для любого бизнеса</span>
                            <audio controls class="audio">
                                <source src="audio/Дима.mp3" type="audio/mp3">
                            </audio>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include("include/footer.php"); ?>
<?php include("include/scripts.php"); ?>
<script>
    $(function() {
        $('audio').on('play', function() {
            $('audio').addClass('stoped').removeClass('playing');
            $(this).removeClass('stoped').addClass('playing');
            $('.stoped').each(function() {
                $(this).trigger('pause');
                $(this)[0].currentTime = 0;
            })
        })
    })
</script>
</body>
</html>
