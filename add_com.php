<?php

$com = $_POST['new_com'];
$id = $_COOKIE['id'];

if (mb_strlen($com) < 3 || mb_strlen($com) > 300) {
		echo "Недопустимая длина";
		echo "<br><a href = '../cabinet.php'> Попробовать еще раз </a> ";
		exit();
	}

include 'libs/db_connect.php';



if (!$conn->connect_error)
	{
	$result = $conn->query("INSERT INTO `comments` (`comment_text`, `user_id`) VALUES ('$com', '$id')");
	}
	else {
    die("Connection failed: " . $conn->connect_error);
	}


	$conn->close();
	header('Location: /cabinet.php');
