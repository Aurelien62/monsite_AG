<?php

require_once ('settings/settings.php'); //afficheur d'erreur       
require_once ('includes/connection.inc.php'); //connection a la base de données  
require_once ('libs/Smarty.class.php');

if ($connected == FALSE) {
    session_start(); //debut des sessions
    $_SESSION['avertissement'] = "Vous devez vous connecter pour pouvoir accéder a cette page"; //affectation d'un message de session pour la creation de l'utilisateur
    header('location:connexion.php');
}

$id = $_GET['id'];

$sql = "DELETE FROM articles WHERE id='$id'"; //requete pour supprimer l'article concerné par l'id
mysql_query($sql);
if (file_exists(dirname(__FILE__) . "/img/$id.jpg")) { //suppression de l'image associé
    unlink(dirname(__FILE__) . "/img/$id.jpg");
}
session_start();
if (!isset($_POST['Supprimer'])) {
    $_SESSION['notification'] = "L'article a bien était supprimé"; //affichage d'un message confirmant la suppression
}
header('location:index.php'); //redirige vers l'index
?>
