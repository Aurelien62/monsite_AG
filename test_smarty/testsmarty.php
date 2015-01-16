<?php

include_once 'settings/settings.php';
require_once 'libs/Smarty.class.php';

$smarty = new Smarty();//création d'un objet Smarty
$texteSmarty = "<p>Ma premiere page smarty";

$smarty->assign("texteSmarty", $texteSmarty);//affectation de la variable $texteSmarty a une variable Smarty, la variable Smarty est celle entre double quote
$smarty->display("test-smarty.tpl"); //chemin d'accès au fichier tpl
?>