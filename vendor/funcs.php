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
    http_response_code(404);
    require_once VIEWS . "/errors/{$code}Error.php";
    die;
}