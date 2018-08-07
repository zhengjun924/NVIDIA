<?php
	session_start();

	$link = mysqli_connect('127.0.0.1','root','root','nvidia');
	mysqli_set_charset($link,'utf8');

	$email = $_POST['email'];
	$email_sql = "select * from user where email='$email'";
	$email_res = mysqli_query($link,$email_sql);
	$email_array = mysqli_fetch_assoc($email_res);

	$num = $_POST['num'];
	$num_sql = "select * from num where invite_num='$num'";
	$num_res = mysqli_query($link,$num_sql);
	$num_array = mysqli_fetch_assoc($num_res);

	if ($email_array['email'] != $email) {
		if ($num_array['invite_num'] == $num && !empty($num)) {
			$sql = "insert into user(email) values('$email')";
			mysqli_query($link,$sql);

			$_SESSION['email'] = $_POST['email'];
			echo 1;
		}else{
			echo 2;
		}
	}else{
		echo 3;
	}

 ?>