<?php
/* Smarty version 3.1.30, created on 2016-10-07 14:17:57
  from "C:\xampp\htdocs\blog\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57f792751aebd6_59301190',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3371232e11f5873e01d4821c68a39262aea06fa5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\blog\\templates\\header.tpl',
      1 => 1475842676,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57f792751aebd6_59301190 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
    <title><?php $_smarty_tpl->_assignInScope('title', "Blog");
?></title>
    <meta charset="utf-8" />
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/css/generic/_main.scss" rel="stylesheet">
    <link href="public/css/frontpage/_container.scss" rel="stylesheet">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</head>
<body>
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
    <div id="container">
    </div>
<?php }
}
