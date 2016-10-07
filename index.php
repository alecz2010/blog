<?php

include('include/libs/SmartyBC.class.php');

$smarty = new Smarty;

$smarty->assign('names', array('raul','adi','nandi','vasile','petrut'));

$smarty->assign('users',array(
        array('name' => 'raul', 'phone' => '076512631'),
        array('name' => 'adu', 'phone' => '031'),
        array('name' => 'nandi', 'phone' => '0765163'),
        array('name' => 'vasile', 'phone' => '07656'),
        array('name' => 'petrut', 'phone' => '07651')
        ));

$smarty->display('index.tpl');