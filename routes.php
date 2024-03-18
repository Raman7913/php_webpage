<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$arr = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php',
    '/notes'=> 'controllers/notes.php',
];
function abort($code = 404)
{
    http_response_code($code);
    require "views/{$code}.php";
    die();
}
function routeToController($uri,$arr)
{
    if (array_key_exists($uri, $arr)) {
        require $arr[$uri];
    } else {
        abort();
    }
}
routeToController($uri,$arr);
