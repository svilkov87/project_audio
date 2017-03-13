<?php
include("include/connection.php");
session_start();
## проверка ошибок
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

//отправка новой заявки
if (isset($_POST['do_order'])) {
    $time = time();
    $date = date('d.m.Y', $time);
    $fastTwo = substr($_SESSION['email'], 0, 2);
    $numberOrder = $fastTwo.time();
    $price = "уточняется";
    $status = "принят";
    $theme_order = $_POST['theme_order'];
    $details_order = $_POST['details_order'];
    $insert = $pdo->prepare("INSERT INTO `orders_lk` SET title=:title, text=:text, date=:date, user_id=:user_id, number_order=:number_order, price=:price, status=:status");
    $insert->bindParam(':title', $theme_order);
    $insert->bindParam(':text', $details_order);
    $insert->bindParam(':date', $date);
    $insert->bindParam(':number_order', $numberOrder);
    $insert->bindParam(':price', $price);
    $insert->bindParam(':status', $status);
    $insert->bindParam(':user_id', $_SESSION['user_id']);
    $insert->execute();
    header("Location: lk.php?id=".$_SESSION['user_id']);
    exit;
}
// echo "<pre>";
// var_dump($_SESSION);
// echo "</pre>";

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
    <?php include("include/lk_nav.php"); ?>
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
                                    <p>Пожалуйста, опишите в подробностях свой заказ</p><br>
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
