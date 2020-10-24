<?php
	include 'libs/db_connect.php';
	if (!$conn->connect_error)
	{
	$result = $conn->query("SELECT comments.id,comments.comment_text, users.login FROM `comments` inner join `users` on users.id = comments.user_id");
     $arr = [];
     $inc = 0;
            while ($row = $result->fetch_assoc()) {
                # code...
                $jsonArrayObject = (array('id' => $row["id"], 'comment_text' => $row["comment_text"], 'login' => $row["login"]));
                $arr[$inc] = $jsonArrayObject;
                $inc++;
            }
            $json_array = json_encode($arr);
            echo $json_array;
            $filename = 'my.json';
            file_put_contents($filename, json_encode($arr));

	}
	else {
    die("Connection failed: " . $conn->connect_error);
	}


	$conn->close();
