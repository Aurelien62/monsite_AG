<script type="text/javascript" src="./includes/Verif.js"></script>

<div class="row">
    <div class="span8">
        <!-- notifications -->

        <!-- contenu -->

        <form action="inscription.php" method="post" enctype="multipart/form-data" id="form_inscription" name="form_inscription">

            <div class="clearfix">
                <!--<input type='hidden' name='id' value=""/>-->
                <label for="titre">Nom :</label>
                <div class ="input">
                    <input type="text" name="nom" id="nom" value="" onblur="verifNomInsc(this);">
                </div>
            </div>
            <br>
            <div class="clearfix">
                <label for="texte">Prénom :</label>
                <div class ="input">
                    <input type="text" name="prenom" id="prenom" value="" onblur="verifPrenomInsc(this);">
                </div>
            </div>
            <br>
            <div class="clearfix">
                <label for="image">Email :</label>
                <input type="text" name="email" id="email" value="" onblur="verifMailInsc(this);">
            </div>
            <br>
            <div class="clearfix">
                <label for="image">Mot de passe :</label>
                <div class ="input">
                    <input type="password" name="mdp" id="mdp" value="" onblur="verifPswdInsc(this);">
                </div>
            </div>
            <br>
            <div class="form-actions">
                <input type="submit" name="inscrire" value="M'inscrire" class="btn btn-large btn-primary"> 
            </div>

        </form>

    </div>
</div>