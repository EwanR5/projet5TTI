<div class="container">
    <h2 class="equipe-nom"><?= $equipe->equipeNom ?></h2>
</div>
<div>
    <p>top =<?= $equipe->topName ?></p>
    <p>jungle =<?= $equipe->jungleName ?></p>
    <p>mid <?= $equipe->midName ?></p>
    <p>adc =<?= $equipe->adcName ?></p>
    <p>support =<?= $equipe->supportName ?></p>

    <a href="mettreObjet?equipeId=<?= $equipe->equipeId ?>">Associer des objets</a>
</div>