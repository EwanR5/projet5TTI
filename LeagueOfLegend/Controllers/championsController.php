<?php
require_once "Model/modelChampion.php";
require_once "Model/modelRole.php";

$uri = $_SERVER['REQUEST_URI'];

if ($uri === "/index.php" || $uri === "/"){
    $champions = SelectAllChampionWithRole($pdo);
    require_once "Templates/Champions/pageAccueil.php";
} elseif ($uri === "/creerChampion"){
    $roles = SelectAllRole($pdo);
    if (isset ($_POST ['btnEnvoi'])) {
        $messageErrorLogin = verifDataChampion();
        if(!isset($messageErrorLogin)){
            $champions = CreationChampionWithRole($pdo);
    	}
    }
    require_once "Templates/Champions/creerChampion.php";
} elseif (str_contains($uri,"voirChampions?championId=")){
    $champion = selectOneChampion($pdo);
    require_once "Templates/Champions/leChampion.php";
}


function verifDataChampion() {
    foreach ($_POST as $key => $value) {
        if(empty(str_replace(' ', '', $value))) {
            $messageErrorLogin[$key] = "Votre " . $key . " est vide";
        }
    }
    if(isset($messageErrorLogin)){
        return $messageErrorLogin;
    }
}