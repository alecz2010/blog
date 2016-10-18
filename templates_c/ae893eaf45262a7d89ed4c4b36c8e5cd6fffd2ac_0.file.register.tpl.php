<?php
/* Smarty version 3.1.30, created on 2016-10-18 16:22:00
  from "C:\xampp\htdocs\blog\templates\register.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5806300814dcf8_67057957',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae893eaf45262a7d89ed4c4b36c8e5cd6fffd2ac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\blog\\templates\\register.tpl',
      1 => 1476800253,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5806300814dcf8_67057957 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form class="register">
    <div class="form-group">
        <label for="usr">Username:</label>
        <input type="text" name="input[username]" class="form-control" id="usr">
    </div>
    <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" name="input[password]" class="form-control" id="pwd">
    </div>
    <div class="form-group">
        <label for="pwd">Re-Password:</label>
        <input type="password" name="input[repassword]" class="form-control" id="pwd">
    </div>
    <button type="button" class="btn btn-default" id="registerBtn">Register</button>
</form><?php }
}
