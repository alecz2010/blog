<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 10/18/2016
 * Time: 4:41 PM
 */

class Application
{
    public function getCurrentPage() {
        $page = '';
        if (!empty($_GET['page'])) {
            $page = $_GET['page'];
        }
        return $page;
    }

    public static function __autoload($class_name)
    {
        $filename = str_replace('\\', DIRECTORY_SEPARATOR, $class_name) . '.php';

        $file = CLASS_PATH . $filename;
        if (!file_exists($file)) {
            return FALSE;
        }
        require_once $file;
    }

    public static function escape($escape) {
        $db = config::connection();
        $escape = mysqli_real_escape_string($db,$escape);

        return $escape;
    }

    public static function pageExist()
    {
        if (empty(self::getCurrentPage())) {
            $_GET['page'] = 'home';
        } else if (!file_exists('./pages/' . self::getCurrentPage() . '.php')) {
            $_GET['page'] = '404';
        }

        include('pages/' . self::getCurrentPage() . '.php');
    }

}