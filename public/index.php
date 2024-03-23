<?php

const BASE_PATH = __DIR__ . '/../';
include BASE_PATH.'core/function.php';
spl_autoload_register(function($class){
    require basePath('core/'.$class.'.php');
});
include basePath('core/router.php');




