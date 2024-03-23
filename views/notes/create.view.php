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

            
            <form method="post">
                <label for="body">Description of note:</label>
                <div>
                    <textarea 
                        name="description" 
                        id="body" 
                        cols="30" 
                        rows="10" 
                        required><?=isset($_POST['description'])?$_POST['description']:'' ?>
                    </textarea>
                </div>
                <button type="submit">submit</button>
            </form>
            <?php
            if(isset($error['body'])){
                echo $error['body'];
            }
            ?>



        </main>
    </section>

</body>

</html>
