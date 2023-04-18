<?php
require_once "Model/modelChampion.php";

$uri = $_SERVER['REQUEST_URI'];

if ($uri === "/index.php" || $uri === "/"){
    $champions = SelectAllChampion($pdo);
    require_once "Templates/Champions/pageAccueil.php";
} /*elseif ($uri === "/leChampion") {
    require_once "Templates/Champions/voirLeChampion.php";
}*/ elseif ($uri === "/creerChampion"){
    if (isset ($_POST ['btnEnvoi'])) {
        $messageErrorLogin = verifData();
        if(!isset($messageErrorLogin)){
            $champions = CreationChampion($pdo);
    	}
    }
    require_once "Templates/Champions/creerChampion.php";
}