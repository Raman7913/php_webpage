<?php
    use core\Response;
    function dd($value){
        echo "<pre>";
        var_dump($value);
        echo "</pre>";

        die();
    }
    function abort($code=404){
        http_response_code($code);
        require basePath("views/{$code}.php");
        die();
    }
    function authorize($condition,$status = Response::forbidden){
        if(!$condition){
            abort($status);
        }
    }
    function basePath($path){
        return BASE_PATH . $path;
    }
    function view($path,$attributes=[]){
        extract($attributes);
        require basePath("/views/".$path);
    }