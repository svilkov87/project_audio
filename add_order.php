<?php
include("include/connection.php");
session_start();
## проверка ошибок
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

//отправка новой заявки
if (isset($_POST['do_order'])) {
    $theme_order = $_POST['theme_order'];
    $details_order = $_POST['details_order'];
    $insert = $pdo->prepare("INSERT INTO `orders_lk` SET title=:title, text=:text, user_id=:user_id");
    $insert->bindParam(':title', $theme_order);
    $insert->bindParam(':text', $details_order);
    $insert->bindParam(':user_id', $_SESSION['user_id']);
    $insert->execute();
}
echo "<pre>";
var_dump($_SESSION);
echo "</pre>";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Новая заявка</title>
    <?php include("include/head.php"); ?>
</head>
<body>
<section class="lk_section">
    <?php include("include/lk_sidebar.php"); ?>
    <div class="lk_wrapp_content">
        <div class="lk_nav">
            <div class="left_nav_block">
                <a href="add_order.php" class="add_order">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                    <span>Новый заказ</span>
                </a>
                <a href="#" class="add_order">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    <span>Задать вопрос</span>
                </a>
            </div>
            <div class="right_nav_block">
                <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                <span>Info@vsemroliki.ru</span>
            </div>
        </div>
        <div class="lk_content_body">
            <div class="col-md-12">
                <div class="col-md-10">
                    <div class="block_order">
                        <div class="order_header">
                            <h4>Новая заявка</h4>
                        </div>
                        <div class="order_body">
                            <form method="post" class="form_order">
                                <div class="head_order_body">
                                    <h4>Тема заказа</h4>
                                    <p>На какую тему будет озвучка? (Например: "Озвучка ролика для рекламы детского
                                        питания")</p><br>
                                    <input type="text" name="theme_order" placeholder="Вводите тему...">
                                </div>
                                <div class="content_order_body">
                                    <h4>Детали заказа</h4>
                                    <p>Пожалуйста, опишите в подробностях свой вопрос, чтобы получить более точный ответ.</p><br>
                                    <textarea type="textarea" name="details_order" placeholder="Детали заявки..."></textarea>
                                </div>
                                <button class="btn_default" type="submit" name="do_order">Отправить заявку</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include("include/scripts.php"); ?>
</body>
</html>
