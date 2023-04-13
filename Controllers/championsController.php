<?php
require_once "Model/modelChampion.php";

$uri = $_SERVER['REQUEST_URI'];

if ($uri === "/index.php" || $uri === "/"){
    $champions = SelectAllChampion($pdo);
    require_once "Templates/Champions/pageAccueil.php";
} /*elseif ($uri === "/leChampion") {
    require_once "Templates/Champions/voirLeChampion.php";
}*/