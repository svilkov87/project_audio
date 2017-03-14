<?php
include("../include/connection.php");
## проверка ошибок
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);


//
$name = $_POST['name'];
$contacts = $_POST['s_name'];
$theme = $_POST['theme'];
$insert = $pdo->prepare("INSERT INTO `orders` SET user_data=:user_data, contacts=:contacts, theme=:theme");
$insert->bindParam(':user_data', $name);
$insert->bindParam(':contacts', $contacts);
$insert->bindParam(':theme', $theme);
$insert->execute();


?>