<div class="row"> <!-- mettre le code à ajouté ici -->

    <div class="span8">
        <!-- notifications -->

        <!-- contenu -->

        <form action="article.php" method="post" enctype="multipart/form-data" id="form_article" name="form_article">

            <div class="clearfix">
                <input type='hidden' name='id' value="{$resultat.id}"/>
                <label for="titre">Titre :</label>
                <div class ="input">
                    <input type="text" name="titre" id="titre" value="{$resultat.titre}"> <!-- on affecte au chmp titre la valeur renseigné par l'id -->
                </div>
            </div>
            <br>
            <div class="clearfix">
                <label for="texte">Texte :</label>
                <div class ="input">
                    <textarea name="texte" id="texte" value="">{$resultat.texte}</textarea>
                </div>
            </div>
            <br>
            <div class="clearfix">
                <label for="image">Image Actuelle :</label>
                <img src="img/{$resultat.id}.jpg"  height="125" width="125"><br/>
            </div>
            <br>
            <div class="clearfix">
                <label for="image">Insérer une image :</label>
                <div class ="input">
                    <input type="file" name="image" id="image">
                </div>
            </div>
            <br>
            <div class="clearfix">
                <label for="publie">Publié :</label>
                <div class ="input">
                    <input type="checkbox" name="publie" value="1"{if $resultat.id != 0}{/if} checked> Oui 
                </div>
            </div>
            <br><center>
                <div class="form-actions">


                    <input type="submit" name="{$bouton}" value="{$bouton}" class="btn btn-large btn-primary"> 
                </div></center>

        </form>

    </div>
</div>