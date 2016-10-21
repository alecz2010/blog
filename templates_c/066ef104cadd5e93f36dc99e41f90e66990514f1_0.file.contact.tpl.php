<?php
/* Smarty version 3.1.30, created on 2016-10-21 14:08:21
  from "C:\xampp\htdocs\blog\templates\contact.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580a0535dd1aa2_38057991',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '066ef104cadd5e93f36dc99e41f90e66990514f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\blog\\templates\\contact.tpl',
      1 => 1477051579,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_580a0535dd1aa2_38057991 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form class="contact">
    <div class="form-group">
        <label for="usr">Name:</label>
        <input type="text" name="input[name]" class="form-control" id="name">
    </div>
    <div class="form-group">
        <label for="pwd">Email:</label>
        <input type="password" name="input[email]" class="form-control" id="email">
    </div>
    <div class="form-group">
        <label for="pwd">Re-Password:</label>
        <textarea class="form-control" name="input[text]" rows="5" id="comment"></textarea>
    </div>
    <button type="button" class="btn btn-default" id="registerBtn">Register</button>
</form><?php }
}
