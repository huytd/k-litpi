<?php /* Smarty version Smarty-3.0.7, created on 2012-09-03 13:45:58
         compiled from "templates/default\_controller/site/maincontent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2803050445226cc3e78-79562961%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20f8d5d696862f7dba84bf0989e6a3010be50375' => 
    array (
      0 => 'templates/default\\_controller/site/maincontent.tpl',
      1 => 1343853204,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2803050445226cc3e78-79562961',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_sslashes')) include 'C:\xampp\htdocs\litpi\libs\smarty\plugins\modifier.sslashes.php';
?><?php echo (($tmp = @smarty_modifier_sslashes($_smarty_tpl->getVariable('contents')->value))===null||$tmp==='' ? "No contents" : $tmp);?>
