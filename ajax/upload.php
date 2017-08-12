<?php
include("../include/connection.php");
## проверка ошибок
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);


//$name = trim($_POST['name']);
//$contacts = trim($_POST['s_name']);
//$theme = trim($_POST['theme']);

$name = $_POST['name'];
$contacts = $_POST['s_name'];
$theme = $_POST['theme'];

$name = htmlspecialchars($name);
$contacts = htmlspecialchars($contacts);
$theme = htmlspecialchars($theme);
$insert = $pdo->prepare("INSERT INTO `orders` SET user_data=:user_data, contacts=:contacts, theme=:theme");
$insert->bindParam(':user_data', $name);
$insert->bindParam(':contacts', $contacts);
$insert->bindParam(':theme', $theme);
$insert->execute();

////        уведомление на почту
require_once("../phpmailer/phpmailer/mailfunc.php");
$m_to = "svilkov87@mail.ru"; // кому - ящик (из формы)
$m_nameto = "svilkov87@mail.ru"; // Кому
$m_namefrom = $_POST['name']; // Поле От в письме
$subj = "Новая заявка";
$tmsg = 'Имя клиента:  '.$name.'.  '.'Телефон:  '.$contacts .'Тема:  '.$theme;
$m_from = 'svilkov00@yandex.ru'; // от кого
$m_reply = 'svilkov00@yandex.ru'; // адрес для обратного ответа
$mail1 = phpmailer($subj, $tmsg, $m_to, $m_nameto, $m_namefrom, $m_from, $m_reply, $m_hostmail, $m_port, $m_password, $m_secure);

?>