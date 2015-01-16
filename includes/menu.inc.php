</div> <!-- mettre le code à ajouté ici -->
<center>
    <nav class="span4">
        <h3>Menu</h3>
        <form action="index.php" method="get" enctype="multipart/form-data" id="form_recherche">
            <div class="clearfix">
                <div class="input">
                    <input type="text" name="recherche" id="recherche" placeholder="Votre recherche..."/>
                </div>
            </div>
            <div class="form-inline">
                <input type="submit" name="" value="rechercher" class="btn btn-mini btn-primary">
            </div>
        </form>
        <ul>
            <?php if ($connected == TRUE) { //si l'utilisateur est connecté il aura accès au menu ci dessous'?>
                <a href="index.php">Accueil</a><br/>
                <a href="article.php">Rédiger un article</a><br/>
                Utilisateur : <?php echo $nom . " " . $prenom ?>
                <br/>
                <h4>Status : Connecté</h4>
                <a href="deconnexion.php">Me déconnecter</a><br/>
            <?php } else { //si l'utilisateur n'est pas connecté ou pas inscrit, il ne verra que le menu ci-dessous ?>
                <a href="index.php">Accueil</a><br/>
                <a href="inscription.php">Inscription</a><br/>
                <a href="connexion.php">Connexion</a><br/>
                <a href="contact.php">Contact</a><br/>
            <?php } ?>
        </ul>
    </nav>
</center>
</div>
</div>