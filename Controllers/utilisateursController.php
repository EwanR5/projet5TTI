<?php

require_once "Model/modelUtilisateur.php";
require_once "Model/modelEquipe.php";

$uri = $_SERVER['REQUEST_URI'];


if ($uri === "/connexion") {
    if (isset ($_POST ['btnEnvoi'])) {
        $messageErrorLogin = verifData();
        if(!isset($messageErrorLogin)){
            connectUser($pdo);
            header('location:/');
    	}
    }
    require_once "Templates/utilisateurs/connexion.php";
}
elseif ($uri === "/inscription") {
    if (isset ($_POST ['btnEnvoi'])) {
        $messageErrorLogin = verifData();
        if(!isset($messageErrorLogin)){
            createUser($pdo);
            header('location:/connexion');
    	}
    }
    require_once "Templates/Utilisateurs/inscription.php";
}
elseif ($uri === "/deconnexion") {
    session_destroy();
    header('location:/');
}
elseif ($uri === "/profil") {
    require_once "Templates/Utilisateurs/profil.php";
}
elseif ($uri === "/modifierProfil") {
    if(isset($_POST["btnEnvoi"])){
        $messageErrorLogin = verifData();
        if(!isset($messageErrorLogin)){
            MiseAJourUtilisateur($pdo);
        relancerSession($pdo);
        header("location:/profil");
    	}
    }
    require_once "Templates/utilisateurs/inscription.php";
}
elseif ($uri === "/supprimerProfil") {;
    SupprimerEquipesUtilisateur($pdo);
    SupprimerUtilisateur($pdo);
    header("location:/deconnexion");
}


function verifData() {
    foreach ($_POST as $key => $value) {
        if(empty(str_replace(' ', '', $value))) {
            $messageErrorLogin[$key] = "Votre " . $key . " est vide";
        }
    }
    if(isset($messageErrorLogin)){
        return $messageErrorLogin;
    }
}