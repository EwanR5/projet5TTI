<form method="post" action="">
<fieldset>
<legend>Création du champion</legend>
    <div>
        <label for="nom"> Entrez le nom du champion : </label>
        <input name="nom" type="text" id="nom">
        <?php if(isset($messageErrorLogin["nom"])) : ?><p> <?= $messageErrorLogin["nom"] ?> </p> <?php endif ?>
    </div>
    <div>
        <label for="role"> Choisissez sa classe principale : </label>
        <select name="role" id="role">
            <option value="">--Role--</option>
            <?php foreach($champions as $champion) : ?>
                <option value="<?= $champion->championRole ?>"><?= $champion->championNom ?></option>
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