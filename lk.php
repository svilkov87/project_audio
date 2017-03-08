<?php
include("include/connection.php");
session_start();
## проверка ошибок
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

if (!empty($_GET)) {

    $id = intval($_GET['id']);
     //если зло вручную поставит другой id пользвателя, то он не попадет на чужую страницу с ответами
    if ($id === 0 OR $id != $_SESSION['user_id']) {
        die('Ошибка сжатия чёрной дыры');
        header("Location: auth.php");
        exit;
    }

    //Выбираем юзера, чей аккаунт
    $st = $pdo->prepare('SELECT * FROM `users` WHERE id=:id');
    $st->bindParam(':id', $id, PDO::PARAM_INT);
    $st->execute();
    $profile_data = $st->fetchAll();
}
else{
    header("Location: auth.php");
}

if (!isset($_SESSION['email'])) {
    header("Location: auth.php");
//        header("Location: http://".$_SERVER['HTTP_HOST']."/auth.php");
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
    <title>Личный кабинет</title>
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
                <span><?php echo $_SESSION['email']; ?></span>
            </div>
        </div>
        <div class="lk_content_body">
            <div class="col-md-12">
                <!--<div class="lk_content_head">-->
                <!--&lt;!&ndash;<h4 class="content_title">Заказы</h4>&ndash;&gt;-->
                <!--<p class="page-title-alt">У вас нет ни одного заказа</p>-->
                <!--&lt;!&ndash;</div>&ndash;&gt;-->
                <div class="col-md-8">
                    <!--<div class="row">-->
                    <div class="block_test">
                        <h4>Озвучка аптеки</h4>
                        <div class="order_data_slide">
                            <div class="col-md-3 col-sm-6">
                                <div class="order_number">
                                    <p class="p_numb">номер заказа</p>
                                    <p class="data_numb">sv32423562436</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="order_number">
                                    <p class="p_numb">дата заказа</p>
                                    <p class="data_numb">08-03-2017</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="order_number">
                                    <p class="p_numb">стоимость</p>
                                    <p class="data_numb">1000р</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="order_number">
                                    <p class="p_numb">статус</p>
                                    <p class="data_numb">завершен</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="order_discount">
                        <p class="p_discount">Скидка</p>
                        <p class="data_discount">0%</p>
                    </div>
                </div>
                <div class="col-md-8">
                    <!--<div class="row">-->
                    <div class="block_test">
                        <h4>Озвучка аптеки</h4>
                        <div class="order_data_slide">
                            <div class="col-md-3 col-sm-6">
                                <div class="order_number">
                                    <p class="p_numb">номер заказа</p>
                                    <p class="data_numb">sv32423562436</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="order_number">
                                    <p class="p_numb">дата заказа</p>
                                    <p class="data_numb">08-03-2017</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="order_number">
                                    <p class="p_numb">стоимость</p>
                                    <p class="data_numb">1000р</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="order_number">
                                    <p class="p_numb">статус</p>
                                    <p class="data_numb">завершен</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="order_discount">
                        <p class="p_discount">Скидка</p>
                        <p class="data_discount">0%</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<?php include("include/footer.php"); ?>
<?php include("include/scripts.php"); ?>
</body>
</html>
