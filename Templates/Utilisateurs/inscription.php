<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <h1>Inscription</h1>
    <form method="post" action="">
        <fieldset>
            <legend>S'inscrire</legend>
            <div>
                <label for="pseudo"> Entrez votre pseudo : </label>
                <input name="pseudo" type="text" id="pseudo">
                <?php if(isset($messageErrorLogin["pseudo"])) : ?><p> <?= $messageErrorLogin["pseudo"] ?> </p> <?php endif ?>
            </div>
            <div>
                <label for="email">Entrez votre Email :</label>
                <input name="email" type="email" id="email">
                <?php if(isset($messageErrorLogin["email"])) : ?><p> <?= $messageErrorLogin["email"] ?> </p> <?php endif ?>
            </div>
            <div>
                <label for="prenom"> Entrez votre prenom : </label>
                <input name="prenom" type="text" id="prenom">
                <?php if(isset($messageErrorLogin["prenom"])) : ?><p> <?= $messageErrorLogin["prenom"] ?> </p> <?php endif ?>
            </div>
            <div>
                <label for="nom"> Entrez votre nom : </label>
                <input name="nom" type="text" id="nom">
                <?php if(isset($messageErrorLogin["nom"])) : ?><p> <?= $messageErrorLogin["nom"] ?> </p> <?php endif ?>
            </div>
            <div>
                <label for="mot de passe">Entrez votre mot de passe : (8 caractères minimum)</label>
                <input name="mot_de_passe" type="password" id="mot de passe" minlength="8">
                <?php if(isset($messageErrorLogin["mot_de_passe"])) : ?><p> <?= str_replace('_', ' ', $messageErrorLogin["mot_de_passe"] )?> </p> <?php endif ?>
            </div>
        </fieldset>
        <fieldset>
            <legend>Bouton Inscription</legend>
            <input type="submit" value="S'inscrire" name="btnEnvoi">
        </fieldset>
    </form>
</body>
</html>