<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
   
    <ul>
    <?php foreach($filtered as $book): ?>
        <li>
            <?=$book['name']?> written by <?=$book['author']?> released in <?=$book['year']?>
        </li>
        
    <?php endforeach ?>
    </ul>
</body>

</html>
