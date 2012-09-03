<?php /* Smarty version Smarty-3.0.7, created on 2012-09-03 13:45:58
         compiled from "templates/default\_controller/site/notpermission/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1924450445226edbad3-17751742%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '890dd0ff182e310f24207604a4b361ed4e780bab' => 
    array (
      0 => 'templates/default\\_controller/site/notpermission/index.tpl',
      1 => 1343853204,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1924450445226edbad3-17751742',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

	<div id="homepage">
	<?php $_template = new Smarty_Internal_Template("notify.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('notifyWarning',$_smarty_tpl->getVariable('lang')->value['global']['notpermissiontitle']); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
	</div>
	
	<div style="padding:20px; line-height:2;">
	<h2><em><?php echo $_smarty_tpl->getVariable('lang')->value['controller']['headline'];?>
</em></h2>
	<p><?php echo $_smarty_tpl->getVariable('lang')->value['controller']['text1'];?>
</p>
	<p><?php echo $_smarty_tpl->getVariable('lang')->value['controller']['text2'];?>
</p>
	<p><?php echo $_smarty_tpl->getVariable('lang')->value['controller']['text3'];?>
</p>
	</div>
