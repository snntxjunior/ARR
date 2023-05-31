<?php

define('MYSQL_HOST', 'localhost');
define('MYSQL_DB_NAME', 'dashboard');
define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', '');

try {
    $connect = new PDO("mysql:host=" . MYSQL_HOST . ";dbname=" . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD);
} catch (PDOException $e) {
    echo "Error: " . $e-getMenssage();
}