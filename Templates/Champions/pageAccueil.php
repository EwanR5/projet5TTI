<h1>Accueil</h1>
<?php if(isset($_SESSION['user'])) : ?>
    <a href="/creerEquipe">Créer une équipe</a>
<?php endif ?>
<?php if(isset($_SESSION['user'])) : ?>
    <a href="/modifierEquipe">Modifier une équipe</a>
<?php endif ?>
<?php if(isset($_SESSION['user'])) : ?>
    <a href="/creerChampion">Créer un champion</a>
<?php endif ?>
<?php if(isset($_SESSION['user'])) : ?>
    <a href="/creerObjet">Créer un objet</a>
<?php endif ?>
<?php foreach($champions as $champion) : ?>
    <h2><?= $champion->championNom ?></h2>
    <p><?= $champion->RoleNom ?></p>
<?php endforeach ?>