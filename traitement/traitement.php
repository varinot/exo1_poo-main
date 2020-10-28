<?php
//var_dump( $_POST);
require ('../modèle/classeélève.php');
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$age = $_POST['age'];
$numsecu = $_POST['numsecu'];
$adresse = $_POST['adresse'];
$contact = $_POST['contact'];
$Eleve = new Eleves($nom, $prenom, $age, $numsecu, $adresse, $contact);

require ('../vuerésultat.php');
?> 