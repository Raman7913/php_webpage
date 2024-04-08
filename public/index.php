<?php

    const BASE_PATH = __DIR__ . '/../';
    include BASE_PATH.'core/function.php';
    spl_autoload_register(function($class){
        $class=str_replace('\\',DIRECTORY_SEPARATOR,$class);
        require basePath($class.'.php');
    });

    require basePath('bootstrap.php');
    
    $router=new \core\Router();
    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
    $routes=require basePath('routes.php');
    $method = isset($_POST['_method']) ? $_POST['_method'] : $_SERVER['REQUEST_METHOD'];
    $router->route($uri,$method);




