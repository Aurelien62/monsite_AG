<?php
require_once ('settings/settings.php'); //afficheur d'erreur           
require_once ('includes/connection.inc.php'); //connection a la base de données           
require_once ('libs/Smarty.class.php');

$smarty = new Smarty();

if (isset($_POST['connexion'])) {

    $email = addcslashes($_POST['email'], "'\_*%"); //affectation de la zone de texte a une variable pour la reutiliser
    $mdp = addcslashes($_POST['mdp'], "'\_*%"); //addclashes permet d'eviter les injections sql en refusant les caracteres precisé

    if (!empty($email) && !empty($mdp)) { //si les champs email, et mot de passe ne sont pas vide on execute la requete
        $sql = "SELECT * FROM utilisateur WHERE email='$email' AND mdp='$mdp'"; //affiche l'utilisateur a qui appartient l'email et le mot de passe entré
        $exe = mysql_query($sql); //execution de la requete
        $resultat = mysql_fetch_array($exe); //affectation des resultats dans un tableau
        if ($resultat) {
            $sid = md5($email . time());
            $sql = "UPDATE utilisateur SET sid='$sid' WHERE email='$email' AND mdp='$mdp'"; //modifie le sid de l'utilisateur
            $exe = mysql_query($sql); //execution de la requete
            setcookie("sid", $sid, time() + 3600); //affectation du cookie
            $smarty->assign('resultat', $resultat); //affectation variable smarty
            header('location:index.php'); //redirige vers l'index
        } else {
            session_start(); //debut des sessions
            ?>
            <script>
                alert("<?php echo 'Erreur dans vos identifiants!' ?>"); //affectation d'un message de session pour la creation de l'utilisateur
                window.location.replace("http://localhost/monsite/article.php");
            </script>
            <?php
        }
    }
} else {


    include_once ('includes/header.inc.php'); //affichage du header     


    if (isset($_SESSION['notification'])) {//affichage des sessions
        echo ($_SESSION['notification']);
        unset($_SESSION['notification']);
    }
}
$smarty->display("template/connexion.tpl"); //chemin d'accès au fichier tpl
include_once ('includes/menu.inc.php'); //affichage du menu
include_once ('includes/footer.inc.php'); //affichage du footer
?>