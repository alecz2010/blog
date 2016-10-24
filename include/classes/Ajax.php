<?php

class Ajax
{
    public static function output ($response, $code = 20)
    {
        header('Content-type: application/json');
        echo json_encode(
            array(
                'code' => $code,
                'res' => $response
            )
        );
        exit();
    }

    public static function outputError ($response, $code = 500)
    {
        header('Content-type: application/json');
        echo json_encode(
            array(
                'code' => $code;
                'res' => $response;
            )
        );
        exit();
    }
}
