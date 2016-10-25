<?php
/* Smarty version 3.1.30, created on 2016-10-25 14:57:28
  from "C:\xampp\htdocs\blog\templates\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580f56b8f04b52_10293375',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8cbbbf12db3ffb7ff2f363e4c60ddfd1225c9b7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\blog\\templates\\login.tpl',
      1 => 1477400248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_580f56b8f04b52_10293375 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form class="login"><div class="form-group"><input type="text" name="input[username]" placeholder="Username" class="form-control" id="usr"></div><div class="form-group"><input type="password" name="input[password]" placeholder="Password" class="form-control" id="pwd"></div><button type="button" class="btn btn-primary" id="loginBtn">Login</button></form><?php echo '<script'; ?>
>
        new Login.Insert();
    <?php echo '</script'; ?>
>
<?php }
}
