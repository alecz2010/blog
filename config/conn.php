<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 10/7/2016
 * Time: 5:19 PM
 */

class mysql
{
    public function connection()
    {
        DEFINE('localhost','localhost');
        DEFINE('user','root');
        DEFINE('password','');
        DEFINE('db','register');

        $connect = new mysqli(localhost,user,password,db);

        if($connect->connect_error) {
            die('Connect Error ' . mysqli_connect_errno()  . mysqli_connect_error());
        }

        $connect->close();
        return $connect;
    }
}