<?php
include_once ('settings/settings.php'); //accès au fichier setting
require_once ('includes/connection.inc.php'); //connection a la base de données
include_once ('includes/header.inc.php'); //affichage du header

if (isset($_POST['email']) and isset($_POST['sujet']) and isset($_POST['message'])) {
    $destinataire = 'gence.aurelien@wanadoo.fr'; //destinataire du mail
    $email = htmlentities($_POST['email']); //affectation des caractere speciaux 
    if (preg_match('#^(([a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+\.?)*[a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+)@(([a-z0-9-_]+\.?)*[a-z0-9-_]+)\.[a-z]{2,}$#i', str_replace('&amp;', '&', $email))) {//fonction de remplacement de caractere sepciaux
        $sujet = 'Contact: ' . stripslashes($_POST['sujet']); //initialisation du sujet
        $message = stripslashes($_POST['message']); //initialisation du corps du message
        $headers = "From: <" . $email . ">\n"; //initialisation du destinataire
        $headers .= "Reply-To: " . $email . "\n"; //initialisation de la reponse
        $headers .= "Content-Type: text/plain; charset=\"iso-8859-1\""; //declaration du charset
        if (mail($destinataire, $sujet, $message, $headers)) {//si tout a ete rempli, le mail est envoyé
            header("Refresh: 5;URL=index.php");
            echo "<strong>Votre message a bien &eacute;t&eacute; envoy&eacute; , vous allez être redirigé vers l'index dans 5 secondes,<br/> si la redirection ne marche pas, veuillez cliquer sur ce </strong>";
            ?> <a href="index.php">lien</a> <?php
        } else {
            echo "<strong style=\"color:#ff0000;\">Une erreur c'est produite lors de l'envois du message.</strong>";
        }
    } else {
        echo "<strong style=\"color:#ff0000;\">L'email que vous avez entr&eacute; est invalide.</strong>";
    }
} else {
    ?>
    <form action="" method="post">
        <fieldset>
            <legend>Formulaire de contact</legend>
            <label for="email" style="display:inline-block;width:100px;"><strong>Votre Email:</strong></label> <input type="text" name="email" id="email" /><br />
            <label for="sujet" style="display:inline-block;width:100px;"><strong>Sujet:</strong></label> <input type="text" name="sujet" id="sujet" /><br />
            <br />
            <br />
            <label for="message"><strong>Message:</strong></label>
            <textarea cols="70" rows="4" name="message" id="message"></textarea><br />
            <input type="submit" value="Envoyer" />
        </fieldset>
    </form>
    <?php
    include_once ('includes/menu.inc.php'); //affichage du menu
    include_once ('includes/footer.inc.php'); //affichage du footer
}
?>