<?php
/* Smarty version 3.1.30, created on 2016-10-25 13:12:53
  from "C:\xampp\htdocs\blog\templates\contact.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580f3e35406502_78236781',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '066ef104cadd5e93f36dc99e41f90e66990514f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\blog\\templates\\contact.tpl',
      1 => 1477393829,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_580f3e35406502_78236781 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="contact">
    <form class="send-contact">
        <div class="form-group">
            <input type="text" name="input[name]" class="form-control input" placeholder="Your name" id="name">
        </div>
        <div class="form-group">
            <input type="password" name="input[email]" class="form-control input" placeholder="Your email address" id="email">
        </div>
        <div class="form-group">
            <textarea class="form-control input" name="input[text]" rows="5" placeholder="Message" id="comment"></textarea>
        </div>
        <button type="button" class="btn btn-primary" id="sendBtn">SEND</button>
        <div class="message"></div>
    </form>
    <div class="back hide">
        <img src="http://timbergrove.com/assets/xicon-contact-success-d2727d4f41f54eb503c74f3b1216056d.png.pagespeed.ic.cFVpo2R7Dn.png" style="width:200px;height:200px" />
        <br><button type="button" class="btn btn-primary" id="backBtn">BACK</button>
    </div>
    <?php echo '<script'; ?>
>
        new Contact.Sent();
    <?php echo '</script'; ?>
>
</div>
<?php }
}
