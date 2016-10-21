<?php

/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 10/21/2016
 * Time: 4:02 PM
 */

require_once  '../config/config.php';

class Contact
{
    public static function contactUs($formInputs)
    {
        $db = config::connection();
        $db->query("INSERT INTO `contact-us` (`name`, `email`, `text`) VALUES ('" . $formInputs['name'] . "','" .  $formInputs['email'] . "','" . $formInputs['text'] . "')");
        if ($db->affected_rows > 0){
            return true;
        }

        return false;
    }
}