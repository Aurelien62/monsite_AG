<?php /* Smarty version Smarty-3.1.15, created on 2015-01-14 19:44:03
         compiled from "template\article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:311505492e4b01b8484-45633370%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c454322435b1cf253ad3b8caa3596c5fbc42df3a' => 
    array (
      0 => 'template\\article.tpl',
      1 => 1421260193,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '311505492e4b01b8484-45633370',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5492e4b02903a8_32192780',
  'variables' => 
  array (
    'resultat' => 0,
    'bouton' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5492e4b02903a8_32192780')) {function content_5492e4b02903a8_32192780($_smarty_tpl) {?><div class="row"> <!-- mettre le code à ajouté ici -->

    <div class="span8">
        <!-- notifications -->

        <!-- contenu -->

        <form action="article.php" method="post" enctype="multipart/form-data" id="form_article" name="form_article">

            <div class="clearfix">
                <input type='hidden' name='id' value="<?php echo $_smarty_tpl->tpl_vars['resultat']->value['id'];?>
"/>
                <label for="titre">Titre :</label>
                <div class ="input">
                    <input type="text" name="titre" id="titre" value="<?php echo $_smarty_tpl->tpl_vars['resultat']->value['titre'];?>
"> <!-- on affecte au chmp titre la valeur renseigné par l'id -->
                </div>
            </div>
            <br>
            <div class="clearfix">
                <label for="texte">Texte :</label>
                <div class ="input">
                    <textarea name="texte" id="texte" value=""><?php echo $_smarty_tpl->tpl_vars['resultat']->value['texte'];?>
</textarea>
                </div>
            </div>
            <br>
            <div class="clearfix">
                <label for="image">Image Actuelle :</label>
                <img src="img/<?php echo $_smarty_tpl->tpl_vars['resultat']->value['id'];?>
.jpg"  height="125" width="125"><br/>
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
                    <input type="checkbox" name="publie" value="1"<?php if ($_smarty_tpl->tpl_vars['resultat']->value['id']!=0) {?><?php }?> checked> Oui 
                </div>
            </div>
            <br><center>
                <div class="form-actions">


                    <input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['bouton']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['bouton']->value;?>
" class="btn btn-large btn-primary"> 
                </div></center>

        </form>

    </div>
</div><?php }} ?>
