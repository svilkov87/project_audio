<?php
include("include/connection.php");
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

    //если зло вручную поставит другой id пользвателя, то он не попадет на чужую страницу с ответами
    if ($id === 0 || $userGet != $_SESSION['user_id']) {
        die('Ошибка сжатия чёрной дыры');
        header("Location: auth.php");
        exit;
    }

    //Выбираем юзера, чей аккаунт
    $st = $pdo->prepare('SELECT * FROM `users` WHERE id=:id');
    $st->bindParam(':id', $id, PDO::PARAM_INT);
    $st->execute();
    $profile_data = $st->fetchAll();

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

    $result = $dialog_id - 7;
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


if (!isset($_SESSION['email'])) {
    header("Location: auth.php");
    exit;
}
// echo "<pre>";
// var_dump($fullQuestion);
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
        <?php include("include/lk_nav.php"); ?>
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
            <div class="col-md-4">
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
                </div>
            </div>
        </div>
    </div>
</section>
<?php include("include/scripts.php"); ?>
</body>
</html>
