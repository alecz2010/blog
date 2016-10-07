<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 10/7/2016
 * Time: 5:14 PM
 */


$config->navMenu = array(
    'navBtn' => array(
        array(
            'page' => 'Home',
            'url' => '/',
        ),
        array(
            'page' => 'Contact',
            'url' => '/contact',
        ),
        array(
            'page' => 'Map',
            'url' => '/map',
        ),
    ),
);

$GLOBALS['config'] = $config;

//namespace Config;
//
//class Config {
//    private function __construct()
//    {
//        //path
//        if(!define('confPath')){
//            define('confPath', '/config/');
//        }
//
//
//    }
//
//    public function header()
//    {
//        //Menu header
//        $menu = array(
//            'navBtn' => array(
//                array(
//                    'page' => 'Home',
//                    'url' => '/',
//                ),
//                array(
//                    'page' => 'Contact',
//                    'url' => '/contact',
//                ),
//                array(
//                    'page' => 'Map',
//                    'url' => '/map',
//                ),
//            ),
//        );
//
//        return $menu;
//    }
//
//
//
//
//}