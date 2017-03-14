<?php
include ("../include/connection.php");

## проверка ошибок
//error_reporting(E_ALL | E_STRICT);
//ini_set('display_errors', TRUE);
//ini_set('display_startup_errors', TRUE);

if (!empty($_GET)) {
    $getData = $_GET['id'];
    $userGetData = $_GET['user'];

    $read = 0;

    if ($_SERVER['REQUEST_URI'] == '/admin/full_question.php?id='.$getData.'&user='.$userGetData.''){
        $update = $pdo->prepare("
        UPDATE 
        `dialogs` 
        SET 
        isread=:isread 
        WHERE 
        to_user=:to_user
        AND 
        topic_id=:topic_id
        ");
        $update->bindParam(':isread', $read);
        $update->bindParam(':to_user', $_SESSION['user_id']);
        $update->bindParam(':topic_id', $getData);
        $update->execute();
    }
}

    //Считаем общее количество непрочитанных сообщений
    $st = $pdo->prepare('SELECT isread FROM `dialogs` WHERE to_user=:to_user AND isread = 1');
    $st->bindParam(':to_user', $_SESSION['user_id'], PDO::PARAM_INT);
    $st->execute();
    $UnreadMessages = $st->fetchAll();
    $numberUnread = count($UnreadMessages);

//echo "<pre>";
//var_dump($UnreadMessages);
//echo "</pre>";

//echo "<pre>";
//var_dump($_GET);
//echo "</pre>";

//echo "<pre>";
//var_dump($getData);
//echo "</pre>";

//echo "<pre>";
//var_dump($userGetData);
//echo "</pre>";

//echo "<pre>";
//var_dump($_SERVER['REQUEST_URI']);
//echo "</pre>";
?>

<div class="lk_nav">
    <div class="left_nav_block">
        <div class="unread_mess">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <span><?php echo $numberUnread;?></span>
        </div>
    </div>
    <div class="right_nav_block">
        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
        <span>Info@vsemroliki.ru</span>
    </div>
</div>