<h1>Accueil</h1>
<a href="/creerEquipe">Créer une équipe</a>
<?php foreach($champions as $champion) : ?>
    <h2><?= $champion->championNom ?></h2>
    <p><?= $champion->championRole ?></p>
<?php endforeach ?>