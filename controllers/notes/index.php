<?php



$config =require basePath('config.php');
$db = new Database($config['database']);

$notes = $db->query('select * from notes where user_id = 1')->get();
    
view('notes/index.view.php',[
    'name'=>'Notes',
    'notes'=> $notes
]);

