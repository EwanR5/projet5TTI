<form method="post" action="">
<fieldset>
<legend>Création de l'objet</legend>
    <div>
        <label for="nom"> Entrez le nom de l'objet : </label>
        <input name="nom" type="text" id="nom">
        <?php if(isset($messageErrorLogin["nom"])) : ?><p> <?= $messageErrorLogin["nom"] ?> </p> <?php endif ?>
    </div>
    <div>
        <label for="rarete"> Sélectionnez sa rareté : </label>
        <select name="rarete" id="rarete">
            <option value="">--Rarete--</option>
            <?php foreach($objets as $objet) : ?>
                <option value="<?= $objet->objetRarete ?>"><?= $objet->objetNom ?></option>
            <?php endforeach ?>
            </option>
        </select>
        <?php if(isset($messageErrorLogin["nom"])) : ?><p> <?= $messageErrorLogin["nom"] ?> </p> <?php endif ?>
    </div>
</fieldset>
<fieldset>
    <legend>Bouton Création</legend>
    <button name="btnEnvoi" value="envoyer">Créer</button>
</fieldset>