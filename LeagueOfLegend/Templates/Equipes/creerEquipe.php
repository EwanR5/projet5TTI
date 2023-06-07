<form method="post" action="">
    <fieldset class ="container justify-content-center align-items-center">
    <legend><?= isset($_GET['equipeId']) ? 'Modification' : 'Création' ?> d'Équipe</legend>
        <div>
            <label for="nom"> Entrez le nom de l'équipe : </label>
            <input name="nom" type="text" id="nom" <?php if ((str_contains($uri,"modifierEquipe?equipeId="))) : ?>value="<?= $equipes->equipeNom ?>"<?php endif ?>>
            <?php if(isset($messageErrorLogin["nom"])) : ?><p> <?= $messageErrorLogin["nom"] ?> </p> <?php endif ?>
        </div>
        <div>
            <label for="top"> Choisissez votre champion Top : </label>
            <select name="top" id="top">
                <option value="<?= $equipes->top ?? '' ?>"><?php if ((str_contains($uri,"modifierEquipe?equipeId="))) : ?><?= $equipes->topName ?><?php else : ?>--Champion--<?php endif ?></option>
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
                <option value="<?= $equipes->jungle ?? '' ?>"><?php if ((str_contains($uri,"modifierEquipe?equipeId="))) : ?><?= $equipes->jungleName ?><?php else : ?>--Champion--<?php endif ?></option>
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
                <option value="<?= $equipes->mid ?? '' ?>"><?php if ((str_contains($uri,"modifierEquipe?equipeId="))) : ?><?= $equipes->midName ?><?php else : ?>--Champion--<?php endif ?></option>
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
                <option value="<?= $equipes->adc ?? '' ?>"><?php if ((str_contains($uri,"modifierEquipe?equipeId="))) : ?><?= $equipes->adcName ?><?php else : ?>--Champion--<?php endif ?></option>
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
                <option value="<?= $equipes->support ?? '' ?>"><?php if ((str_contains($uri,"modifierEquipe?equipeId="))) : ?><?= $equipes->supportName ?><?php else : ?>--Champion--<?php endif ?></option>
                <?php foreach($champions as $champion) : ?>
                    <option value="<?= $champion->championId ?>"><?= $champion->championNom ?></option>
                <?php endforeach ?>
                </option>
            </select>
            <?php if(isset($messageErrorLogin["nom"])) : ?><p> <?= $messageErrorLogin["nom"] ?> </p> <?php endif ?>
        </div>
    </fieldset>
    <fieldset>
        <legend> Bouton <?= isset($_GET['equipeId']) ? 'Modification' : 'Création' ?></legend>
        <button name="btnEnvoi" value="envoyer" class = "align-items-center bouton"><?php if ((str_contains($uri,"modifierEquipe?equipeId="))) : ?>Modifier l'équipe<?php else : ?>Créer<?php endif ?></button>
    </fieldset>
</form>