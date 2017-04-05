<?php

require('connect.php');

$res = $bdd->query("SELECT * FROM membre");
//$res->bindValue(':table','');
//$res->execute();


while ($resultat = $res->fetch()) {
    ?>

    je m'appelle <?= $resultat['nom']; ?>
    <form method="get" action="delete.php">
        <input type="hidden" name="id" value="<?= $resultat['id'] ?>">
        <input type="submit" name="delete" value="delete">
    </form>

    <form method="post" action="index.php">
        <input type="submit" name="update" value="update">
        <input type="hidden" name="id" value="<?= $resultat['id'] ?>">
        <input type="hidden" name="nom" value="<?= $resultat['nom'] ?>">
        <input type="hidden" name="prenom" value="<?= $resultat['prenom'] ?>">
        <input type="hidden" name="age" value="<?= $resultat['age'] ?>">
    </form>

    <?php
//    var_dump($resultat);
};
