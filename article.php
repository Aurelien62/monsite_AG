<?php
require_once ('settings/settings.php'); //afficheur d'erreur        
require_once ('includes/connection.inc.php'); //connection a la base de données        
require_once ('libs/Smarty.class.php');

$smarty = new Smarty();

if ($connected == FALSE) {
    session_start(); //debut des sessions
    $_SESSION['avertissement'] = "Vous devez vous connecter pour pouvoir accéder a cette page"; //affectation d'un message de session pour la creation de l'utilisateur
    echo ($_SESSION['notification']);
    header('location:connexion.php');
}


if (isset($_POST['Modifier']) OR isset($_POST['Ajouter'])) {
    //print_r($_POST);
    $titre = $_POST['titre']; //affectattion de la zone de texte a une variable pour la reutiliser
    $texte = $_POST['texte']; //affectattion de la zone de texte a une variable pour la reutiliser
    $date = date('Y-m-d'); // declaration de la date
    $publie = (isset($_POST['publie'])) ? $_POST['publie'] : '0'; //affectation par defaut à la variable publie si non coché
    $id = $_POST['id']; //affectattion de la zone de texte a une variable pour la reutiliser

    if (!empty($titre) && !empty($texte)) {
        if (isset($_POST['Ajouter'])) {// si on clique sur ajouter
            $sql = "INSERT INTO articles(titre, texte, date, publie) VALUES ('$titre', '$texte', '$date', $publie)"; //requete d'insertion dans la base de donnée
        } else {
            $sql = "UPDATE articles SET titre = '$titre', texte = '$texte', date='$date', publie='$publie' WHERE id = '$id'"; //requete de modification dans la base de donnée
        }

        if (!empty($_POST['image'])) {
            $erreur_img = $_FILES['image']['error']; //création d'un message d'erreur concernant l'image
        } else {
            $erreur_img = "";
        }

        $resultat = mysql_query($sql); //execution de la requete

        if (empty($id)) {//si id est vide
            $id = mysql_insert_id();
            move_uploaded_file($_FILES['image']['tmp_name'], dirname(__FILE__) . "/img/$id.jpg"); //enregistre l'image selectionné dans le dossier du serveur
        } else {// sinon on utilise l'id existant
            move_uploaded_file($_FILES['image']['tmp_name'], dirname(__FILE__) . "/img/$id.jpg"); //enregistre l'image selectionné dans le dossier du serveur
        }
        session_start();
        if (isset($_POST['Modifier'])) {
            ?>
            <script>
                alert("<?php echo 'L\'article a bien été mis à jour ' ?>");//avertit l'utilisateur que l'article a ete cree
                window.location.replace("http://localhost/monsite/index.php");// redirige vers l'index
            </script><!--fenetre d'avertissement lorsque les champs titre et texte sont vide-->  
            <?php
        } else if (isset($_POST['Ajouter'])) {
            ?>
            <script>
                alert("<?php echo 'L\'article a bien été créé ' ?>");//avertit l'utilisateur que l'article a ete modifie
                window.location.replace("http://localhost/monsite/index.php");// redirige vers l'index
            </script><!--fenetre d'avertissement lorsque les champs titre et texte sont vide-->  
            <?php
        }
        //header('location:index.php'); //redirection vers la page index.php
        //$id = $insert_id || $id = mysql_insert_id();


        if ($erreur_img == 0) {//Si erreur il redirige vers l page d'article
            move_uploaded_file($_FILES['image']['tmp_name'], dirname(__FILE__) . "/img/$id.jpg"); //enregistre l'image selectionné dans le dossier du serveur
        } else {
            echo "attention";
        }
    } else {
        ?>
        <script>
            alert("<?php echo 'Les champs titre et texte ne peuvent etre vide !' ?>");
            window.location.replace("http://localhost/monsite/article.php");
        </script><!--fenetre d'avertissement lorsque les champs titre et texte sont vide-->  
        <?php
    }
} else {

    $resultat = array(//tableau d'affectation a nul des variable pour la creation d'un article
        "id" => NULL,
        "titre" => NULL,
        "texte" => NULL,
        "date" => NULL,
        "publie" => NULL
    );


    if (isset($_GET['id'])) {
        $id = $_GET['id']; // affectation de l'id
        $sql = "SELECT id, titre, texte, publie FROM articles WHERE id='$id'"; //requete qui affiche les articles de la Bdd qui sont marqué comme publié
        $exe = mysql_query($sql);
        $resultat = mysql_fetch_array($exe); //boucle pour l'affichage des resultats
        extract($resultat);
    }

    $bouton = (isset($_GET['id'])) ? 'Modifier' : 'Ajouter'; //affectation par defaut a la variable publie si non coché

    include_once ('includes/header.inc.php'); //affichage du header  
    $smarty->assign('bouton', $bouton); //affectation des valeurs smarty
    $smarty->assign('resultat', $resultat); //affectation des valeurs smarty
    $smarty->display("template/article.tpl"); //affectation des valeurs smarty

    include_once ('includes/menu.inc.php'); //affichage du menu
    include_once ('includes/footer.inc.php'); //affichage du footer
}