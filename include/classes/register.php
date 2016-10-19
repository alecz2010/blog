<?php

/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 10/18/2016
 * Time: 4:57 PM
 */

require_once '../../config/config.php';

class register
{
    function insertData($formInput) {
        $db = config::connection();
        $resp = $db->query("INSERT INTO `register` (`username`) VALUES ('" . $formInput['username'] ."')"); //"`username`='" . $formInput['username'] ."' AND `password`='" . $formInput['password'] . "'");
    //    var_dump("INSERT INTO register WHERE username='" . $formInput['username'] ."' AND password='" . $formInput['password'] . "'");
    //    var_dump("INSERT INTO `register` (`username`) VALUES ('" . $formInput['username'] ."')");

    //    exit();
        if ($db->affected_rows > 0){
            return 1;
        } else {
            return 0;
        }
    }
}

$formInput = $_POST['input'];

$result = insertData($formInput);
echo $result;