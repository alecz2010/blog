<?php
include('include/libs/SmartyBC.class.php');
include('pages/header.php');
include('include/functions.php');


if (empty(getCurrentPage())) {
    $_GET['page'] = 'index';
}elseif(!file_exists('./pages/' . getCurrentPage() . '.php')) {
    $_GET['page'] = '404';
}

include ('pages/' . getCurrentPage() . '.php');


include ('templates/index.tpl');

include('pages/footer.php');


