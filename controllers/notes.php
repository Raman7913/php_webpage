<?php
$name = 'Notes';


$config = include 'config.php';
$db = new Database($config['database']);

$notes = $db->query('select * from notes where user_id = 1');
    

include 'views/notes.view.php';

