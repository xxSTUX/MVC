<?php

$dbHost = 'localhost';
$dbName = 'rolegame';
$dbUser = 'root';

try {
    $db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->exec("SET NAMES 'utf8'");
} catch (PDOException $e) {
    die("Error de conexión a la base de datos: " . $e->getMessage());
}