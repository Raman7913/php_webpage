<?php
    use core\Database;
    use core\App;
    $db = App::container()->resolve(Database::class);

    $currentUserId = 1;

    
        $id = $_GET['id'];

        $notes = $db->query('select * from notes where id = :id', [
                'id' => $id,
            ])->findOrFail();

        authorize($notes['user_id'] === $currentUserId);

        view('notes/show.view.php', [
            'name' => 'Show notes',
            'notes' => $notes,
        ]);
    
