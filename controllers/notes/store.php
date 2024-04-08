<?php
    use core\Database;
    use core\Validation;
    use core\App;
    $db = App::container()->resolve(Database::class);
    $error=[];
        
        if(!Validation::string($_POST['description'],1,255))
        {
            $error['body']='!!! text should be between 1 and 255 characters';
        }
        if(!empty($error)){
            return view('notes/create.view.php',[
                'name'=>'create notes here',
                'error'=>$error,
            ]);
        }
        if(empty($error))
        {
        $db->query('insert into notes(body,user_id) values (:body,:user_id)',[
            'body'=>$_POST['description'],
            'user_id'=>1,
        ]);
        }
        header('location: /notes');
        die();
    