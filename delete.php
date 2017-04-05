<?php

require('connect.php');

$res = $bdd->prepare("DELETE FROM membre WHERE id = :id ");
$res->bindValue(':id',$_GET['id']);
$res->execute();
echo 'bien joué mec';
