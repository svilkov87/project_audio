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
<?php include("include/modal.php"); ?>
<?php include("include/nav.php"); ?>
<div class="wrapp_serv">
    <div class="container">
        <div class="header_serv">
            <h1>Наши услуги</h1>
        </div>
        <div class="body_serv">
            <div class="col-md-8 col-md-offset-2">
                <div class="body_serv_wrapp">
                    <div class="col-md-4 wow fadeIn">
                        <img src="dist/img/microphone.png" alt="">
                    </div>
                    <div class="col-md-8 wow fadeInRight">
                        <h1>Service #1</h1>
                        <p>
                            Horem ipsum dolor sit amet, consectetur adipisicing elit. Architecto,
                            asperiores autem cum dolor ex fuga illum iure, laborum nemo neque nulla numquam odit
                            officiis
                            perspiciatis quae qui quibusdam veritatis voluptatum.
                        </p>
                    </div>
                </div>
                <div class="body_serv_wrapp">
                    <div class="col-md-4 wow fadeIn"  data-wow-delay=".1s">
                        <img src="dist/img/microphone.png" alt="">
                    </div>
                    <div class="col-md-8 wow fadeInRight"  data-wow-delay=".1s">
                        <h1>Service #2</h1>
                        <p>
                            Horem ipsum dolor sit amet, consectetur adipisicing elit. Architecto,
                            asperiores autem cum dolor ex fuga illum iure, laborum nemo neque nulla numquam odit
                            officiis
                            perspiciatis quae qui quibusdam veritatis voluptatum.
                        </p>
                    </div>
                </div>
                <div class="body_serv_wrapp">
                    <div class="col-md-4 wow fadeIn"  data-wow-delay=".2s">
                        <img src="dist/img/microphone.png" alt="">
                    </div>
                    <div class="col-md-8 wow fadeInRight"  data-wow-delay=".2s">
                        <h1>Service #3</h1>
                        <p>
                            Horem ipsum dolor sit amet, consectetur adipisicing elit. Architecto,
                            asperiores autem cum dolor ex fuga illum iure, laborum nemo neque nulla numquam odit
                            officiis
                            perspiciatis quae qui quibusdam veritatis voluptatum.
                        </p>
                    </div>
                </div>
                <div class="body_serv_wrapp">
                    <div class="col-md-4 wow fadeIn">
                        <img src="dist/img/microphone.png" alt="">
                    </div>
                    <div class="col-md-8 wow fadeInRight">
                        <h1>Service #4</h1>
                        <p>
                            Horem ipsum dolor sit amet, consectetur adipisicing elit. Architecto,
                            asperiores autem cum dolor ex fuga illum iure, laborum nemo neque nulla numquam odit
                            officiis
                            perspiciatis quae qui quibusdam veritatis voluptatum.
                        </p>
                    </div>
                </div>
                <div class="body_serv_wrapp">
                    <div class="col-md-4 wow fadeIn">
                        <img src="dist/img/microphone.png" alt="">
                    </div>
                    <div class="col-md-8 wow fadeInRight">
                        <h1>Service #5</h1>
                        <p>
                            Horem ipsum dolor sit amet, consectetur adipisicing elit. Architecto,
                            asperiores autem cum dolor ex fuga illum iure, laborum nemo neque nulla numquam odit
                            officiis
                            perspiciatis quae qui quibusdam veritatis voluptatum.
                        </p>
                    </div>
                </div>
            </div>
            <div class="section_serv">

            </div>
        </div>
    </div>
</div>
<?php include("include/footer.php"); ?>
<?php include("include/scripts.php"); ?>
</body>
</html>
