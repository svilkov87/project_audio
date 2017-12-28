<?php
include("include/connection.php");
## проверка ошибок
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

//выбор всех заказов от зареганых клиентов
$st = $pdo->query('SELECT * FROM `audio_examples`');
$allExamples = $st->fetchAll();

$info_ex  = 1;
$image_ex = 2;
$game_ex  = 3;
$vocal_ex = 4;


//сценарии
//примеры информационных сценариев
$st = $pdo->prepare('SELECT * FROM `scripts_examples` WHERE main_category=:main_category');
$st->bindParam(':main_category', $info_ex, PDO::PARAM_INT);
$st->execute();
$infoScripts = $st->fetchAll();

//примеры имиджевых сценариев
$st = $pdo->prepare('SELECT * FROM `scripts_examples` WHERE main_category=:main_category');
$st->bindParam(':main_category', $image_ex, PDO::PARAM_INT);
$st->execute();
$imageScripts = $st->fetchAll();

//примеры игровых сценариев
$st = $pdo->prepare('SELECT * FROM `scripts_examples` WHERE main_category=:main_category');
$st->bindParam(':main_category', $game_ex, PDO::PARAM_INT);
$st->execute();
$gameScripts = $st->fetchAll();

//примеры вокал
$st = $pdo->prepare('SELECT * FROM `scripts_examples` WHERE main_category=:main_category');
$st->bindParam(':main_category', $vocal_ex, PDO::PARAM_INT);
$st->execute();
$vocalScripts = $st->fetchAll();

// echo "<pre>";
// var_dump($allExamples);
// echo "</pre>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Услуги</title>
    <?php include("include/head.php"); ?>
</head>
<body>
<?php include("include/button_top.php"); ?>
<?php include("include/loader.php"); ?>
<?php include("include/modal.php"); ?>
<?php include("include/modal_price.php"); ?>
<div class="filter_bg">
    <section class="one">
        <?php include("include/side_fixed.php"); ?>
        <div class="wrapp_header wow fadeIn" data-wow-delay="0.2s">
            <div class="front wow fadeIn">
                <div class="front_inner">
                    <div class="voicing wow fadeInDown" data-wow-delay="0.4s">
                        <p>Недорогая&nbsp;Озвучка</p>
                    </div>
                    <div class="youre wow fadeInRight" data-wow-delay="0.4s">
                        <p>Для тех</p>
                    </div>
                    <div class="youre_dream wow fadeInLeft" data-wow-delay="0.4s">
                        <p>кто не хочет усложнять</p>
                    </div>
                    <div class="price_block wow fadeInUp" data-wow-delay="1.2s">
                        <div class="price_block_inner">
                            <img src="dist/img/Check File-96.png" alt="alt" class="price_icon">
                        </div>
                        <div class="block_hov">
                            <p class="p1">посмотреть</p>
                            <p class="p2">прайс</p>
                        </div>
                    </div>
                    <i class="fa fa-angle-down wow fadeIn" data-wow-delay="1s" id="fa-angle-down-one"
                       aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </section>
    <section class="two">
        <div class="two_inner">
            <div class="block_content">
                <div class="container">
                    <div class="desc_examples">
                        <h4>Озвучка</h4>
                        <p>
                            Озвучка бывает различных видов: информационная, игровая, пародия или вокал.
                            Кроме того, наши дикторы могут начитать вам текст на английском языке.
                        </p>
                        <h4 class="h4_examples">Примеры:</h4>
                    </div>
                    <!-- new examples -->
                    <div class="row">
                    <?php foreach ($allExamples as $item):?>
                        <div class="col-md-4 col-sm-4">
                            <div class="row">
                                <div class="wrapp_item">
                                    <div class="item_image">
                                        <img src="app/img/headphone-1129896_640.png">
                                    </div>
                                    <div class="top_block">
                                        <div class="top_head">
                                            <h4 class="h4_head"><?php echo $item['audio_name']; ?></h4>
                                            <p class="top_p"><?php echo $item['audio_description']; ?></p>
                                            <div class="span_play">
                                                <i class="fa fa-play" aria-hidden="true"></i>
                                                <audio class="sound" src="app/audio/<?php echo $item['audio_track']; ?>" preload="auto" controls></audio>
                                            </div>
                                            <div class="span_pause">
                                                <i class="fa fa-pause" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="top_body">
                                            <div class="t_body_head">
                                                <p class="p_desc">Стоимость</p>
                                                <p class="p_price">от <?php echo $item['price']; ?>р</p>
                                            </div>
                                            <div class="t_body_bott">
                                                <div class="cssload-container">
                                                    <div class="cssload-tube-tunnel"></div>
                                                </div>
                                            </div>
                                            <div class="get_order linkModal">
                                                <p class="p_get_ord">Сформировать заказ</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    </div>
                    <!-- /new examples -->
                    <!-- scenario -->
                    <div class="desc_examples">
                        <h4>Сценарий</h4>
                        <p>Для составления сценария, вам будет нужно заполнить специальную форму - <span class="breif">бриф</span>.</p>
                        <p>*После утвеждрения сценария и монтажа ролика в соответствие с ним, любые изменения и корректировки делаются за отдельную плату.</p>
                        <div class="desc_items">
                        <p class="desc_items__header">Примеры сценариев:</p>
                        <ul class="desc_items__ul">
                            <li class="desc_items__li">
                                <span class="desc_items_text">Информационный</span>
                                <ul class="wrapper_desc">
                                    <?php foreach ($infoScripts as $key): ?>
                                    <li class="wrapper_desc__item"><?php echo $key['example_text']; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <li class="desc_items__li">
                                <span class="desc_items_text">Игровой</span>
                                 <ul class="wrapper_desc">
                                    <?php foreach ($gameScripts as $key): ?>
                                    <li class="wrapper_desc__item"><?php echo $key['example_text']; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <li class="desc_items__li">
                                <span class="desc_items_text">Имиджевый</span>
                                <ul class="wrapper_desc">
                                    <?php foreach ($imageScripts as $key): ?>
                                    <li class="wrapper_desc__item"><?php echo $key['example_text']; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <li class="desc_items__li">
                                <span class="desc_items_text">Вокальный</span>
                                <ul class="wrapper_desc">
                                    <?php foreach ($vocalScripts as $key): ?>
                                    <li class="wrapper_desc__item"><?php echo $key['example_text']; ?></li>
                                    <?php endforeach; ?>
                                </ul>                                
                            </li>
                        </ul>                        
                    </div>
                    </div>
                    <div class="breif_position"></div>
                    <div class="wrapp_breif">
                        <div class="breif_header">
                            <h2>Все поля обязательны к заполнению</h2>
                        </div>
                        <div class="breif_wrapp">
                            <div class="breif_err_block">
                                <p class="p_err_breif">Не все поля заполнены</p>
                            </div>
                            <div class="breif_modal_confirm">
                                Спасибо!
                            </div>
                            <div class="breif_modal_forms">
                                <form action="" method="post" id="breif_forms">
                                    <div class="breif_f_item">
                                        <p>Наименование компании:</p>
                                        <input class="breif_inputs" type="text" name="company" id="company">
                                    </div>
                                    <div class="breif_f_item">
                                        <p>Товар/услуга, которая рекламируется в ролике:</p>
                                        <input class="breif_inputs" type="text" name="good_service" id="good_service">
                                    </div>
                                    <div class="breif_f_item">
                                        <p>Потенциальные покупатели на которых рассчитан ролик:</p>
                                        <input class="breif_inputs" type="text" name="customers" id="customers">
                                    </div>

                                    <div class="breif_f_item">
                                        <p>Главное сообщение, которое должно прозвучать в ролике:</p>
                                        <input class="breif_inputs" type="text" name="main_message" id="main_message">
                                    </div>
                                    <div class="breif_f_item">
                                        <p>Конкурентные преимущества вашей услуги, товара (Чем ваш товар выгодно отличается от конкурентов):</p>
                                        <input class="breif_inputs" type="text" name="advantages" id="advantages">
                                    </div>
                                    <div class="breif_f_item">
                                        <p>Координаты (адрес, телефон, сайт), которые должны прозвучать в ролике:</p>
                                        <input class="breif_inputs" type="text" name="contacts" id="contacts">
                                    </div>
                                    <div class="breif_f_item">
                                        <p>Тип сценария (информационный, игровой, песенный).</p>
                                        <input class="breif_inputs" type="text" name="type_screen" id="type_screen">
                                    </div>
                                    <div class="breif_f_item">
                                        <p>Пожелания по тональности сообщения, музыке, голосу (юмор, лирика, пафос, солидно, жизнерадостно, рационально, серьезно, по деловому, другое).</p>
                                        <textarea class="breif_textarea" name="wishes" id="wishes" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="breif_f_item">
                                        <p>Нужно ли дополнительное оформление (шумы, звуки). Если да, то какие?</p>
                                        <input class="breif_inputs" type="text" name="optionallyty" id="optionallyty">
                                    </div>

                                    <div class="breif_f_item">
                                        <p>Хронометраж</p>
                                        <input class="breif_inputs" type="text" name="chrono" id="chrono">
                                    </div>

                                    <div class="breif_f_item">
                                        <p>Дата, когда вы хотите получить готовый материал.</p>
                                        <input class="breif_inputs" type="text" name="date_finish" id="date_finish">
                                    </div>

                                    <div class="breif_f_item">
                                        <p>КОНТАКТЫ: Телефон, почта, Skype, того кто принимает решение по утверждению роликка</p>
                                        <textarea class="breif_textarea" name="contacts_lpr" id="contacts_lpr" cols="30" rows="10"></textarea>
                                    </div>
                                    <button type="submit" name="enter_breif" class="btn_breif">Отправить данные</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /scenario -->
                </div>
            </div>
        </div>
    </section>
<?php include("include/footer.php"); ?>
</div>
</body>
</html>
