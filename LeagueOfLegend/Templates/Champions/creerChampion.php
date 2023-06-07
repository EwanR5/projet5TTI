<form method="post" action="">
<fieldset class ="container justify-content-center align-items-center">
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
            <?php foreach($roles as $role) : ?>
                <option value="<?= $role->RoleId ?>"><?= $role->RoleNom ?></option>
            <?php endforeach ?>
            </option>
        </select>
        <?php if(isset($messageErrorLogin["nom"])) : ?><p> <?= $messageErrorLogin["nom"] ?> </p> <?php endif ?>
    </div>
    <div>
        <label for="role"> Entrez sa description : </label>
        <input name="description" type="text" id="description">
    </div>
    <div>
        <label for="role"> Donnez lui son image : </label>
        <input name="image" type="text" id="image">
    </div>
    <div>
        <label for="role"> Entrez le lien externe : </label>
        <input name="lien" type="text" id="lien">
    </div>
    <div>
        <label for="role"> Donnez lui son icone : </label>
        <input name="icone" type="text" id="icone">
    </div>
</fieldset>
<fieldset>
    <legend>Bouton Création</legend>
    <button name="btnEnvoi" value="envoyer" class = "align-items-center bouton">Créer</button>
</fieldset>