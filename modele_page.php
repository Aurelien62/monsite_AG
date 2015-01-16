<?php
require_once ('settings/settings.php'); //afficheur d'erreur
require_once ('includes/connection.inc.php'); //connection a la base de données            
require_once ('libs/Smarty.class.php');
include_once ('includes/header.inc.php'); //affichage du header
?>


<div class="row"> <!-- mettre le code à ajouté ici -->

    <div class="span8">
        <!-- notifications -->

        <!-- contenu -->

        Hello world ! How are you ?

    </div>

    <?php
    include_once ('includes/menu.inc.php'); //affichage du menu

    include_once ('includes/footer.inc.php'); //affichage du footer
    ?>
