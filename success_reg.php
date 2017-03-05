<?php
include("include/connection.php");
session_start();
## проверка ошибок
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

//    echo "<pre>";
//    var_dump($_SESSION);
//    echo "</pre>";

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
                <div class="succ_block_header">
                    <span class="sett_header">Регистрация прошла успешно</span>
                </div>
                <div class="enter_lk">
                    <a href="lk.php?id=<?php echo $_SESSION['user_id'];?>">войти в личный кабинет</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("include/footer.php"); ?>
<?php include("include/scripts.php"); ?>
</body>
</html>
