<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(isset($_SESSION["user"])) : ?>Modification<?php else : ?>Inscription<?php endif ?></title>
</head>
<body>
    <form method="post" action="">
        <fieldset class ="container justify-content-center align-items-center">
        <legend><?php if(isset($_SESSION["user"])) : ?>Modifier<?php else : ?>Inscription<?php endif ?></legend>
            <div>
                <label for="pseudo"> Entrez votre pseudo : </label>
                <input name="pseudo" type="text" id="pseudo" value="<?php if(isset($_SESSION["user"])) : ?><?= $_SESSION["user"]->utilisateurPseudo ?><?php endif ?>">
                <?php if(isset($messageErrorLogin["pseudo"])) : ?><p> <?= $messageErrorLogin["pseudo"] ?> </p> <?php endif ?>
            </div>
            <div>
                <label for="email">Entrez votre Email :</label>
                <input name="email" type="email" id="email" value="<?php if(isset($_SESSION["user"])) : ?><?= $_SESSION["user"]->utilisateurEmail ?><?php endif ?>">
                <?php if(isset($messageErrorLogin["email"])) : ?><p> <?= $messageErrorLogin["email"] ?> </p> <?php endif ?>
            </div>
            <div>
                <label for="prenom"> Entrez votre prenom : </label>
                <input name="prenom" type="text" id="prenom" value="<?php if(isset($_SESSION["user"])) : ?><?= $_SESSION["user"]->utilisateurPrenom ?><?php endif ?>">
                <?php if(isset($messageErrorLogin["prenom"])) : ?><p> <?= $messageErrorLogin["prenom"] ?> </p> <?php endif ?>
            </div>
            <div>
                <label for="nom"> Entrez votre nom : </label>
                <input name="nom" type="text" id="nom" value="<?php if(isset($_SESSION["user"])) : ?><?= $_SESSION["user"]->utilisateurNom ?><?php endif ?>">
                <?php if(isset($messageErrorLogin["nom"])) : ?><p> <?= $messageErrorLogin["nom"] ?> </p> <?php endif ?>
            </div>
            <div>
                <label for="mot de passe">Entrez votre mot de passe : (8 caractères minimum)</label>
                <input name="mot_de_passe" type="password" id="mot de passe" minlength="8" value="<?php if(isset($_SESSION["user"])) : ?><?= $_SESSION["user"]->utilisateurMdp ?><?php endif ?>">
                <?php if(isset($messageErrorLogin["mot_de_passe"])) : ?><p> <?= str_replace('_', ' ', $messageErrorLogin["mot_de_passe"] )?> </p> <?php endif ?>
            </div>
        </fieldset>
        <fieldset>
            <legend>Bouton Inscription</legend>
            <button name="btnEnvoi" value="envoyer" class = "align-items-center bouton"><?php if(isset($_SESSION["user"])) : ?>Modifier<?php else : ?>S'inscrire<?php endif ?></button>
        </fieldset>
    </form>
</body>
</html>