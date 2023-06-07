<?php
require_once "Model/modelObjet.php";
require_once "Model/modelEquipe.php";

$uri = $_SERVER['REQUEST_URI'];

if ($uri === "/creerObjet"){
    if (isset ($_POST ['btnEnvoi'])) {
        $messageErrorLogin = verifData();
        if(!isset($messageErrorLogin)){
            $objets = CreationObjet($pdo);
    	}
    }
    require_once "Templates/Objets/creerObjet.php";
}
elseif ($uri === "mettreObjet?equipeId=") {
    $objets = SelectAllObjets($pdo);

    require_once "Templates/Objets/associerObjets.php";
}