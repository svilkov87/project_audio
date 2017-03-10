<?php
include ("../include/connection.php");
session_start();
## проверка ошибок
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

//Выбираем юзера, чей аккаунт
$st = $pdo->query('SELECT * FROM `topics` ORDER BY id DESC');
$allTopics = $st->fetchAll();

if (!isset($_SESSION['email']) && $_SESSION['user_id'] != 7) {
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
            <?php foreach ($allTopics as $item) :?>
                <div class="col-md-8">
                    <div class="block_test">
                        <a href="full_question.php?id=<?php echo $item['id'];?>&user=<?php echo $item['user_id'];?>">
                            <h4><?php echo $item['title'];?></h4>
                        </a>
                        <div class="question_desc">
                            <p class="data_numb"><?php echo $item['text'];?></p>
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
