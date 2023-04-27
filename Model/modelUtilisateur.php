<?php

function createUser($pdo)
{
    try{
        $query = "insert into utilisateurs (utilisateurNom, utilisateurPrenom, utilisateurPseudo, utilisateurEmail, utilisateurMdp) values (:utilisateurNom, :utilisateurPrenom, :utilisateurPseudo, :utilisateurEmail, :utilisateurMdp)"; //nom des colonnes utilisateur
        $newUser = $pdo->prepare($query);
        $newUser->execute([
            'utilisateurNom' => $_POST["nom"],
            'utilisateurPrenom' => $_POST["prenom"],
            'utilisateurPseudo' => $_POST["pseudo"],
            'utilisateurEmail' => $_POST["email"],
            'utilisateurMdp' => $_POST["mot_de_passe"],
        ]);
    }
    catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}
function connectUser($pdo){
    try {
        $query = "select * from utilisateurs where utilisateurPseudo = :utilisateurPseudo and utilisateurMdp = :utilisateurMdp";
        $connectUser = $pdo->prepare($query);
        $connectUser->execute([
            'utilisateurPseudo' => $_POST['pseudo'],
            'utilisateurMdp' => $_POST['mot_de_passe'],
        ]);
        $user = $connectUser->fetch();
        if($user) {
            $_SESSION['user'] = $user;
        }
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function MiseAJourUtilisateur($pdo)
{
    try {
        $query = "UPDATE utilisateurs SET utilisateurNom = :utilisateurNom, utilisateurPrenom = :utilisateurPrenom, utilisateurPseudo = :utilisateurPseudo, utilisateurEmail = :utilisateurEmail, utilisateurMdp = :utilisateurMdp WHERE utilisateurid = :utilisateurid";
        $miseAJourUtilisateur = $pdo->prepare($query);
        $miseAJourUtilisateur->execute([
            'utilisateurNom' => $_POST['nom'],
            'utilisateurPrenom' => $_POST['prenom'],
            'utilisateurPseudo' => $_POST['email'],
            'utilisateurEmail' => $_POST['mot_de_passe'],
            'utilisateurMdp' => $_POST["mot_de_passe"],
            'utilisateurId' => $_SESSION["user"]->utilisateurId
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function SupprimerUtilisateur($pdo)
{
    try {
        $query = "Delete from utilisateurs where utilisateurId = :utilisateurId";
        $SupprimerUtilisateur = $pdo->prepare($query);
        $SupprimerUtilisateur->execute([
            'utilisateurId' => $_SESSION["user"]->utilisateurId
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function relancerSession($pdo)
{
    try {
        $query = "select * from utilisateurs where utilisateurId = :utilisateurId";
        $chercheUser = $pdo->prepare($query);
        $chercheUser->execute([
            'utilisateurId' => $_SESSION["user"]->utilisateurId
        ]);
        $user=$chercheUser -> fetch();
        if ($user) {
            $_SESSION['user']=$user;
        }
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}