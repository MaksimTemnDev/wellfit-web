<?php

global $pdo;

try {
    $db_name = 'wellfit';
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $pdo = new PDO("mysql:dbname=$db_name;host=$host", $user, $password);
} catch (PDOException $e) {
    die($e->getMessage());
}

?>