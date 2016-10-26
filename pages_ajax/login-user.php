<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 10/25/2016
 * Time: 4:04 PM
 */

require_once '../init.php';
require_once APPLICATION_PATH . '/config/config.php';

$inputs = $_POST['input'];

Application::__autoload('User');

$result = User::loginData($inputs) ? "success" : "failed";

Ajax::output($result);