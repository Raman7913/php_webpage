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