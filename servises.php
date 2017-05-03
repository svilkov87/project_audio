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
<?php include("include/side_fixed.php"); ?>
<div class="filter_bg">
<?php include("include/nav.php"); ?>
<section class="one">
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
                        <span>Более 100 реализованных проектов</span>
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
</div>
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
