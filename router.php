<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/auth/index.php',
    '/admin-login' => 'controllers/auth/admin_login.php',
    '/admin-register' => 'controllers/auth/admin_register.php',
    '/client-login' => 'controllers/auth/client_login.php',
    '/client-register' => 'controllers/auth/client_register.php',
    '/agent-login' => 'controllers/auth/agent_login.php',
    '/keeper-login' => 'controllers/auth/keeper_login.php',
];

function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

function abort($code = 404)
{
    http_response_code($code);
    require "views/{$code}.php";

    die();
}

routeToController($uri, $routes);