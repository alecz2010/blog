<?php
/* Smarty version 3.1.30, created on 2016-10-07 09:13:34
  from "C:\xampp\htdocs\blog\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57f74b1ee6ae77_65211893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1eac83e03beb7a56b1926c55d86520da625750d0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\blog\\templates\\index.tpl',
      1 => 1475824398,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57f74b1ee6ae77_65211893 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once 'C:\\xampp\\htdocs\\blog\\include\\libs\\plugins\\function.cycle.php';
?>
<table>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['names']->value, 'name');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value) {
?>
        <tr bgcolor="<?php echo smarty_function_cycle(array('values'=>"#eee,#ddd"),$_smarty_tpl);?>
"><td><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</td></tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>

<table>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
        <tr bgcolor="<?php echo smarty_function_cycle(array('values'=>"#aaa, #bbb"),$_smarty_tpl);?>
"><td><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['phone'];?>
</td></tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table><?php }
}
