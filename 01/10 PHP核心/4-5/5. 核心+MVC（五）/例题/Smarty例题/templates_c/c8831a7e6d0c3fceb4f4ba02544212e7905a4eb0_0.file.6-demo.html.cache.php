<?php
/* Smarty version 3.1.32, created on 2019-07-03 15:00:50
  from 'F:\wamp\www\templates\6-demo.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d1c52a282dc75_95549341',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    'c8831a7e6d0c3fceb4f4ba02544212e7905a4eb0' => 
    array (
      0 => 'F:\\wamp\\www\\templates\\6-demo.html',
      1 => 1562137247,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1c52a282dc75_95549341 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '234985d1c52a270d040_60276373';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php echo time();?>
<br>
<?php echo '/*%%SmartyNocache:234985d1c52a270d040_60276373%%*/<?php echo time();?>
/*/%%SmartyNocache:234985d1c52a270d040_60276373%%*/';?>



	<?php echo '/*%%SmartyNocache:234985d1c52a270d040_60276373%%*/<?php echo time();?>
/*/%%SmartyNocache:234985d1c52a270d040_60276373%%*/';?>




<hr>
<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 5+1 - (1) : 1-(5)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
	<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
：锄禾日当午<br>
<?php }
}
?>



</body>
</html><?php }
}
