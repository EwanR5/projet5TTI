<?php
function creationEquipe($pdo)
{
    
    try{
        $query = "insert into equipes (equipeNom, utilisateurId, top, jungle, mid, adc, support) values (:equipeNom, :utilisateurId, :top, :jungle, :mid, :adc, :support)";
        $newUser = $pdo->prepare($query);
        $newUser->execute([
            'equipeNom' => htmlentities($_POST["nom"]),
            'utilisateurId' => $_SESSION["user"] -> utilisateurId,
            'top' => htmlentities($_POST["top"]),
            'jungle' => htmlentities($_POST["jungle"]),
            'mid' => htmlentities($_POST["mid"]),
            'adc' => htmlentities($_POST["adc"]),
            'support' => htmlentities($_POST["support"]),
        ]);
    }
    catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
    
    
}




function SelectEquipesJoueur($pdo)
{
    try{
        $query = "Select * from Equipes where utilisateurId = :utilisateurId";
        $newUser = $pdo->prepare($query);
        $newUser->execute([
            'utilisateurId' => $_SESSION["user"] -> utilisateurId,
        ]);
        $equipes = $newUser->fetchAll();
        return $equipes;
    }
    catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}
function SelectOneEquipe($pdo) 
{
    try {
        $query = "select *, (SELECT championNom FROM champions WHERE championId = equipes.top) AS topName, (SELECT championNom FROM champions WHERE championId = equipes.jungle) AS jungleName, (SELECT championNom FROM champions WHERE championId = equipes.mid) AS midName, (SELECT championNom FROM champions WHERE championId = equipes.adc) AS adcName, (SELECT championNom FROM champions WHERE championId = equipes.support) AS supportName from equipes where equipeId = :equipeId";
        $SelectOneEquipe = $pdo->prepare($query);
        $SelectOneEquipe->execute([
            'equipeId' => $_GET['equipeId']
        ]);
        $oneChampion = $SelectOneEquipe->fetch();
        return($oneChampion);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
function MiseAJourEquipe($pdo)
{
    try {
        $query = "UPDATE equipes SET equipeNom = :equipeNom, top = :top, jungle = :jungle, mid = :mid, adc = :adc ,support = :support where equipeId = :equipeId";
        $miseAJourUtilisateur = $pdo->prepare($query);
        $miseAJourUtilisateur->execute([
            'equipeNom' => htmlentities($_POST['nom']),
            'top' => htmlentities($_POST['top']),
            'jungle' => htmlentities($_POST['jungle']),
            'mid' => htmlentities($_POST['mid']),
            'adc' => htmlentities($_POST["adc"]),
            'support' => htmlentities($_POST["support"]),
            'equipeId' => $_GET['equipeId']
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
function SupprimerEquipesUtilisateur($pdo) 
{
    try {
        $query = "Delete from Equipes where utilisateurId = :utilisateurId";
        $SupprimerUtilisateur = $pdo->prepare($query);
        $SupprimerUtilisateur->execute([
            'utilisateurId' => $_SESSION["user"]->utilisateurId,
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
function SupprimerLEquipe($pdo)
{
    try {
        $query = "Delete from equipes where equipeId = :equipeId";
        $SupprimerLEquipe = $pdo->prepare($query);
        $SupprimerLEquipe->execute([
            'equipeId' => $_GET['equipeId']
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}