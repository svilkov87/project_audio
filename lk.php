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

// echo "<pre>";
// var_dump($_SESSION);
// echo "</pre>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <?php include("include/head.php"); ?>
</head>
<body>
<!-- <div class="block_succ">
    <div class="container">
        <div class="row">
            <div class="succ_wrapper">

            </div>
        </div>
    </div>
</div> -->
<section class="lk_section">
    <div class="col-md-3">
        <div class="row">
            <div class="lk_sidebar">
                <div class="lk_head_sidebar">
                        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                    <span class="hello">
                        info@vsemroliki.ru
                    </span>
                </div>
                <div class="lk_body_sidebar">
                    <ul>
                        <li class="lk_sb_list"><a href="">мои заказы</a></li>
                        <li class="lk_sb_list"><a href="">бонусы</a></li>
                        <li class="lk_sb_list"><a href="">вопросы</a></li>
                        <li class="lk_sb_list"><a href="">настройки</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<div class="col-md-9">
    <div class="lk_content"></div>
</div>

    
</section>

<?php include("include/footer.php"); ?>
<?php include("include/scripts.php"); ?>
</body>
</html>
