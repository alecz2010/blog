<?php

/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 10/18/2016
 * Time: 4:57 PM
 */

require_once 'DbManager.php';

class register
{
    public function insertData()
    {
        if (isset($_POST['input'])) {
            $formInput = $_POST['input'];
        }
        $db = DbManager::connection();
        $db->query("INSERT INTO register WHERE username='" . $formInput['username'] ."' AND password ='" . $formInput['password'] . "'");
    }



}