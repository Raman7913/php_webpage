<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
        }

        main {
            padding: 20px;
        }
    </style>
</head>

<body>
    <section>
        <?php include basePath('views/partials/nav.php'); ?>
        <?php include basePath('views/partials/header.php'); ?>
        <main>

            <li><?=htmlspecialchars($notes['body'])?></li>




        </main>
    </section>

</body>

</html>
