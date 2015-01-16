<div class="row"> <!-- mettre le code à ajouté ici -->

    <div class="span8">
        <!-- notifications -->

        <center><label for="titre"><h2>Veuillez renseigner vos identifiants :</h2><br><br></label>

            <form action="connexion.php" method="post" enctype="multipart/form-data" id="form_connexion" name="form_connexion">

                <div class="clearfix">
                    <!--<input type='hidden' name='id' value=""/>-->
                    <label for="titre">Adresse email :</label>
                    <div class ="input">
                        <input type="text" name="email" id="email" value="" onblur="verifMail(this);">
                    </div>
                </div>
                <br>
                <div class="clearfix">
                    <label for="texte">Mot de passe :</label>
                    <div class ="input">
                        <input type="password" name="mdp" id="mdp" value="" onblur="verifPswdCon(this);">
                    </div>
                </div>
                <div class="form-actions">
                    <input type="submit" name="connexion" value="Me connecter" class="btn btn-large btn-primary"> 
                </div>

            </form>
        </center>
    </div>
</div>

