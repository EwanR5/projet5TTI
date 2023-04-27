<?php
    session_start();
    require_once "Config/databaseConnection.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/index.css">
    <title>Index</title>
</head>
<body>
    
    <header>
        <ul class="flex space-evenly">
            <li class="menu"><a href="/">Home</a></li>
                <?php if(isset($_SESSION['user'])) : ?>
                    <li  class="menu"><a href="profil">Page profil</a></li>
                <?php endif ?>
                <?php if(isset($_SESSION['user'])) : ?>
                    <li  class="menu"><a href="deconnexion">Déconnexion</a></li>
                <?php else : ?>
                    <li  class="menu"><a href="connexion">Connexion</a></li>
                <?php endif ?>
            </li>
        </ul>
    </header>
    <main>
        <?php 
            require_once "Controllers/championsController.php";
            require_once "Controllers/utilisateursController.php";
            require_once "Controllers/equipesController.php";
            require_once "Controllers/objetsController.php";
        ?>
    </main>
    <footer>
    </footer>
</body>
</html>