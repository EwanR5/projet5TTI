<div class="containerLeChampion">
    <img src="<?= $champion->image ?>" alt="">
    <div class="text">
        <h1><?= $champion->championNom ?></h1>
        <p><?= $champion->description ?></p>
        <p><a href="https://www.leagueoflegends.com/fr-fr/champions/<?= $champion->lien ?>">Pour plus d'informations, cliquez ici </a></p>
    </div>
</div>