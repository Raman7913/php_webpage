<?php
    $name = 'Note';

    $config = include 'config.php';
    $db = new Database($config['database']);
    $id = $_GET['id'];
    
    $notes = $db->query('select * from notes where id = :id',[
        'id' => $id
    ])->findOrFail();
    
    $currentUserId=1;

    authorize($notes['user_id'] === $currentUserId);

    include 'views/note.view.php';
