<?php
include("../include/connection.php");
session_start();
## проверка ошибок
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

		$dialog_id = $id * 7;

        $answer = $_POST['answer_dialog'];
        $time = time();
        $date = date('d.m.Y H:i', $time);
        $insert = $pdo->prepare("INSERT INTO `dialogs` SET text=:text, date_time=:date_time, user=:user, dialog_id=:dialog_id");
        $insert->bindParam(':text', $answer);
        $insert->bindParam(':user', $_SESSION['email']);
        $insert->bindParam(':date_time', $date);
        $insert->bindParam(':dialog_id', $dialog_id);
        $insert->execute();


?>