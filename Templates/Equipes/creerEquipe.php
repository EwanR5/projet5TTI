<form method="post" action="">
    <fieldset>
    <legend>Création d'Équipe</legend>
        <div>
            <label for="nom"> Entrez le nom de l'équipe : </label>
            <input name="nom" type="text" id="nom">
            <?php if(isset($messageErrorLogin["nom"])) : ?><p> <?= $messageErrorLogin["nom"] ?> </p> <?php endif ?>
        </div>
        <div>
            <label for="top"> Choisissez votre champion Top : </label>
            <select name="top" id="top">
                <option value="">--Champion--</option>
                <?php foreach($champions as $champion) : ?>
                    <option value="<?= $champion->championId ?>"><?= $champion->championNom ?></option>
                <?php endforeach ?>
                </option>
            </select>
            <?php if(isset($messageErrorLogin["nom"])) : ?><p> <?= $messageErrorLogin["nom"] ?> </p> <?php endif ?>
        </div>
        <div>
            <label for="jungle"> Choisissez votre champion Jungle : </label>
            <select name="jungle" id="jungle">
                <option value="">--Champion--</option>
                <?php foreach($champions as $champion) : ?>
                    <option value="<?= $champion->championId ?>"><?= $champion->championNom ?></option>
                <?php endforeach ?>
                </option>
            </select>
            <?php if(isset($messageErrorLogin["nom"])) : ?><p> <?= $messageErrorLogin["nom"] ?> </p> <?php endif ?>
        </div>
        <div>
            <label for="mid"> Choisissez votre champion Mid : </label>
            <select name="mid" id="mid">
                <option value="">--Champion--</option>
                <?php foreach($champions as $champion) : ?>
                    <option value="<?= $champion->championId ?>"><?= $champion->championNom ?></option>
                <?php endforeach ?>
                </option>
            </select>
            <?php if(isset($messageErrorLogin["nom"])) : ?><p> <?= $messageErrorLogin["nom"] ?> </p> <?php endif ?>
        </div>
        <div>
            <label for="adc"> Choisissez votre champion Adc : </label>
            <select name="adc" id="adc">
                <option value="">--Champion--</option>
                <?php foreach($champions as $champion) : ?>
                    <option value="<?= $champion->championId ?>"><?= $champion->championNom ?></option>
                <?php endforeach ?>
                </option>
            </select>
            <?php if(isset($messageErrorLogin["nom"])) : ?><p> <?= $messageErrorLogin["nom"] ?> </p> <?php endif ?>
        </div>
        <div>
            <label for="support"> Choisissez votre champion Support : </label>
            <select name="support" id="support">
                <option value="">--Champion--</option>
                <?php foreach($champions as $champion) : ?>
                    <option value="<?= $champion->championId ?>"><?= $champion->championNom ?></option>
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
</form>