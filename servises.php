<?php
include("include/connection.php");
//
//## проверка ошибок
//error_reporting(E_ALL | E_STRICT);
//ini_set('display_errors', TRUE);
//ini_set('display_startup_errors', TRUE);
//
//
////
////    $name = $_POST['name'];
////    $contacts = $_POST['s_name'];
////    $theme = $_POST['theme'];
//    $insert = $pdo->prepare("
//        INSERT INTO `orders`
//        SET
//        user_data=:user_data,
//        contacts=:contacts,
//        theme=:theme
//        ");
//    $insert->bindParam(':user_data', $name);
//    $insert->bindParam(':contacts', $contacts);
//    $insert->bindParam(':theme', $theme);
//    $insert->execute();


//$st = $pdo->query('SELECT * FROM `orders`');
//$tags = $st->fetchAll();
//
//echo "<pre>";
//var_dump($tags);
//echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Услуги</title>
    <?php include("include/head.php"); ?>
</head>
<body>
<?php include("include/modal.php"); ?>
<?php include("include/nav.php"); ?>
<section class="one">
    <div class="one-inner">
        <div class="one-header">
            <p>hello</p>
        </div>
        <div class="block-content">
            <div class="wrapp_content">
                <h1>пример 1</h1>
                <div class="block_serv_desc">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aspernatur aut autem culpa delectus deleniti esse eveniet iste libero
                    nam necessitatibus nulla odio odit perspiciatis quasi recusandae
                    reprehenderit sed, sint.
                </div>
            </div>
            <div class="one-footer">
                <p>hello</p>
            </div>
        </div>
</section>
<section class="two">
    <div class="two-inner">
        <div class="two-header">
            <p>hello</p>
        </div>
        <div class="block-content">
            <div class="wrapp_content">
                <h1>пример 2</h1>
                <div class="block_serv_desc">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aspernatur aut autem culpa delectus deleniti esse eveniet iste libero
                    nam necessitatibus nulla odio odit perspiciatis quasi recusandae
                    reprehenderit sed, sint.
                </div>
            </div>
        </div>
        <div class="two-footer">
            <p>hello</p>
        </div>
    </div>
</section>
<?php include("include/footer.php"); ?>
<?php include("include/scripts.php"); ?>
</body>
</html>
