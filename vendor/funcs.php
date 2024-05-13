<?php

function dd($data)
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die;
}

function abort($code = 404)
{
    http_response_code($code);
    require_once VIEWS . "/errors/{$code}Error.php";
    die;
}

function validate($fillable)
{
    $data = [];

    foreach($_POST as $k => $v)
    {
        if(in_array($k, $fillable))
        {
            $data[$k] = $v;
        }
    }

    return $data;
}