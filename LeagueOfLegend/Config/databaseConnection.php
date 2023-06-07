<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=ewan', "ewan", "root", [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
}
catch (PDOExeption $e) {
    die("Il y a une erreur : " . $e->getMessage());
}