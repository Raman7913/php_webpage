<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        nav{
            display: flex;
            justify-content: space-between;
            background-color: #eeeeee;
            padding: 17px 20px;
        }
        ul{
            display: flex;
            gap: 20px;
        }
        ul > li{
            list-style: none;
        }
        ul>li>a{
            text-decoration: none;
        }
        .buttons{
            display:flex;
            align-items: center;
            gap: 20px;
        }
        <?php if($_SERVER['REQUEST_URI']==='/'): ?>
            .home{
                text-decoration: underline;
            }
        <?php endif ?>
        <?php if($_SERVER['REQUEST_URI']==='/about'): ?>
            .about{
                text-decoration: underline;
            }
        <?php endif ?>
        <?php if($_SERVER['REQUEST_URI']==='/contact'): ?>
            .contact{
                text-decoration: underline;
            }
        <?php endif ?>

    </style>
</head>
<body>
<nav>
            <ul class="navList">
                <li><a href="/" class="home">Home</a></li>
                <li><a href="/about" class="about">About us</a></li>
                <li><a href="/contact" class="contact">Contact</a></li>
            </ul>
            <div class="buttons">
                <button class="signup">sign up</button>
                <button class="login">log in</button>
            </div>
        </nav>
</body>
</html>