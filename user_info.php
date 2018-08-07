<?php
	$link = mysqli_connect('127.0.0.1','root','root','nvidia');
	mysqli_set_charset($link,'utf8');

	session_start();
	// print_r($_SESSION);die;
	$user = $_POST['user'];
	$pass = md5($_POST['pass']);
	$sql = "select * from user where user='$user' or email='$user'";
	$res = mysqli_query($link,$sql);
	$array = mysqli_fetch_assoc($res);
	if (!empty($user) && !empty($array)) {
		if (isset($_SESSION['id']) && $array['id'] == $_SESSION['id']) {
			echo 4;
		}else{
			$email = $array['email'];
			if($array['pass'] === $pass){
				$_SESSION['user'] = $_POST['user'];
				$_SESSION['pass'] = md5($_POST['pass']);
				$_SESSION['select'] = 'select';
				$_SESSION['id'] = $array['id'];
				// print_r($_SESSION);
				echo 1;
			}else{
				echo 2;
			}
		}
	}else{
		echo 3;
	}
