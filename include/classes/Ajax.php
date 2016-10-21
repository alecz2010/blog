<?php

class Ajax
{
    public static function output($response, $code=20)
    {
        header('Content-type: application/json');
        $output = json_encode(array(
                            'code' => $code,
                            'res' => $response
        ));

        echo $output;
        exit();
    }
}
