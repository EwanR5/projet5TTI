<?php

function CreationObjet($pdo)
{
    try{
        $query = "insert into objets (objetNom, objetRarete) values (:objetNom, :objetRarete)";
        $newUser = $pdo->prepare($query);
        $newUser->execute([
            'objetNom' => $_POST["nom"],
            'objetRarete' => $_POST["rarete"],
        ]);
    }
    catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}