<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 10/7/2016
 * Time: 2:25 PM
 */

$smarty = new Smarty;

$smarty->assign('navBtn', array(
    array('page' => 'Home' , 'url' => '/'),
    array('page' => 'Contact', 'url' => '/contact'),
    array('page' => 'Map', 'url' => '/map')
    ));

$smarty->display('header.tpl');
