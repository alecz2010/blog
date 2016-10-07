<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 10/7/2016
 * Time: 2:25 PM
 */

$smarty = new \Smarty();

$smarty->assign($GLOBALS['config']->navMenu);

$smarty->display('header.tpl');
