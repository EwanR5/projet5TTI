<h1>Vos Équipes</h1>
<?php foreach($equipes as $equipe) : ?>
    <h2><?= $equipe->equipeNom ?></h2>
    <div>
        <a href="voirEquipe?equipeId=<?= $equipe->equipeId?>">Voir équipe</a>
    </div>
    <div>
        <a href="modifierEquipe?equipeId=<?= $equipe->equipeId?>">Modifier equipe</a>
    </div>
    <div>
        <a href="supprimerEquipe?equipeId=<?= $equipe->equipeId?>">Supprimer votre équipe</a>
    </div>
<?php endforeach ?>