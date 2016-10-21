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
        $resp = $db->query("INSERT INTO `register` (`username`) VALUES ('" . $formInput['username'] ."')");
        if ($db->affected_rows > 0){
            return true;
        }

        return false;
    }
}


