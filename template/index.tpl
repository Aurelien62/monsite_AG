<div class="row"> <!-- mettre le code à ajouté ici -->
    <div class="span8">
        <center>
            {foreach from=$resultat item=i}
            <h2> {$i['titre']}<br/> </h2><!--affichage du titre-->
            <img src="img/{$i['id']}.jpg"  height="125" width="125"><br/><br/>
            <p> {$i['texte']} </p><br/><!--affichage du texte-->
            <span>article publié le : {$i['date_fr']}</span><br/><br/><!--affiche la date de publication-->
            {if ($connected == TRUE)}
                <a href="article.php?id={$i['id']}"><input type="submit" name="modifier" value="Modifier l'article" class="btn btn-mini btn-primary"></a>
                <a href="suppression.php?id={$i['id']}"><input type="submit" name="supprimer" value="Supprimer l'article" class="btn btn-mini btn-primary"></a>
                {/if}
            {/foreach}
            <div class="pagination">
                {for $j=1 to $tab_page.0}
                    <a href=\monsite\index.php?p={$j}>Page {$j}</a>
                {/for}
            </div>
        </center>
    </div>
</div>
