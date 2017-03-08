<?php
include("include/connection.php");

session_start();
## проверка ошибок
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

//проверка авторизации
if (isset($_POST['do_auth'])) {
    $e_email = $_POST['email'];
    $e_password = md5($_POST['password']);
    $str = $pdo->prepare('SELECT * FROM `users` WHERE email=:email AND password=:password');
    $str->bindParam(":email", $e_email, PDO::PARAM_INT);
    $str->bindParam(":password", $e_password, PDO::PARAM_INT);
    $str->execute();
    $user_data = $str->fetch(PDO::FETCH_ASSOC);

    if ($user_data['password'] == $e_password) {
        $_SESSION['email'] = $e_email;
        $_SESSION['user_id'] = $user_data['id'];
        header("Location: lk.php?id=".$_SESSION['user_id']);
    }
    else {
        $WorngAuthData = "Неверные данные";
    }
}
//echo "<pre>";
//var_dump($user_data);
//echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Личный кабинет</title>
    <?php include("include/head.php");?>
</head>
<body>
<?php include("include/modal.php"); ?>
<?php include("include/nav.php"); ?>
<div class="container" style="margin-top: 75px;">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="auth_block">
                <div class="auth_head">
                    <h4>Вход в личный кабинет</h4>
                </div>
                <form method="post" class="form_of_reg">
                    <p class="errors_reg"></p>
                    <p class="p_forms_reg">
                        <label for="email">Email</label><br>
                        <input type="text" name="email" id="email" class="reg_inputs">
                    </p>
                    <p class="p_forms_reg">
                        <label for="password">Пароль</label><br>
                        <input type="password" name="password" id="password" class="reg_inputs">
                    </p>
                    <div class="button_n_reg">
                        <button class="btn_default" type="submit" name="do_auth">Войти</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include("include/footer.php"); ?>

<!--[if lt IE 9]-->
<script src="libs/html5shiv/es5-shim.min.js"></script>
<script src="libs/html5shiv/html5shiv.min.js"></script>
<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="libs/respond/respond.min.js"></script>
<!--[endif]-->
<script src="libs/jquery/jquery-1.11.1.min.js"></script>
<script src="libs/scrollto/jquery.scrollTo.min.js"></script>
<script src="libs/main.js"></script>
</body>
</html>
