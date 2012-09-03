<?php /* Smarty version Smarty-3.0.7, created on 2012-09-03 13:45:49
         compiled from "templates/default\_controller/admin/index/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:189405044521d48d5d0-32815492%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9054cf327db98bcf93f15d108d281a0970eb59f' => 
    array (
      0 => 'templates/default\\_controller/admin/index/index.tpl',
      1 => 1343853204,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189405044521d48d5d0-32815492',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'C:\xampp\htdocs\litpi\libs\smarty\plugins\modifier.date_format.php';
?><div class="page-header"><h1>Dashboard</h1></div>

<h3>System Information</h3>
<br />
	
		<table class="table table-striped">
			<tr>
				<td width="200" class="td_right">Server IP :</td>
				<td><?php echo $_smarty_tpl->getVariable('formData')->value['fserverip'];?>
</td>
			</tr>
			<?php if ($_smarty_tpl->getVariable('me')->value->groupid==@GROUPID_ADMIN){?>
			<tr>
				<td class="td_right">Server Name :</td>
				<td><?php echo $_smarty_tpl->getVariable('formData')->value['fserver'];?>
</td>
			</tr>
			<tr>
				<td class="td_right">PHP Version :</td>
				<td><?php echo $_smarty_tpl->getVariable('formData')->value['fphp'];?>
</td>
			</tr>
			
			<tr>
				<td class="td_right">Server Time :</td>
				<td><?php echo smarty_modifier_date_format(time(),$_smarty_tpl->getVariable('lang')->value['default']['dateFormatTimeSmarty']);?>
</td>
			</tr>
			<?php }?>
		</table>





<div class="clear"></div>