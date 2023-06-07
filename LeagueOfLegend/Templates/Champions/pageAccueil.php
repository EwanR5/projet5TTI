<h1>Liste des champions :</h1>
<?php if(isset($_SESSION['user'])) : ?>
    <a class="buttonHautAccueil" href="/creerEquipe">Créer une équipe</a>
<?php endif ?>
<?php if(isset($_SESSION['user'])) : ?>
    <a class="buttonHautAccueil" href="/modifierEquipe">Modifier une équipe</a>
<?php endif ?>
<?php if(isset($_SESSION['user'])) : ?>
    <a class="buttonHautAccueil" href="/creerChampion">Créer un champion</a>
<?php endif ?>
<?php if(isset($_SESSION['user'])) : ?>
    <a class="buttonHautAccueil" href="/creerObjet">Créer un objet</a>
<?php endif ?>

<div class="container divAllChampions">   
<?php foreach($champions as $champion) : ?>
    <div class="divChampions container ">
        <div class="second hero">
        <img class="hero-profile-img" src="<?= $champion->image ?>" alt="">
        <div class="hero-description-bk"></div>
        <div class="hero-logo">
            <img src="<?= $champion->icone ?>" alt="">
        </div>
        <div class="hero-description">
            <h1><?= $champion->championNom ?></h1>
        </div>
        <div  class="hero-date">
            <h2><?= $champion->RoleNom ?></h2>
        </div>
        <div class="">
            <a class="hero-btn" href="voirChampions?championId=<?= $champion->championId ?>">En savoir plus</a>
        </div>
        </div>
    </div>
<?php endforeach ?>
</div>
