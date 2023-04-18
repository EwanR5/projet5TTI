<?php
function creationEquipe($pdo)
{
    try{
        $query = "insert into equipes (equipeNom, utilisateurId, top, jungle, mid, adc, support) values (:equipeNom, :utilisateurId, :top, :jungle, :mid, :adc, :support)";
        $newUser = $pdo->prepare($query);
        $newUser->execute([
            'equipeNom' => $_POST["nom"],
            'utilisateurId' => $_SESSION["user"] -> utilisateurId,
            'top' => $_POST["top"],
            'jungle' => $_POST["jungle"],
            'mid' => $_POST["mid"],
            'adc' => $_POST["adc"],
            'support' => $_POST["support"],
        ]);
    }
    catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}
function SupprimerEquipesUtilisateur($pdo) 
{
    try {
        $query = "Delete * from Equipes where utilisateurId = :utilisateurId";
        $SupprimerUtilisateur = $pdo->prepare($query);
        $SupprimerUtilisateur->execute([
            'utilisateurId' => $_SESSION["user"]->utilisateurId
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}