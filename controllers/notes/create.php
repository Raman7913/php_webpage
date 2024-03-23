<?php
    require basePath('core/Validation.php');
    
    $config = include basePath('config.php');
    $db = new Database($config['database']);
    $error=[];
    if($_SERVER['REQUEST_METHOD']==='POST'){
        
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
    view('notes/create.view.php',[
        'name'=>'create notes here',
        'error'=>$error,
    ]);
    
    