<?php
use core\Database;
use core\App;
    
$db = App::container()->resolve(Database::class);

$notes = $db->query('select * from notes where user_id = 1')->get();
    
view('notes/index.view.php',[
    'name'=>'Notes',
    'notes'=> $notes
]);

