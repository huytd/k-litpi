<?php /* Smarty version Smarty-3.0.7, created on 2012-09-03 13:45:49
         compiled from "templates/default\_controller/admin/maincontent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18035044521d5e88e5-81219791%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f5e98b65498e3d44f64b285f0e7064d66a1c06f' => 
    array (
      0 => 'templates/default\\_controller/admin/maincontent.tpl',
      1 => 1343853204,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18035044521d5e88e5-81219791',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_sslashes')) include 'C:\xampp\htdocs\litpi\libs\smarty\plugins\modifier.sslashes.php';
?>
<?php echo (($tmp = @smarty_modifier_sslashes($_smarty_tpl->getVariable('contents')->value))===null||$tmp==='' ? "No contents" : $tmp);?>

