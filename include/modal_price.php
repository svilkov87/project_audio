<?php
include("include/connection.php");
## проверка ошибок
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

//выбор всех заказов от зареганых клиентов
$st = $pdo->query('SELECT * FROM `price`');
$allPrices = $st->fetchAll();

   // echo "<pre>";
   // var_dump($allPrices);
   // echo "</pre>";

?>

<div id="myPrice" class="modalPrice">
    <div class="price_content">
        <span class="closePrice">&times;</span>
        <p>vsemroliki.ru</p>
        <div class="col-md-8 col-md-offset-2">
            <div class="row">
                <div class="modal_header">
                    <h1>Прайс-лист</h1>
                </div>
                <div class="modal_wrapp">
                    <?php foreach ($allPrices as $item):?>
                    <div class="modal_wrapp__item">
                        <span class="modal_wrapp__service"><?php echo $item['service_name']; ?></span>
                        <span class="modal_wrapp__price"><?php echo $item['price']; ?> р</span>
                    </div>
                    <?php endforeach; ?>
                    <div class="note">* цены на озвучку и сценарии указаны до 30 сек.</div>
                    <div class="note">** цены на ролики – с вашим сценарием.</div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>