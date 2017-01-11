<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 10/25/2016
 * Time: 4:04 PM
 */

require_once '../init.php';
require_once APPLICATION_PATH . '/config/config.php';

$username = $_POST['username'];
$password = $_POST['password'];

Application::__autoload('User');

$errors = User::validateInputs($username, $password);

if (empty($errors)) {
    $password = User::encryptPassword($password);
    $user = User::checkUserCredentials($username, $password);

    if ($user) {
        Ajax::output($user);
    }

    $errors[] = 'User doesn\'t exist in our database!';
}

Ajax::outputError($errors);
