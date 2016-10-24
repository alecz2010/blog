<?php
/* Smarty version 3.1.30, created on 2016-10-24 13:16:16
  from "C:\xampp\htdocs\blog\templates\contact.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580ded803d5b05_13149680',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '066ef104cadd5e93f36dc99e41f90e66990514f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\blog\\templates\\contact.tpl',
      1 => 1477307760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_580ded803d5b05_13149680 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form class="contact">
    <div class="form-group">
        <label for="usr">Name:</label>
        <input type="text" name="input[name]" class="form-control input" id="name">
    </div>
    <div class="form-group">
        <label for="pwd">Email:</label>
        <input type="password" name="input[email]" class="form-control input" id="email">
    </div>
    <div class="form-group">
        <label for="pwd">Re-Password:</label>
        <textarea class="form-control input" name="input[text]" rows="5" id="comment"></textarea>
    </div>
    <button type="button" class="btn btn-default" id="sendBtn">Sent</button>
    <div class="message"></div>
    <?php echo '<script'; ?>
>
        new Contact.Sent();
    <?php echo '</script'; ?>
>
</form><?php }
}
