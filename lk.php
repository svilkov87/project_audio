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

if (!isset($_SESSION['email'])) {
    header("Location: auth.php");
//        header("Location: http://".$_SERVER['HTTP_HOST']."/auth.php");
    exit;
}
 echo "<pre>";
 var_dump($_SESSION);
 echo "</pre>";

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
    <div class="lk_sidebar">
        <div class="li_head_nav">
            <span class="hello">
               Личный кабинет
           </span>
            <i class="fa fa-align-justify" id="close_sb" aria-hidden="true"></i>
        </div>
        <div class="lk_body_sidebar">
            <ul class="lk_ul_main">
                <li class="lk_sb_list">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    <a href="">мои заказы</a>
                    <span>2</span>
                </li>
                <li class="lk_sb_list">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <a href="">бонусы</a>
                    <span>1</span>
                </li>
                <li class="lk_sb_list">
                    <i class="fa fa-question-circle" aria-hidden="true"></i>
                    <a href="">вопросы</a></li>
                <li class="lk_sb_list">
                    <i class="fa fa-cog" aria-hidden="true"></i>
                    <a href="">настройки</a></li>
                <li class="lk_sb_list">
                    <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                    <a href="">правила размещения</a></li>
                <li class="lk_sb_list"><a href="#" id="showNav">навигация
                        <i class="fa fa-caret-down" aria-hidden="true" title="Toggle dropdown menu"></i>
                    </a>
                    <ul class="lk_ul_child">
                        <li class="nav_sb_list"><a href="">главная</a></li>
                        <li class="nav_sb_list"><a href="">услуги</a></li>
                        <li class="nav_sb_list"><a href="">договор оферта</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- /sbar -->
    <div class="lk_wrapp_content">
        <div class="lk_nav">
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
