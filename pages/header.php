<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 10/7/2016
 * Time: 2:25 PM
 */
require_once 'config/config.php';

$smarty = new Smarty();

$config = new config();

$smarty->assign('x', $config->menu());

$smarty->display('header.tpl');
