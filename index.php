<?php
include 'function.php';
include 'routes.php';
include 'Database.php';

$config=include 'config.php';

$db = new Database($config);
$posts = $db->query('select * from posts');

foreach ($posts as $post) {
    echo '<li>';
    echo $post['title'];
    echo '</li>';
}
