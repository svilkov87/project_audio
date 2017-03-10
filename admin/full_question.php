<?php
include ("../include/connection.php");
session_start();
## проверка ошибок
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

if (!empty($_GET)) {

    $id = intval($_GET['id']);
    $userGet = intval($_GET['user']);

    //Выбираем заказы клиента для вставки в контент
    $st = $pdo->prepare('SELECT * FROM `topics` WHERE id=:id');
    $st->bindParam(':id', $id, PDO::PARAM_INT);
    $st->execute();
    $fullQuestion = $st->fetchAll();

    //Выбираем заказы клиента для "остальных вопросов"
    $otherQuestion = $pdo->query('SELECT * FROM `topics` WHERE id != ".$id."')->fetchAll();

    //если зло вручную поставит другой id пользвателя, то он не попадет на чужую страницу с ответами
    if (!isset($_SESSION['email']) && $_SESSION['user_id'] != 7) {
        header("Location: index.php");
        exit;
    }

    $dialog_id = $id * 7;
    //отправка новго сообщения
    if (isset($_POST['do_full_answer'])) {
//        $dialog_id = $userGet + 7;
        $answer = $_POST['answer_dialog'];
        $insert = $pdo->prepare("INSERT INTO `dialogs` SET text=:text, dialog_id=:dialog_id");
        $insert->bindParam(':text', $answer);
        $insert->bindParam(':dialog_id', $dialog_id);
        $insert->execute();
        header("Location: full_question.php?id=".$id."&user=".$userGet);
        exit;
    }

    $result = $dialog_id / 7;
    //Выбираем сообщения
    $st = $pdo->prepare('SELECT * FROM `dialogs` WHERE dialog_id=:gialog_id ORDER BY id DESC');
    $st->bindParam(':gialog_id', $dialog_id, PDO::PARAM_INT);
    $st->execute();
    $GoMessage = $st->fetchAll();


// echo "<pre>";
// var_dump($GoMessage);
// echo "</pre>";
}
else{
    header("Location: auth.php");
}
// echo "<pre>";
// var_dump($otherQuestion);
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
            <div class="col-md-8">
                <!--<div class="lk_content_head">-->
                <!--&lt;!&ndash;<h4 class="content_title">Заказы</h4>&ndash;&gt;-->
                <!--<p class="page-title-alt">У вас нет ни одного заказа</p>-->
                <!--&lt;!&ndash;</div>&ndash;&gt;-->
                <div class="full_q_wrapp">
                    <?php foreach ($fullQuestion as $item): ?>
                        <div class="full_q_header">
                            <h4><?php echo $item['title']; ?></h4>
                        </div>
                        <div class="full_q_text">
                            <p><?php echo $item['text']; ?></p>
                        </div>
                    <?php endforeach; ?>
                    <div class="full_q_field">
                        <?php foreach ($GoMessage as $item): ?>
                        <p><?php echo $item['text']; ?></p>
                        <?php endforeach; ?>
                    </div>
                    <div class="full_forms">
                        <form method="post" class="form_order">
                            <textarea type="textarea" name="answer_dialog" placeholder="Напишите сообщение..."></textarea>
                            <button class="btn_default" type="submit" name="do_full_answer">Ответить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include ("../include/admin_scripts.php");?>
</body>
</html>
