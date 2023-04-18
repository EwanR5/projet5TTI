<?php

function SelectAllChampion($pdo)
{
    try {
        $query = "select * from champions";
        $SelectAllChampion = $pdo->prepare($query);
        $SelectAllChampion->execute();
        $champions = $SelectAllChampion->fetchAll();
        return($champions);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
function CreationChampion($pdo)
{
    try{
        $query = "insert into champions (championNom, championRole) values (:championNom, :championRole)";
        $newUser = $pdo->prepare($query);
        $newUser->execute([
            'championNom' => $_POST["nom"],
            'championRole' => $_POST["role"],
        ]);
    }
    catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}
function SupprimerChampionsEquipeDeLUtilisateur($pdo)
{
    try {
        $query = "select * from champions";
        $SelectAllChampion = $pdo->prepare($query);
        $SelectAllChampion->execute();
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
function SupprimerEquipesDeLUtilisateur($pdo)
{
    try {
        $query = "select * from champions";
        $SelectAllChampion = $pdo->prepare($query);
        $SelectAllChampion->execute();
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}