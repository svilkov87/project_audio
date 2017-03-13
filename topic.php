<?php
include("include/connection.php");
session_start();
// ## проверка ошибок
// error_reporting(E_ALL | E_STRICT);
// ini_set('display_errors', TRUE);
// ini_set('display_startup_errors', TRUE);

if (!empty($_GET)) {
    $id = intval($_GET['id']);
     //если зло вручную поставит другой id пользвателя, то он не попадет на чужую страницу с ответами
    if ($id === 0 OR $id != $_SESSION['user_id']) {
        // die('Ошибка сжатия чёрной дыры');
        header("Location: auth.php");
        exit;
    }

    //отправка новой заявки
    if (isset($_POST['add_topic'])) {
        $title = $_POST['theme_question'];
        $text = $_POST['details_question'];
        $time = time();
        $date = date('d.m.Y H:i', $time);
        $insert = $pdo->prepare("
            INSERT INTO `topics`
            SET 
            title=:title,
            text=:text,
            date=:date,
            user_id=:user_id
            ");
        $insert->bindParam(':title', $title);
        $insert->bindParam(':date', $date);
        $insert->bindParam(':text', $text);
        $insert->bindParam(':user_id', $_SESSION['user_id']);
        $insert->execute();
        header("Location: questions.php?id=".$_SESSION['user_id']);
        exit;
    }
}
else{
    header("Location: auth.php");
}


// echo "<pre>";
// var_dump($_SESSION);
// echo "</pre>";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Новая заявка</title>
    <?php include("include/head.php"); ?>
</head>
<body>
<section class="lk_section">
    <?php include("include/lk_sidebar.php"); ?>
    <div class="lk_wrapp_content">
    <?php include("include/lk_nav.php"); ?>
        <div class="lk_content_body">
            <div class="col-md-12">
                <div class="col-md-10">
                    <div class="block_order">
                        <div class="order_header">
                            <h4>Новый вопрос</h4>
                        </div>
                        <div class="order_body">
                            <form method="post" class="form_order">
                                <div class="head_order_body">
                                    <h4>Тема вопроса</h4>
                                    <p>Пожалуйста, опишите Ваш вопрос</p><br>
                                    <input type="text" name="theme_question" placeholder="Вводите тему...">
                                </div>
                                <div class="content_order_body">
                                    <h4>Детали вопроса</h4>
                                    <p>Пожалуйста, опишите в подробностях свой вопрос, чтобы получить более точный ответ.</p><br>
                                    <textarea type="textarea" name="details_question" placeholder="Детали заявки..."></textarea>
                                </div>
                                <button class="btn_default" type="submit" name="add_topic">Отправить заявку</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include("include/scripts.php"); ?>
</body>
</html>
