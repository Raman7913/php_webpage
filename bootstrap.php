<?php
    use core\Container;
    use core\Database;
    use core\App;

    $container = new Container();

    $container->bind('core\Database',function(){
        $config = include basePath('config.php');
        return new Database($config['database']);
    });

    $db = $container->resolve('core\Database');
    
    app::setContainer($container);