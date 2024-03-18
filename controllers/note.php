<?php
$name = 'Note';


$config = include 'config.php';
$db = new Database($config['database']);
$id=$_GET['id'];
$notes = $db->query("select * from notes where id = ?",[$id]);


    

include 'views/note.view.php';

