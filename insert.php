<?php
	$connect = mysqli_connect("MySQL-8.2", "root", "", "twitter");

	$follow = mysqli_query($connect, 'SELECT * FROM followings');
	$follow = mysqli_query($connect, "INSERT INTO followings(name, channel, img) 
			VALUES('{$_GET["name"]}', '{$_GET["channel"]}', '{$_GET["img"]}')");
	header("location: https://twitter.local/");
?>