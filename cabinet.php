<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Личный кабинет</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<?php if($_COOKIE['user'] != ''):
?>
<body>
    <div class="container">
        <header class="header_lk">
            <div class="username">
                <p>Добро пожаловать, <?=$_COOKIE['user']?></p>
            </div>
        </header>
        <p>
        Здесь Вы можете поглядеть отзывы о нашем сайте и оставить новые!
        </p>
        <div id="users-comments">
        </div>
        <div id = "add_comm">
            <p>
              Оставьте свое мнение!  
            </p>
        <form action="add_com.php" method="post">        
            <textarea rows="10" cols="80" name="new_com"></textarea>
          <br>
           <input id = 'form_btn' type="submit" value="Отправить!">
        </form>
        </div>
    

        <div class = "links">
            <a href="index.php">На главную </a>
            <a href="exit.php"> Выход </a>
        </div>
    </div>
    <?php else:?>
        <p> Нет доступа в личный кабинет, пожалуйста, <a href = 'index.php#login-btn'> авторизуйтесь </a></p>

    <?php endif;?>
    <script src = "get_comments.js"></script>
</body>
</html>

