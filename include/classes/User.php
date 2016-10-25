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
    public static function insertData($formInput) {
        $db = config::connection();
        $db->query("INSERT INTO `register` (`username`,`password`) VALUES ('" . $formInput['username'] . "','" . md5($formInput['password']) . "')");
        if ($db->affected_rows > 0) {
            return true;
        }

        return false;
    }
    public static function loginData($formInput) {
        $db = config::connection();
        $db->query("SELECT * FROM `register` WHERE username='" . $formInput['username'] . "' AND password='" . $formInput['password'] . "'");
        if ($db->affected_rows > 0) {
            return true;
        }
    }
}


