<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 10/21/2016
 * Time: 12:25 PM
 */

define('APPLICATION_PATH', dirname(__FILE__));
define('CLASS_PATH', dirname(__FILE__) . '/include/classes/');

include('include/libs/SmartyBC.class.php');
include('include/functions.php');

spl_autoload_register(array('Application','__autoload'));
