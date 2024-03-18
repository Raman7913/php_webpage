<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin:0;
        }
        main{
            padding: 20px;
        }
    </style>
</head>

<body>
   <section>
        <?php include 'partials/nav.php'; ?>
        <?php include 'partials/header.php';?>
        <main>
            
               <?php foreach($notes as $note): ?>
                    <li><?= $note['body'] ?></li>
                <?php endforeach ?>
            
            



        </main>
   </section>
    
</body>

</html>
