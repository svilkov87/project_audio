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
                    <li><span>Image 01</span>
                        <div><h3>озвучка от 300р</h3></div>
                    </li>
                    <li><span>Image 02</span>
                        <div><h3>ролики от 790р</h3></div>
                    </li>
                    <li><span>Image 03</span>
                        <div><h3>автоответчики 500р</h3></div>
                    </li>
                    <li><span>Image 04</span>
                        <div><h3>озвучка от 300р</h3></div>
                    </li>
                    <li><span>Image 05</span>
                        <div><h3>ролики от 790р</h3></div>
                    </li>
                    <li><span>Image 06</span>
                        <div><h3>автоответчики 500р</h3></div>
                    </li>
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
                        <div class="col-md-10 col-md-offset-1">
                            <div class="col-md-4 col-sm-4">
                                <div class="row">
                                    <div class="wrapp_blocks">
                                        <div class="serv_heades">
                                            <img class="img_previev" src="dist/img/Microphone Filled-100.png" alt="">
                                        </div>
                                        <div class="wrapp_blocks_hidd">
                                            <span>Озвучка</span>
                                            <div class="hidd_descr">
                                                <p class="p_desc">Голос без фоновой музыки</p>
                                                <p class="hidd_price">от 300р</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="row">
                                    <div class="wrapp_blocks">
                                        <div class="serv_heades">
                                            <img class="img_previev" src="dist/img/Blog_Filled-50.png" alt="">
                                        </div>
                                        <div class="wrapp_blocks_hidd">
                                            <span>Сценарий</span>
                                            <div class="hidd_descr">
                                                <p class="p_desc">Придумываем текст ролика</p>
                                                <p class="hidd_price">от 300р</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="row">
                                    <div class="wrapp_blocks">
                                        <div class="serv_heades">
                                            <img class="img_previev" src="dist/img/Survey Filled-100.png" alt="">
                                        </div>
                                        <div class="wrapp_blocks_hidd">
                                            <span>Простой ролик</span>
                                            <div class="hidd_descr">
                                                <p class="p_desc">(голос на фоновой музыке)</p>
                                                <p class="hidd_price">от 790 р</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="row">
                                    <div class="wrapp_blocks">
                                        <div class="serv_heades">
                                            <img class="img_previev" src="dist/img/Saturation Filled-100.png" alt="">
                                        </div>
                                        <div class="wrapp_blocks_hidd">
                                            <span>Ролик с эффектами</span>
                                            <div class="hidd_descr">
                                                <p class="p_desc">(голос на музыке + шумы и дополнительные звуки)</p>
                                                <p class="hidd_price">от 890 р</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="row">
                                    <div class="wrapp_blocks">
                                        <div class="serv_heades">
                                            <img class="img_previev" src="dist/img/Great%20Britain%20Filled-100.png" alt="">
                                        </div>
                                        <div class="wrapp_blocks_hidd">
                                            <span>Озвучка на английском языке</span>
                                            <div class="hidd_descr">
                                                <p class="p_desc">Do y speak in English?</p>
                                                <p class="hidd_price">от 500 р</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="row">
                                    <div class="wrapp_blocks">
                                        <div class="serv_heades">
                                            <img class="img_previev" src="dist/img/Voice Recognition Scan Filled-100.png" alt="">
                                        </div>
                                        <div class="wrapp_blocks_hidd">
                                            <span>Вокал</span>
                                            <div class="hidd_descr">
                                                <p class="p_desc">(записываем уникальный вокал)</p>
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
            <div class="container">
                <div class="wrapp_content">
                    <h1>примеры работ</h1>
                    <div class="block_serv_desc">
                        <span>Более 1000 реализованных проектов</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="two-footer">
            <div class="wrapp-footer">
                <div class="container">
                    <div class="col-md-4 col-sm-6">
                        <div class="wrapp_audio">
                            <span>Тестовый пример ролика</span>
                            <audio controls class="audio">
                                <source src="audio/Дима.mp3" type="audio/mp3">
                            </audio>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="wrapp_audio">
                            <span>Тестовый пример ролика</span>
                            <audio controls class="audio">
                                <source src="audio/Дима.mp3" type="audio/mp3">
                            </audio>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="wrapp_audio">
                            <span>Тестовый пример ролика</span>
                            <audio controls class="audio">
                                <source src="audio/Дима.mp3" type="audio/mp3">
                            </audio>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="wrapp_audio">
                            <span>Тестовый пример ролика</span>
                            <audio controls class="audio">
                                <source src="audio/Дима.mp3" type="audio/mp3">
                            </audio>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="wrapp_audio">
                            <span>Тестовый пример ролика</span>
                            <audio controls class="audio">
                                <source src="audio/Дима.mp3" type="audio/mp3">
                            </audio>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="wrapp_audio">
                            <span>Тестовый пример ролика</span>
                            <audio controls class="audio">
                                <source src="audio/Дима.mp3" type="audio/mp3">
                            </audio>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--</div>-->
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
