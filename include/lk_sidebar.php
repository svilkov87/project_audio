<?php

## проверка ошибок
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
//Выбираем кол-во заявок, чей аккаунт
//$st = $pdo->prepare('SELECT * FROM `orders` WHERE id=:id');
//$st->bindParam(':id', $id, PDO::PARAM_INT);
//$st->execute();
//$orders = $st->fetchAll();

//считаем все заявки клиента
$stmt = $pdo->prepare('SELECT * FROM `orders_lk` WHERE user_id=:user_id');
$stmt->bindParam(':user_id', $_SESSION['user_id'], PDO::PARAM_INT);
$stmt->execute();
$orders = $stmt->fetchAll();
$numberOfOrders = count($orders);

//echo "<pre>";
//var_dump($numberOfOrders);
//echo "</pre>";

?>

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
                <span><?php echo $numberOfOrders;?></span>
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