<?php
// Подключаем библиотеку RedBeanPHP
require "libs/rb-mysql.php";

// Подключаемся к БД
R::setup( 'mysql:host=localhost;dbname=host1410218_vuts',
        'host1410218', 'euv4plcr' );

// Проверка подключения к БД
if(!R::testConnection()) die('No DB connection!');

session_start(); // Создаем сессию для авторизации
?>