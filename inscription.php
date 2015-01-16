<?php

require_once ('settings/settings.php'); //afficheur d'erreur       
require_once ('includes/connection.inc.php'); //connection a la base de données      
require_once ('libs/Smarty.class.php');
include_once ('includes/header.inc.php'); //affichage du header

$smarty = new Smarty();
$smarty->display("template/inscription.tpl");
if (isset($_POST['inscrire'])) {
    //print_r($_POST);
    $nom = addcslashes($_POST['nom'], "'\_*%"); //affectattion de la zone de texte a une variable pour la reutiliser addclashes permet d'eviter les injections sql
    $prenom = addcslashes($_POST['prenom'], "'\_*%"); //affectattion de la zone de texte a une variable pour la reutiliser addclashes permet d'eviter les injections sql
    $email = addcslashes($_POST['email'], "'\_*%"); //affectattion de la zone de texte a une variable pour la reutiliser addclashes permet d'eviter les injections sql
    $mdp = addcslashes($_POST['mdp'], "'\_*%"); //affectattion de la zone de texte a une variable pour la reutiliser addclashes permet d'eviter les injections sql

    if (!empty($nom) && !empty($prenom) && !empty($mdp)) {//si les champs nom, prenom, et mot de passe ne sont pas vide on execute la requete
        if (isset($_POST['inscrire'])) {
            $sql = "INSERT INTO utilisateur(nom, prenom, email, mdp) VALUES ('$nom', '$prenom', '$email', '$mdp')";
            mysql_query($sql); //execution de la requete
            session_start(); //debut des sessions
            $_SESSION['notification'] = "L'utilisateur $prenom $nom a bien été créé"; //affectation d'un message de session pour la creation de l'utilisateur
            header('location:index.php');
        }
    }
}
include_once ('includes/menu.inc.php'); //affichage du menu
include_once ('includes/footer.inc.php'); //affichage du footer