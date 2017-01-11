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
    if($validUser = User::validUser($username)) {
        $password = User::encryptPassword($password);
        $user = User::createUser($username, $password);
        Ajax::output($user);
    }

    $errors[] = 'Cannot create user!';
}

Ajax::output(array(
    'errors' => $errors,
));
