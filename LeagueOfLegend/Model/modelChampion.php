<?php

function SelectAllChampionWithRole($pdo)
{
    try {
        $query = "select * from champions inner join roles on champions.championRole = roles.roleId order by championNom asc";
        $SelectAllChampion = $pdo->prepare($query);
        $SelectAllChampion->execute();
        $champions = $SelectAllChampion->fetchAll();
        return($champions);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
function CreationChampionWithRole($pdo)
{
    try{
        $query = "insert into champions (championNom, championRole, description, image, lien, icone) values (:championNom, :championRole, :description, :image, :lien, :icone)";
        $newUser = $pdo->prepare($query);
        $newUser->execute([
            'championNom' => htmlentities($_POST["nom"]),
            'championRole' => htmlentities($_POST["role"]),
            'description' => htmlentities($_POST["description"]),
            'image' => htmlentities($_POST["image"]),
            'lien' => htmlentities($_POST["lien"]),
            'icone' => htmlentities($_POST["icone"]),
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



function selectOneChampion($pdo)
{
    try {
        $query = "select * from champions where championId = :championId ";
        $SelectOneChampion = $pdo->prepare($query);
        $SelectOneChampion->execute([
            'championId' => $_GET['championId']
        ]);
        $oneChampion = $SelectOneChampion->fetch();
        return($oneChampion);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}