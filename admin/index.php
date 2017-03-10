<?php
include ("../include/connection.php");
session_start();
## проверка ошибок
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);


//проверка админа при авторизации
if(isset($_POST['enter'])){
    $e_email = $_POST['e_email'];
    $e_password = md5($_POST['e_password']);
    $str = $pdo->prepare('SELECT * FROM `users` WHERE email=:email AND id = 7');
    $str->bindParam(":email", $e_email, PDO::PARAM_INT);
    $str->execute();
    $user_data = $str->fetch(PDO::FETCH_ASSOC);

    //    обращаемся к элементу массива id, которое получили при выборке из таблицы юзеров
    $user_id = $user_data["id"];

        if($user_data['password'] == $e_password){
            $_SESSION['email'] = $e_email;
            $_SESSION['user_id'] = $user_id;
            header("Location: admin.php?id=".$_SESSION['user_id']);
            exit;
        }
            else{echo '
            <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-md-3 col-xs-offset-3 col-md-offset-4">
                        <div class="alert alert-danger">Неверные данные!</div>
                    </div>
                 </div>
            </div>
            ';}
}

//echo "<pre>";
//var_dump($user_data);
//echo "</pre>";
//
//echo "<pre>";
//var_dump($_SESSION);
//echo "</pre>";

?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Вход в админ-панель</title>
    <?php include ("../include/admin_head.php");?>
</head>
<body>
<div class="container" style="margin-top: 75px;">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="auth_block">
                <div class="auth_head">
                    <h4>Вход в админ-панель</h4>
                </div>
                <form method="post" class="form_of_reg">
                    <p class="errors_reg"></p>
                    <p class="p_forms_reg">
                        <label for="email">Email</label><br>
                        <input type="text" name="e_email" id="email" class="reg_inputs">
                    </p>
                    <p class="p_forms_reg">
                        <label for="password">Пароль</label><br>
                        <input type="password" name="e_password" id="password" class="reg_inputs">
                    </p>
                    <div class="button_n_reg">
                        <button class="btn_default" type="submit" name="enter">Войти</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--[if lt IE 9]-->
<script src="../libs/html5shiv/es5-shim.min.js"></script>
<script src="../libs/html5shiv/html5shiv.min.js"></script>
<script src="../libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="../libs/respond/respond.min.js"></script>
<!--[endif]-->
<script src="../libs/jquery/jquery-1.11.1.min.js"></script>
<script src="../libs/scrollto/jquery.scrollTo.min.js"></script>
<script src="../libs/main.js"></script>
</body>
</html>



