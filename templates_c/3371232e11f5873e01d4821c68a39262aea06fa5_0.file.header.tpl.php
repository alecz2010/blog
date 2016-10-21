<?php
/* Smarty version 3.1.30, created on 2016-10-21 14:55:05
  from "C:\xampp\htdocs\blog\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580a1029637d69_28014558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3371232e11f5873e01d4821c68a39262aea06fa5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\blog\\templates\\header.tpl',
      1 => 1477054385,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_580a1029637d69_28014558 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
    <title><?php $_smarty_tpl->_assignInScope('title', "Blog");
?></title>
    <meta charset="utf-8" />
    <link href="public/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="public/css/generic/build/generic.css" rel="stylesheet">
    <link href="public/css/frontpage/build/frontpage.css" rel="stylesheet">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/Registration.js"><?php echo '</script'; ?>
>
</head>
<body>
<div id="container">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a>
            </div>
            <ul class="nav navbar-nav">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['x']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</a></li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </ul>
        </div>
    </nav>
</div>
<?php }
}
