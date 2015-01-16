<?php /* Smarty version Smarty-3.1.15, created on 2015-01-16 18:38:37
         compiled from "template\connexion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143685492e4a4cf3c48-11618954%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8347313a0ac81bc86e30ccdf9d60f6e2871abcc5' => 
    array (
      0 => 'template\\connexion.tpl',
      1 => 1421433378,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143685492e4a4cf3c48-11618954',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5492e4a4d7b269_47272045',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5492e4a4d7b269_47272045')) {function content_5492e4a4d7b269_47272045($_smarty_tpl) {?><div class="row"> <!-- mettre le code à ajouté ici -->

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

<?php }} ?>
