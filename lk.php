<?php
include("include/connection.php");
session_start();
## проверка ошибок
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

if (!empty($_GET)) {

    $id = intval($_GET['id']);
    // если зло вручную поставит другой id пользвателя, то он не попадет на чужую страницу с ответами
    if ($id === 0 OR $id != $_SESSION['user_id']) {
//        die('Ошибка сжатия чёрной дыры');
        header("Location: http://". $_SERVER['HTTP_HOST']."index.php");
        exit;
    }

    //Выбираем юзера, чей аккаунт
    $st = $pdo->prepare('SELECT * FROM `users` WHERE id=:id');
    $st->bindParam(':id', $id, PDO::PARAM_INT);
    $st->execute();
    $profile_data = $st->fetchAll();


    if (!isset($_SESSION['email'])) {
    //    header("Location: http://impovar.tt90.ru/home");
        header("Location: http://".$_SERVER['HTTP_HOST']."index.php");
        exit;
    }
}

echo "<pre>";
var_dump($_SESSION);
echo "</pre>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <?php include("include/head.php"); ?>
</head>
<body>
<?php include("include/modal.php"); ?>
<?php include("include/modal_price.php"); ?>
<?php include("include/nav.php"); ?>
<div class="block_succ">
    <div class="container">
        <div class="row">
            <div class="succ_wrapper">

            </div>
        </div>
    </div>
</div>

<?php include("include/footer.php"); ?>
<?php include("include/scripts.php"); ?>
</body>
</html>
