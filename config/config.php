<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 10/7/2016
 * Time: 5:14 PM
 */

class config
{
    public static function connection()
    {
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $db = 'register';

        $connect = new mysqli($host, $user, $pass, $db);

        if ($connect->connect_error) {
            die('Connect Error ' . mysqli_connect_errno() . mysqli_connect_error());
        }
        return $connect;
    }

    public function menu()
    {
        $config = new stdClass();

        $config->navMenu = array(
            'Home' => './',
            'Contact' => '?page=contact',
            'Map' => '?page=map',
            'Register' => '?page=register',
            'Login' => '?page=login'
        );
        return $config->navMenu;
    }
}