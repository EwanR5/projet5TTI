<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
</head>
<body>
    <h1>Profil</h1>
    <ol>
        <div>
            <li>Votre Nom</li>
            <p><?= $_SESSION["user"]->utilisateurNom ?></p>
        </div>
        <div>
            <li>Votre Prénom</li>
            <p><?= $_SESSION["user"]->utilisateurPrenom ?></p>
        </div>
        <div>
            <li>Votre Pseudo</li>
            <p><?= $_SESSION["user"]->utilisateurPseudo ?></p>
        </div>
        <div>
            <li>Votre Adresse Email</li>
            <p><?= $_SESSION["user"]->utilisateurEmail ?></p>
        </div>

        <a href="/modifierProfil">Modifier votre profil</a>
        <a href="/supprimerProfil">Supprimer votre profil</a>
</body>
</html>