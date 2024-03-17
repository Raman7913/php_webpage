<?php
include 'function.php';
include 'routes.php';

$pdo=new PDO('mysql:host=localhost;dbname=myapp','root');
$statement=$pdo->prepare('select * from posts');
$statement->execute();
$posts=$statement->fetchAll(PDO::FETCH_ASSOC);

foreach($posts as $post){
    echo '<li>';
    echo 'id is: '.$post['id'].'<br>';
    echo 'title is: '.$post['title'];
    echo '</li>';
}