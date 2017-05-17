<?php

## проверка ошибок
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

session_start();

### Если роутера нет - это главная страница
if (empty($_GET['route']) || $_GET['route'] == 'home') {

    include_once "chapters/main.php";
    die();
}

### услуги
if ($_GET['route'] == 'servises') {
    include_once 'chapters/servises.php';
    die();
}

### Личный кабинет
if($_GET['route'] == 'lk'){
    include_once 'chapters/lk/lk.php';
    die();
}

