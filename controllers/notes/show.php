<?php

    $config = include basePath('config.php');
    $db = new Database($config['database']);
    $id = $_GET['id'];
    
    $notes = $db->query('select * from notes where id = :id',[
        'id' => $id
    ])->findOrFail();
    
    $currentUserId=1;

    authorize($notes['user_id'] === $currentUserId);

    view('notes/show.view.php',[
        'name'=>'Show notes',
        'notes'=>$notes
    ]);
    
    
