<?php

function SelectAllRole($pdo)
{
    try {
        $query = "select * from roles";
        $SelectAllRole = $pdo->prepare($query);
        $SelectAllRole->execute();
        $roles = $SelectAllRole->fetchAll();
        return($roles);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}