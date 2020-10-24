<!DOCTYPE html>
<html lang="rus">
<head>
	<meta charset="UTF-8">
    <link href="css/style.css" rel="stylesheet">
	<title>Панель администратора</title>
</head>
<?php
if ($_COOKIE['role_id'] == 2):
?>
<body>
	<div class="container">
	<header class="header_lk">
    <div class="username">
        <p>Добро пожаловать, <?=$_COOKIE['user']?></p>
    </div>
	</header>
	<div id="users-comments">
        </div>
        <div id = "add_comm">
            <p>
				Удалить комментарии
	        </p>
			       		
			<form action="admin.php" method="post">
				<input id = "del_com" type="text" name = 'del_com' placeholder="ВВЕДИТЕ НОМЕР КОММЕНТАРИЯ" style="width: 250px">
				<input type="submit">
			</form>


			<?php
	$del = $_POST['del_com'];
	include "libs/db_connect.php";


	if (!$conn->connect_error)
	{
	$conn->query("DELETE FROM `comments` where `id` = $del");
	}
	else {
    die("Connection failed: " . $conn->connect_error);
	}


	$conn->close();
	?>

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
