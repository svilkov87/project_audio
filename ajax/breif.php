<?php
include("../include/connection.php");
## проверка ошибок
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);



    $company = trim($_POST['company']);
    $good_service = trim($_POST['good_service']);
    $customers = trim($_POST['customers']);
    $main_message = trim($_POST['main_message']);
    $advantages = trim($_POST['advantages']);
    $contacts = trim($_POST['contacts']);
    $type_screen = trim($_POST['type_screen']);
    $wishes = trim($_POST['wishes']);
    $optionallyty = trim($_POST['optionallyty']);
    $chrono = trim($_POST['chrono']);
    $date_finish = trim($_POST['date_finish']);
    $contacts_lpr = trim($_POST['contacts_lpr']);

    $company = htmlspecialchars($company);
    $good_service = htmlspecialchars($good_service);
    $customers = htmlspecialchars($customers);
    $main_message = htmlspecialchars($main_message);
    $advantages = htmlspecialchars($advantages);
    $contacts = htmlspecialchars($contacts);
    $type_screen = htmlspecialchars($type_screen);
    $wishes = htmlspecialchars($wishes);
    $optionallyty = htmlspecialchars($optionallyty );
    $chrono = htmlspecialchars($chrono);
    $date_finish = htmlspecialchars($date_finish);
    $contacts_lpr = htmlspecialchars($contacts_lpr);

    $insert = $pdo->prepare("
INSERT INTO `breif` 
SET 
company=:company, 
good_service=:good_service, 
customers=:customers, 
main_message=:main_message, 
advantages=:advantages, 
contacts=:contacts, 
type_screen=:type_screen, 
wishes=:wishes, 
optionallyty=:optionallyty, 
chrono=:chrono, 
date_finish=:date_finish, 
contacts_lpr=:contacts_lpr
");
    $insert->bindParam(':company', $company);
    $insert->bindParam(':good_service', $good_service);
    $insert->bindParam(':customers', $customers);
    $insert->bindParam(':main_message', $main_message);
    $insert->bindParam(':advantages', $advantages);
    $insert->bindParam(':contacts', $contacts);
    $insert->bindParam(':type_screen', $type_screen);
    $insert->bindParam(':wishes', $wishes);
    $insert->bindParam(':optionallyty', $optionallyty);
    $insert->bindParam(':chrono', $chrono);
    $insert->bindParam(':date_finish', $date_finish);
    $insert->bindParam(':contacts_lpr', $contacts_lpr);
    $insert->execute();


//        уведомление на почту
require_once("../phpmailer/phpmailer/mailfunc.php");
$m_to = "svilkov87@mail.ru"; // кому - ящик (из формы)
$m_nameto = "svilkov87@mail.ru"; // Кому
$m_namefrom = $_POST['company']; // Поле От в письме
$subj = "Новая заявка сценарий. Бриф-данные";
$tmsg =
    'Имя клиента:  '.$company.'.
     '.'Товар/услуга:  '.$good_service .
    'Потенциальные покупатели на которых рассчитан ролик:  '.$customers.
    'Главное сообщение, которое должно прозвучать в ролике: '.$main_message.
    'Преимущества: '.$advantages.
    'Координаты (адрес, телефон, сайт), которые должны прозвучать в ролике: '.$contacts.
    'Тип сценария '.$type_screen.
    'Пожелания по тональности сообщения, музыке, голосу (юмор, лирика, пафос, '.$wishes.
    'Нужно ли дополнительное оформление (шумы, звуки). Если да, то какие?, '.$optionally.
    'Дата, когда вы хотите получить готовый материал. '.$date_finish.
    'контакты '.$contacts_lpr
;
$m_from = 'svilkov00@yandex.ru'; // от кого
$m_reply = 'svilkov00@yandex.ru'; // адрес для обратного ответа
$mail1 = phpmailer($subj, $tmsg, $m_to, $m_nameto, $m_namefrom, $m_from, $m_reply, $m_hostmail, $m_port, $m_password, $m_secure);

?>