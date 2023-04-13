<?php
require_once "Model/modelEquipe.php";

$uri = $_SERVER['REQUEST_URI'];

if ($uri === "/creerEquipe"){
    $champions = SelectAllChampion($pdo);
    require_once "Templates/Equipes/creerEquipe.php";
    
    if (isset ($_POST ['btnEnvoi'])) {
        creationEquipe($pdo);
    }
}