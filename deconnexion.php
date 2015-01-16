<?php
header("Refresh: 5;URL=index.php"); //redirige vers l'index après 5 secondes
include_once ('settings/settings.php');
require_once ('includes/connection.inc.php'); //connection a la base de données
include_once ('includes/header.inc.php'); //affichage du header
setcookie("sid", $sid, time() + 0); //initialise le sid a 0
echo "Vous avez bien été déconnecté, vous allez être redirigé vers l'index dans 5 secondes,<br/> si la redirection ne marche pas, veuillez cliquer sur ce "
?><a href="index.php">lien</a><?php
// affiche un message pour avertir l'utilisateur

include_once ('includes/menu.inc.php'); //affichage du menu
include_once ('includes/footer.inc.php'); //affichage du footer