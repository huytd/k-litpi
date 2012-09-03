<?php /* Smarty version Smarty-3.0.7, created on 2012-09-03 17:37:33
         compiled from "templates/default\_controller/site/helloworld/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22795044886d875761-43837246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c9d4dcc414f36a305ab96e20a62774b78835ddb' => 
    array (
      0 => 'templates/default\\_controller/site/helloworld/index.tpl',
      1 => 1346664241,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22795044886d875761-43837246',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<html>
	<head>
		<title>Hello world from Litpi</title>
	</head>
	<body>
		<h1>Some data stored in Hello World Model</h1><br/>
		String A: <?php echo $_smarty_tpl->getVariable('stringA')->value;?>
<br/>
		String B: <?php echo $_smarty_tpl->getVariable('stringB')->value;?>
<br/>
	</body>
</html>