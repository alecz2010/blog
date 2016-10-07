<?php
include('include/libs/SmartyBC.class.php');

$smarty = new Smarty;

$smarty->assign('id', array(1,2,3,4,5));
$smarty->assign('names', array('raul','andrei','daniel','bogdan','cipri'));


$smarty->display('index.tpl');