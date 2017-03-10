<?php
include ("../include/connection.php");
session_start();
## проверка ошибок
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

if (!empty($_GET)) {

    $id = intval($_GET['id']);
    if ($id === 0 OR $id != $_SESSION['user_id']) {
        die('Ошибка сжатия чёрной дыры');
        header("Location: index.php");
        exit;
    }
}
else{
    header("Location: index.php");
}
    //Выбираем заказы клиента для вставки в контент
    $st = $pdo->prepare('SELECT * FROM `orders_lk` WHERE user_id=:user_id ORDER BY id DESC');
    $st->bindParam(':user_id', $id, PDO::PARAM_INT);
    $st->execute();
    $ordersDataClient = $st->fetchAll();

    //выбор всех заказов от зареганых клиентов
    $st = $pdo->query('SELECT * FROM `orders_lk` ORDER BY id DESC  ');
    $allOrders = $st->fetchAll();

if (!isset($_SESSION['email'])) {
    header("Location: index.php");
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
    <title>админ-панель</title>
    <?php include ("../include/admin_head.php");?>
</head>
<body>
<i class="fa fa-chevron-up" aria-hidden="true" id="top" style="display: inline;"></i>
<section class="lk_section">
<?php include ("../include/admin_sidebar.php");?>
    <!-- /sbar -->
    <div class="lk_wrapp_content">
        <div class="lk_nav">
            <div class="left_nav_block">
                <a href="add_order.html" class="add_order">
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
            <!--<div class="lk_content_head">-->
                <!--&lt;!&ndash;<h4 class="content_title">Заказы</h4>&ndash;&gt;-->
                <!--<p class="page-title-alt">У вас нет ни одного заказа</p>-->
            <!--&lt;!&ndash;</div>&ndash;&gt;-->
            <?php foreach ($allOrders as $item) :?>
                <div class="col-md-12">
                    <!--<div class="row">-->
                    <div class="block_test">
                        <h4><?php echo $item['title']?></h4>
                        <!-- <span>svilkov872@mail.ru</span> -->
                        <div class="order_data_slide">
                            <div class="col-md-2 col-sm-6">
                                <div class="order_number">
                                    <p class="p_numb">номер заказа</p>
                                    <p class="data_numb"><?php echo $item['number_order']?></p>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <div class="order_number">
                                <p class="p_numb">клиент</p>
                                    <p class="data_numb">svilkov872@mail.ru</p>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <div class="order_number">
                                    <p class="p_numb">дата заказа</p>
                                    <p class="data_numb"><?php echo $item['date']?></p>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <div class="order_number">
                                    <p class="p_numb">стоимость</p>
                                    <p class="data_numb"><?php echo $item['price']?></p>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <div class="order_number">
                                    <p class="p_numb">статус</p>
                                    <p class="data_numb"><?php echo $item['status']?></p>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <div class="order_number">
                                <p class="p_numb">скидка</p>
                                    <p class="data_numb">0%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             <?php endforeach;?>
            </div>
        </div>
    </div>
</section>
<?php include ("../include/admin_scripts.php");?>
</body>
</html>
