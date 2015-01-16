<footer>
    <?php
    if (file_exists('compteur_visites.txt')) {// si le fichier compteur_visites.txt existe
        $compteur_f = fopen('compteur_visites.txt', 'r+'); //on l'ouvre et on l'incremente
        $compte = fgets($compteur_f);
    } else {
        $compteur_f = fopen('compteur_visites.txt', 'a+'); //sinon on crée le fichier, 
        $compte = 0; //et on l'increment a partir de 0
    }
    if (!isset($_SESSION['compteur_de_visite'])) {// on crée une session pour que l'incrementation n'est lieu qu'en cas de deconnexion
        $_SESSION['compteur_de_visite'] = 'visite';
        $compte++; // on incremente en cas de deconnexion
        fseek($compteur_f, 0);
        fputs($compteur_f, $compte);
    }
    fclose($compteur_f);
    echo '<center><strong>' . $compte . '</strong> VISITE(S)</center>'; // on affiche le nombre de visites
    ?>
    <center><p>&copy; ULCO 2014 - 2015</p></center>
</footer>

</body>
</div>
</html>