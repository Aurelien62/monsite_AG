<?php /* Smarty version Smarty-3.1.15, created on 2015-01-16 21:17:57
         compiled from "template\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:109955492e454d4fe88-88350745%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1330b55f35665f430ce9b8167feebce9b68bc0a' => 
    array (
      0 => 'template\\index.tpl',
      1 => 1421443063,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109955492e454d4fe88-88350745',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5492e454e8acb5_06274572',
  'variables' => 
  array (
    'resultat' => 0,
    'i' => 0,
    'connected' => 0,
    'tab_page' => 0,
    'j' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5492e454e8acb5_06274572')) {function content_5492e454e8acb5_06274572($_smarty_tpl) {?><div class="row"> <!-- mettre le code à ajouté ici -->
    <div class="span8">
        <center>
            <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['resultat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
            <h2> <?php echo $_smarty_tpl->tpl_vars['i']->value['titre'];?>
<br/> </h2><!--affichage du titre-->
            <img src="img/<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
.jpg"  height="125" width="125"><br/><br/>
            <p> <?php echo $_smarty_tpl->tpl_vars['i']->value['texte'];?>
 </p><br/><!--affichage du texte-->
            <span>article publié le : <?php echo $_smarty_tpl->tpl_vars['i']->value['date_fr'];?>
</span><br/><br/><!--affiche la date de publication-->
            <?php if (($_smarty_tpl->tpl_vars['connected']->value==true)) {?>
                <a href="article.php?id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
"><input type="submit" name="modifier" value="Modifier l'article" class="btn btn-mini btn-primary"></a>
                <a href="suppression.php?id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
"><input type="submit" name="supprimer" value="Supprimer l'article" class="btn btn-mini btn-primary"></a>
                <?php }?>
            <?php } ?>
            <div class="pagination">
                <?php $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['j']->step = 1;$_smarty_tpl->tpl_vars['j']->total = (int) ceil(($_smarty_tpl->tpl_vars['j']->step > 0 ? $_smarty_tpl->tpl_vars['tab_page']->value[0]+1 - (1) : 1-($_smarty_tpl->tpl_vars['tab_page']->value[0])+1)/abs($_smarty_tpl->tpl_vars['j']->step));
if ($_smarty_tpl->tpl_vars['j']->total > 0) {
for ($_smarty_tpl->tpl_vars['j']->value = 1, $_smarty_tpl->tpl_vars['j']->iteration = 1;$_smarty_tpl->tpl_vars['j']->iteration <= $_smarty_tpl->tpl_vars['j']->total;$_smarty_tpl->tpl_vars['j']->value += $_smarty_tpl->tpl_vars['j']->step, $_smarty_tpl->tpl_vars['j']->iteration++) {
$_smarty_tpl->tpl_vars['j']->first = $_smarty_tpl->tpl_vars['j']->iteration == 1;$_smarty_tpl->tpl_vars['j']->last = $_smarty_tpl->tpl_vars['j']->iteration == $_smarty_tpl->tpl_vars['j']->total;?>
                    <a href=\monsite\index.php?p=<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
>Page <?php echo $_smarty_tpl->tpl_vars['j']->value;?>
</a>
                <?php }} ?>
            </div>
        </center>
    </div>
</div>
<?php }} ?>
