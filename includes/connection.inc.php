<?php

$bdd = mysql_connect('127.0.0.1', 'Aurelien', '18081993') or die('Connexion impossible : ' . mysql_error()); // connection a la BDD
$connect = mysql_select_db('ag_blog'); // on selectionne la base de donnée
if (isset($_COOKIE["sid"])) {
    $sid = $_COOKIE["sid"];
    $sql = "SELECT * FROM utilisateur WHERE sid='$sid'"; //on cherche l'utilisateur correspondant au sid
    $exe = mysql_query($sql); /* execution de la requete */
    $resultat = mysql_fetch_array($exe); //on affecte le resultat dans un tableau
    $nom = $resultat['nom']; //on affecte le resultat du nom a une variable du meme intitulé
    $prenom = $resultat['prenom']; //on affecte le resultat du prenom a une variable du meme intitulé
    $_SESSION['utilisateur'] = $nom . $prenom; //on renseigne les identifiants de l'utilisateur
    $connected = TRUE; // on passe connected a vrai si on trouve un utilisateur
} else {
    $connected = FALSE; // sinon on le passe a faux
}
?>