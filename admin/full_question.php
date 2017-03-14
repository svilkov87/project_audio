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

    //выбираем юзера, которому отправляем уведомление на почту
    $st = $pdo->prepare('SELECT * FROM `users` WHERE id=:id');
    $st->bindParam(':id', $userGet, PDO::PARAM_INT);
    $st->execute();
    $userForEmail = $st->fetchAll();

    
    $dialog_id = $id * 7;
    $notRead = 1;
    //отправка новго сообщения
    if (isset($_POST['do_full_answer'])) {
        $time = time();
        $date = date('d.m.Y H:i', $time);
        $answer = $_POST['answer_dialog'];
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
        $insert->bindParam(':to_user', $userGet);
        $insert->bindParam(':isread', $notRead);
        $insert->bindParam(':date_time', $date);
        $insert->bindParam(':dialog_id', $dialog_id);
        $insert->bindParam(':topic_id', $id);
        $insert->execute();

        //уведомление на почту клиенту $userForEmail
        require_once("../phpmailer/phpmailer/mailfunc.php");
        $m_to = $userForEmail[0]['email']; // кому - ящик (из формы)
        $m_nameto = ""; // Кому
        $m_namefrom = "VSEMROLIKI.RU"; // Поле От в письме
        $subj = "Новый комментарий";
        $tmsg = 'У Вас есть непрочитанные сообщения. Проверьте Ваш аккаунт.';
        $m_from = 'svilkov00@yandex.ru'; // от кого
        $m_reply = 'svilkov00@yandex.ru'; // адрес для обратного ответа
        $mail1 = phpmailer($subj, $tmsg, $m_to, $m_nameto, $m_namefrom, $m_from, $m_reply, $m_hostmail, $m_port, $m_password, $m_secure);

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
// var_dump($userForEmail);
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
        <?php include ("../include/admin_lk_nav.php");?>
        <div class="lk_content_body">
            <div class="col-md-8">
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
