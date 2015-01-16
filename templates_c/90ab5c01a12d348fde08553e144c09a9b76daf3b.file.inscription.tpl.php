<?php /* Smarty version Smarty-3.1.15, created on 2015-01-16 20:38:43
         compiled from "template\inscription.tpl" */ ?>
<?php /*%%SmartyHeaderCode:251295492e4986fe525-04797867%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90ab5c01a12d348fde08553e144c09a9b76daf3b' => 
    array (
      0 => 'template\\inscription.tpl',
      1 => 1421432957,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '251295492e4986fe525-04797867',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5492e49877ca53_92270817',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5492e49877ca53_92270817')) {function content_5492e49877ca53_92270817($_smarty_tpl) {?><script type="text/javascript" src="./includes/Verif.js"></script>

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
</div><?php }} ?>
