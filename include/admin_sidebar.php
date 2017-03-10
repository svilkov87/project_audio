<?php
include ("../include/connection.php");

## проверка ошибок
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

//Считаем общее количество заказов от зареганыч клиентов
$countOrdersLk = $pdo->query('SELECT COUNT(*) FROM `orders_lk`')->fetchColumn();

//Считаем общее количество зареганых клиентов
$countRegCustomer = $pdo->query('SELECT COUNT(*) FROM `users` WHERE id != 7')->fetchColumn();

//Считаем общее количество вопросов(тем)
$countTopic = $pdo->query('SELECT COUNT(*) FROM `topics` WHERE id != 7')->fetchColumn();

// echo "<pre>";
// var_dump($countTopic);
// echo "</pre>";
?>

    <div class="lk_sidebar">
        <div class="li_head_nav">
            <span class="hello">Админ-панель</span>
           <i class="fa fa-align-justify" id="close_sb" aria-hidden="true"></i>
       </div>
        <div class="lk_body_sidebar">
            <ul class="lk_ul_main">
                <li class="lk_sb_list">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    <a href="admin.php?id=7">заказы</a>
                    <span><?php echo $countOrdersLk; ?></span>
                </li>
                <li class="lk_sb_list">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <a href="">клиенты</a>
                    <span><?php echo $countRegCustomer;?></span>
                </li>
                <li class="lk_sb_list">
                    <i class="fa fa-question-circle" aria-hidden="true"></i>
                    <a href="all_questions.php">вопросы</a>
                    <span><?php echo $countTopic; ?></span>
                    </li>
                <li class="lk_sb_list">
                    <i class="fa fa-signal" aria-hidden="true"></i>
                    <a href="">статистика</a></li>
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