<?php
require_once 'conbase.php';
$project = new projet();

if(!empty($_POST['lastname']) AND !empty($_POST['firstname']) AND !empty($_POST['email'])AND !empty($_POST['mdp'])){
    $nom = htmlspecialchars($_POST['lastname']); 
    $prenoms = htmlspecialchars($_POST['firstname']); 
    $email = htmlspecialchars($_POST['email']);
    $mdp = htmlspecialchars($_POST['mdp']);

    $project->addUser($nom,$prenoms,$email,$mdp);
}
?>