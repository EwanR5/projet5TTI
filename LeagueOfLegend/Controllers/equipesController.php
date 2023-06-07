<?php
require_once "Model/modelEquipe.php";
require_once "Model/modelChampion.php";

$uri = $_SERVER['REQUEST_URI'];

if ($uri === "/creerEquipe"){
    $champions = SelectAllChampionWithRole($pdo);
    
    if (isset ($_POST ['btnEnvoi'])) {
        creationEquipe($pdo);
        header("location:/");
    }

        require_once "Templates/Equipes/creerEquipe.php";
}
else if ($uri === "/modifierEquipe"){
    $equipes = SelectEquipesJoueur($pdo);
    require_once "Templates/Equipes/afficherEquipesJoueur.php";
}
elseif ((str_contains($uri,"voirEquipe?equipeId="))) {
    $equipe = SelectOneEquipe($pdo);
    require_once "Templates/Equipes/lEquipe.php";
}
elseif ((str_contains($uri,"supprimerEquipe?equipeId="))) {
    $equipe = SupprimerLEquipe($pdo);
    header("location:/modifierEquipe");
}
elseif ((str_contains($uri,"modifierEquipe?equipeId="))) {
    $champions = SelectAllChampionWithRole($pdo);
    $equipes = SelectOneEquipe($pdo);
    
    if (isset ($_POST ['btnEnvoi'])) {
        MiseAJourEquipe($pdo);
        header("location:/modifierEquipe");
    }
    
    require_once "Templates/Equipes/creerEquipe.php";
}