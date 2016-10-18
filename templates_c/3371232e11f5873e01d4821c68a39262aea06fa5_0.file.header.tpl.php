<?php
/* Smarty version 3.1.30, created on 2016-10-18 16:22:35
  from "C:\xampp\htdocs\blog\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5806302b15e366_39793063',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3371232e11f5873e01d4821c68a39262aea06fa5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\blog\\templates\\header.tpl',
      1 => 1476800554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5806302b15e366_39793063 (Smarty_Internal_Template $_smarty_tpl) {
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
 src="public/js/ajax.js"><?php echo '</script'; ?>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['navBtn']->value, 'navUrl');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['navUrl']->value) {
?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['navUrl']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['navUrl']->value['page'];?>
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
