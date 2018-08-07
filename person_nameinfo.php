<?php 
	$link = mysqli_connect('127.0.0.1','root','root','nvidia');
	mysqli_set_charset($link,'utf8');

	$user = $_POST['user'];
	$sql = "select * from user where user='$user'";
	$res = mysqli_query($link,$sql);
	$array = mysqli_fetch_assoc($res);
	if ($array['user'] == $user) {
		echo 1;
	}
 ?>