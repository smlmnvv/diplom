<?php

require_once CONFIG . '\routes.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if(array_key_exists($uri, $routes))
{
    if(file_exists(CONTROLLERS . "/{$routes[$uri]}"))
    {
        require_once CONTROLLERS . "/{$routes[$uri]}";
    }
    else
    {
        abort();
    }
}
else {
    abort(404);
}