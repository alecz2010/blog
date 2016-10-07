<?php
/* Smarty version 3.1.30, created on 2016-10-07 08:50:32
  from "C:\xampp\htdocs\blog\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57f745b8627f13_61767673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1eac83e03beb7a56b1926c55d86520da625750d0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\blog\\templates\\index.tpl',
      1 => 1475823031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57f745b8627f13_61767673 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'C:\\xampp\\htdocs\\blog\\include\\libs\\plugins\\function.html_options.php';
?>
<select name=user>
    <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['id']->value,'output'=>$_smarty_tpl->tpl_vars['names']->value,'selected'=>"5"),$_smarty_tpl);?>

</select><?php }
}
