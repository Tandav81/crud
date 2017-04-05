<?php

include ('connect.php');
//verification de l'existence du post
//var_dump($_POST);
if(isset($_POST['insert'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
// initialisation de la requete et execution de la requete
    $bdd->exec("INSERT INTO membre(nom, prenom, age) VALUES('$nom', '$prenom', '$age')");

    header('location:index.php');

} elseif (isset($_POST['update'])){
    $req = $bdd->prepare("UPDATE membre SET nom = :nom, prenom = :prenom, age = :age WHERE id = :id");
    $req->bindValue(':nom',$_POST['nom']);
    $req->bindValue(':prenom',$_POST['prenom']);
    $req->bindValue(':age',$_POST['age']);
    $req->bindValue(':id',$_POST['id']);
    $req->execute();
}


