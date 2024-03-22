<?php
    require 'Validation.php';


    $name='create note here';
    
    $config = include 'config.php';
    $db = new Database($config['database']);
    
    if($_SERVER['REQUEST_METHOD']==='POST'){
        $error=[];

        if(!Validation::string($_POST['description'],1,255))
        {
            $error['body']='!!! text should be between 1 and 255 characters';
        }
        if(empty($error))
        {
        $db->query('insert into notes(body,user_id) values (:body,:user_id)',[
            'body'=>$_POST['description'],
            'user_id'=>1,
        ]);
        }
    }
    require('views/note-create.view.php');