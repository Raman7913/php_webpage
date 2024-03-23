<?php

    function dd($value){
        echo "<pre>";
        var_dump($value);
        echo "</pre>";

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