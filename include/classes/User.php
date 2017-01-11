<?php

/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 10/18/2016
 * Time: 4:57 PM
 */

require_once  '../config/config.php';

class User
{
    public static function encryptPassword($password)
    {
        $password = md5($password);
        return $password;
    }

    public static function createUser($username, $password) {
        $db = config::connection();
        $db->query("INSERT INTO `register` (`username`,`password`) VALUES ('" . $username . "','" . $password . "')");
        if ($db->affected_rows > 0) {
            return true;
        }

        return false;
    }

    public static function checkUserCredentials($username, $password) {
        $db = config::connection();
        $result = $db->query("SELECT * FROM `register` WHERE username='" . $username . "' AND password='" . $password . "'");

        if (!empty($result)) {
            return $result;
        }

        return false;
    }

    public static function validUser($username) {
        $db = config::connection();
        $result = $db->query("SELECT * FROM `register` WHERE username='" . $username . "'");

        if (!empty($result)) {
            return $result;
        }

        return false;
    }

    public static function validateInputs($username, $password)
    {
        $errors = array();

        if (!$username) {
            $errors['username'] = 'Username is missing!';
        }

        if (strlen($username) <= 5) {
            $errors['username'] = 'Username is to short';
        }

        if (!$password) {
            $errors['password'] = 'Password is missing!';
        }

        if (strlen($password) <= 5) {
            $errors['password'] = 'Password is to short';
        }


        return $errors;
    }

}


