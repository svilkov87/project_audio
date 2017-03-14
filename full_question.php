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
        // die('Ошибка сжатия чёрной дыры');
        header("Location: auth.php");
        exit;
    }

    //Выбираем юзера, чей аккаунт
    $st = $pdo->prepare('SELECT * FROM `users` WHERE id=:id');
    $st->bindParam(':id', $id, PDO::PARAM_INT);
    $st->execute();
    $profile_data = $st->fetchAll();

    $dialog_id = $id * 7;
    $notRead = 1;
    $toUser = 7;
    //отправка новго сообщения
    if (isset($_POST['do_full_answer'])) {
        $answer = $_POST['answer_dialog'];
        $time = time();
        $date = date('d.m.Y H:i', $time);
        $insert = $pdo->prepare("
        INSERT INTO 
        `dialogs` 
        SET 
        text=:text, 
        date_time=:date_time, 
        user_mail=:user_mail, 
        user_id=:user_id, 
        to_user=:to_user, 
        isread=:isread, 
        dialog_id=:dialog_id,
        topic_id=:topic_id
        ");
        $insert->bindParam(':text', $answer);
        $insert->bindParam(':user_mail', $_SESSION['email']);
        $insert->bindParam(':user_id', $_SESSION['user_id']);
        $insert->bindParam(':to_user', $toUser);
        $insert->bindParam(':isread', $notRead);
        $insert->bindParam(':date_time', $date);
        $insert->bindParam(':dialog_id', $dialog_id);
        $insert->bindParam(':topic_id', $id);
        $insert->execute();

        //        уведомление на почту
        require_once("phpmailer/phpmailer/mailfunc.php");
        $m_to = 'svilkov87@mail.ru'; // кому - ящик (из формы)
        $m_nameto = ""; // Кому
        $m_namefrom = "VSEMROLIKI.RU"; // Поле От в письме
        $subj = "Новый комментарий";
        $tmsg = 'У Вас есть непрочитанные сообщения. Проверьте Админ-панель.';
        $m_from = 'svilkov00@yandex.ru'; // от кого
        $m_reply = 'svilkov00@yandex.ru'; // адрес для обратного ответа
        $mail1 = phpmailer($subj, $tmsg, $m_to, $m_nameto, $m_namefrom, $m_from, $m_reply, $m_hostmail, $m_port, $m_password, $m_secure);

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
                            <div class="mess_wrap">
                                <p class="user_name_q"><?php echo $item['user_mail']; ?></p>
                                <span class="date_time"><?php echo $item['date_time']; ?></span>
                                <br>
                                <p class="answers_full_text"><?php echo $item['text']; ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="full_forms">
                        <form method="post" class="form_message">
                            <textarea type="textarea" id="field_upload" name="answer_dialog" placeholder="Напишите сообщение..."></textarea>
                            <button class="btn_default" id = "uspload_mess" type="submit" name="do_full_answer">Ответить</button>
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
