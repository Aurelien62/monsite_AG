<?php

require_once ('settings/settings.php'); //afficheur d'erreur        
require_once ('includes/connection.inc.php'); //connection a la base de données        
require_once ('libs/Smarty.class.php');
include_once ('includes/header.inc.php'); //affichage du header

$smarty = new Smarty();
session_start();

$ArticlePage = 2;
$page_courante = (isset($_GET['p'])) ? $_GET['p'] : 1; // page par defaut, nombre d'article par defaut
$recherche = (isset($_GET['recherche'])) ? $_GET['recherche'] : NULL;

function pagination($ArticlePage, $page_courante, $recherche) { // fonction qui affiche 2 articles par page
    $sql = "SELECT COUNT(id) AS total FROM articles WHERE publie=1"; //compte tous les id enregistrés
    $exe = mysql_query($sql); // execute la requete
    $tab = mysql_fetch_array($exe); // met les resultats dans un tableau
    $nb_art = $tab['total']; // affectation du resultat a une variable
    $total_page = ceil($nb_art / $ArticlePage); // calcule le nombre d'article qui sera affiché

    $index = ($page_courante - 1) * $ArticlePage; // Calcul l'article qui l'index de la page index
    return array($total_page, $index);
}

$tab_page = pagination($ArticlePage, $page_courante, $recherche);

if (isset($_GET['recherche'])) {//si on effectue une recherche
    $recherche = addcslashes($_GET['recherche'], "'\_*%"); //affectattion de la zone de texte a une variable pour la reutiliser addclashes permet d'eviter les injections sql
    $sql = "SELECT id, titre, texte, DATE_FORMAT(date, '%d-%m-%Y') as date_fr FROM articles WHERE publie = 1 AND (titre LIKE '%$recherche%' OR texte LIKE '%$recherche%')"; //on recherche dans la base de données se qui correspond aux mots entrés
} else {
    $sql = "SELECT id, titre, texte, DATE_FORMAT(date, '%d-%m-%Y') as date_fr FROM articles WHERE publie=1 ORDER BY id LIMIT $ArticlePage OFFSET $tab_page[1]"; //si on ne trouve rien, on affiche la page d'accueil
}

$exe = mysql_query($sql); // execution de la requete sql


while ($resultat = mysql_fetch_array($exe)) { //boucle pour l'affichage des resultats
    $res[]=$resultat;
}

$smarty->assign('connected', $connected); //affectation des variables php en varibale smarty
$smarty->assign('resultat', $res); //affectation des variables php en varibale smarty
$smarty->assign('tab_page', $tab_page); //affectation des variables php en varibale smarty
$smarty->display("template/index.tpl"); //affectation des variables php en varibale smarty
    
include_once ('includes/menu.inc.php'); //affichage du menu
include_once ('includes/footer.inc.php'); //affichage du footer