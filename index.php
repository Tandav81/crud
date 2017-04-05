<?php
$id = "";
$nom = "";
$prenom = "";
$age = "";
$button = "insert";


if(isset($_POST['update'])) {
   $id =  $_POST['id'];
   $nom =  $_POST['nom'];
   $prenom =  $_POST['prenom'];
   $age =  $_POST['age'];
   $button = 'update';
}

?>
<form action="create.php" method="post">
    <input type="text" name="nom" value="<?= $nom ?>">
    <input type="text" name="prenom" value="<?= $prenom ?>">
    <input type="text" name="age" value="<?= $age ?>">
    <input type="hidden" name="id" value="<?= $id ?>">
    <button type="submit" name="<?= $button ?>" value="go">envoyer</button>


</form>


