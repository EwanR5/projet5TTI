<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <h1>Connexion</h1>
    <form method="post" action="">
        <fieldset>
            <legend>Se connecter</legend>
            <div>
                <label for="pseudo"> Entrez votre pseudo : </label>
                <input name="pseudo" type="text" id="pseudo">
                <?php if(isset($messageErrorLogin["pseudo"])) : ?><p> <?= $messageErrorLogin["pseudo"] ?> </p> <?php endif ?>
            </div>
            <div>
                <label for="mot de passe">Entrez votre mot de passe : (8 caractères minimum)</label>
                <input name="mot_de_passe" type="password" id="mot de passe" minlength="8">
                <?php if(isset($messageErrorLogin["mot_de_passe"])) : ?><p> <?= str_replace('_', ' ', $messageErrorLogin["mot_de_passe"] )?> </p> <?php endif ?>
            </div>
        </fieldset>
        <fieldset>
            <legend>Bouton Connexion</legend>
            <input type="submit" value="Se connecter" name="btnEnvoi">
        </fieldset>
        <fieldset>
            <p>Pas encore inscrit ? </p>
            <ul class="flex space-evenly">
                <li class="inscription"><a href="/inscription">S'inscrire</a></li>
            </ul>
    </form>
</body>
</html>