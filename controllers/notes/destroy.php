<?php
    use core\Database;
    use core\App;
    $db = App::container()->resolve(Database::class);
    $currentUserId = 1;

        $id = $_POST['id'];

        $notes = $db
            ->query('select * from notes where id = :id', [
                'id' => $id,
            ])
            ->findOrFail();

        authorize($notes['user_id'] === $currentUserId);
        $db->query('delete from notes where id = :id', [
            'id' => $_POST['id'],
        ]);

        header('location: /notes');
        die();
    
    
