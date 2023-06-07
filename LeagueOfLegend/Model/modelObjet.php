<?php

function CreationObjet($pdo)
{
    try{
        $query = "insert into objets (objetNom, objetRarete) values (:objetNom, :objetRarete)";
        $CreationObjet = $pdo->prepare($query);
        $CreationObjet->execute([
            'objetNom' => htmlentities($_POST["nom"]),
            'objetRarete' => htmlentities($_POST["rarete"]),
        ]);
    }
    catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}
function SelectAllObjets($pdo) {
    try {
        $query = "select * from objets";
        $SelectAllObjets = $pdo->prepare($query);
        $SelectAllObjets->execute();
        $objets = $SelectAllObjets->fetchAll();
        return($objets);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
function MettreObjet($pdo) 
{
    try{
        $query = "insert into champions_objets (championId, objetId) values (:championId, :objetId)";
        $MettreObjet = $pdo->prepare($query);
        $MettreObjet->execute([
            'championId' => htmlentities($_POST["nom"]),
            'objetId' => htmlentities($_POST["rarete"]),
        ]);
    }
    catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}