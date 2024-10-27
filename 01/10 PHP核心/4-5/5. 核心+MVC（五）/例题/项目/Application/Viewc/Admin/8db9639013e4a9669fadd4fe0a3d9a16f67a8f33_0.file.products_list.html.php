<?php
/* Smarty version 3.1.32, created on 2019-07-03 15:59:12
  from 'F:\wamp\www\Application\View\Admin\products_list.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d1c6050636574_76986339',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8db9639013e4a9669fadd4fe0a3d9a16f67a8f33' => 
    array (
      0 => 'F:\\wamp\\www\\Application\\View\\Admin\\products_list.html',
      1 => 1562140747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1c6050636574_76986339 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
    <a href="index.php?p=Admin&c=Products&a=add">添加商品</a>
	<table border='1' width='980' bordercolor='#000'>
		<tr>
			<th>编号</th> <th>名称</th> <th>价格</th> <th>修改</th> <th>删除</th>
		</tr>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'rows');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->value) {
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['rows']->value['proID'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['rows']->value['proname'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['rows']->value['proprice'];?>
</td>
			<td><a href="index.php?p=Admin&c=Products&a=edit&proid=<?php echo $_smarty_tpl->tpl_vars['rows']->value['proID'];?>
">修改</a></td>
			<td><a href="javascript:void(0)" onclick="if(confirm('确定要删除吗')){ location.href='index.php?p=Admin&c=Products&a=del&proid=<?php echo $_smarty_tpl->tpl_vars['rows']->value['proID'];?>
'}">删除</a></td>
		</tr>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</table>
</body>
</html><?php }
}
