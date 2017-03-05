<?php
session_start();
unset($_SESSION["email"]);
unset($_SESSION["password"]);
unset($_SESSION["user_id"]);
unset($_SESSION["user_name"]);

include("include/connection.php");

//проверка ошибок
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

$data = $_POST;
if (isset($data['do_signup'])) {

    $errors = array();

    if (strlen($data['username']) > 20){
        $errors[] = "Имя не должно превышать 20 символов";
    }

    //если логин не заполнен
    if (trim($data['login'] == "")) {
        $errors[] = "Введите логин";
    }

    if (strlen($data['login']) > 10){
        $errors[] = "Логин не должен превышать 10 символов";
    }
    //если имя не заполнено
    if (trim($data['username'] == "")) {
        $data['username'] = "Unknow person";
    }



    //занят ли логин
    if (trim($data['login'] !== "")) {
        $st = $pdo->prepare('SELECT COUNT(*) FROM `users` WHERE login=:login');
        $st->bindParam(':login', $data['login'], PDO::PARAM_INT);
        $st->execute();
        $profile_login = $st->fetchAll();
        if ($profile_login[0]['COUNT(*)'] > 0) {
            $errors[] = "Логин занят";
        }
    }
    //если email не заполнен
    if (trim($data['email'] == "")) {
        $errors[] = "Введите email";
    } //занят ли email
    elseif (trim($data['email'] !== "")) {
        $st = $pdo->prepare('SELECT COUNT(*) FROM `users` WHERE email=:email');
        $st->bindParam(':email', $data['email'], PDO::PARAM_INT);
        $st->execute();
        $profile_email = $st->fetchAll();
        if ($profile_email[0]['COUNT(*)'] > 0) {
            $errors[] = "Email уже занят";
        }
    }
    if (strlen($data['password']) < 4){
        $errors[] = "Слишком короткий (не надежный) пароль!";
    }
    //если пароль не заполнен
    if (trim($data['password'] == "")) {
        $errors[] = "Введите пароль";
    }
    //если пароли не совпадают
    if (trim($data['password']) == "" OR trim($data['password']) != trim($data['e_password'])) {
        $errors[] = "Пароли не совпадают";
    }

    //если все заполнено и соответвует, то регистрируем
    if (empty($errors)) {
        $password = md5($data['password']);
        $ins = $pdo->prepare
        ("
            INSERT INTO
            `users`
            SET
            username=:username,
            email=:email,
            password=:password,
            login=:login
            ");
        $ins->bindParam(":username", $data['username']);
        $ins->bindParam(":email", $data['email']);
        $ins->bindParam(":password", $password);
        $ins->bindParam(":login", $data['login']);
        $ins->execute();
//            $result = $ins->FetchAll();
//            $resultLogin = $ins[0]['login'];

        $_SESSION['email'] = $data['email'];
        $_SESSION['user_name'] = $data['username'];

        $st = $pdo->prepare('SELECT id FROM `users` WHERE login=:login');
        $st->bindParam(':login', $data['login'], PDO::PARAM_INT);
        $st->execute();
        $profile = $st->fetchAll();
        $resultPfofile = $profile[0]['id'];

        $_SESSION['user_id'] = $resultPfofile;

        header("Location: success_reg.php");
//        header("Location: http://".$_SERVER['HTTP_HOST']."/successreg/".$user_id);
//        header("Location: http://".$_SERVER['HTTP_HOST']."/succsessreg/".$_SESSION['user_id']);
        exit;
    }
    else {
        $error = array_shift($errors);
    }
//    echo "<pre>";
//    var_dump($password);
//    echo "</pre>";
}
//        если конпка не нажата
if (!isset($data['do_signup'])) {
    $no_errors = "Введите данные";
}

//    echo "<pre>";
//    var_dump($ins);
//    echo "</pre>";
//
//    echo "<pre>";
//    var_dump(strlen($data['username']));
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
<div class="block_reg">
    <div class="container">
        <div class="row">
            <div class="settings_wrapper">
                <div class="settings_block_header">
                    <span class="sett_header">Регистрация</span>
                </div>
                <div class="reg_wrapper">
                    <div class="reg_forms">
                        <form method="post" class="form_of_reg">
                            <?php
                            if (!isset($data['do_signup'])):?>
                                <p class="errors_reg"><?php echo $no_errors; ?></p>
                            <?php else: ?>
                                <p class="errors_reg"><?php echo $error; ?></p>
                            <?php endif; ?>
                            <p class="p_forms_reg">
                                <label for="login">Имя</label><br>
                                <input type="text" name="username" id="username" class="reg_inputs" autocomplete="on"
                                       value="<?php echo @$data['username']; ?>">
                            </p>
                            <p class="p_forms_reg">
                                <label for="login">Логин</label><br>
                                <input type="text" name="login" id="login" class="reg_inputs" autocomplete="on"
                                       value="<?php echo @$data['login']; ?>">
                            </p>
                            <p class="p_forms_reg">
                                <label for="email">Email</label><br>
                                <input type="text" name="email" id="email" class="reg_inputs"
                                       value="<?php echo @$data['email']; ?>">
                            </p>
                            <p class="p_forms_reg">
                                <label for="password">Пароль</label><br>
                                <input type="password" name="password" id="password" class="reg_inputs"
                                       value="<?php echo @$data['password']; ?>">
                            </p>
                            <p class="p_forms_reg">
                                <label for="e_password">Повторите пароль</label><br>
                                <input type="password" name="e_password" id="e_password" class="reg_inputs"
                                       value="<?php echo @$data['e_password']; ?>">
                            </p>
                            <div class="button_n_reg">
                                <button class="btn_default" type="submit" name="do_signup">Зарегистрироваться</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("include/footer.php"); ?>
<?php include("include/scripts.php"); ?>
</body>
</html>
