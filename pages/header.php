<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 10/7/2016
 * Time: 2:25 PM
 */
require_once 'config/config.php';

$smarty = new Smarty();


$smarty->assign($config->navMenu);

$smarty->display('header.tpl');
