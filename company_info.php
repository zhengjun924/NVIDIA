<?php
	$link = mysqli_connect('127.0.0.1','root','root','nvidia');
	mysqli_set_charset($link,'utf8');

	session_start();

	if (empty($_SESSION['email'])) {
		unset($_SESSION['email']);
		$user = $_SESSION['user'];
		$company_sql = "select company,pro,city,address,name,tel from user where user='$user' or email='$user'";
		$res = mysqli_query($link,$company_sql);
		$array = mysqli_fetch_assoc($res);

		echo json_encode($array);
		// print_r($_SESSION);
	}elseif (empty($_SESSION['user'])) {
		unset($_SESSION['user']);
		$email = $_SESSION['email'];
		$company_sql = "select company,pro,city,address,name,tel from user where email='$email' or user='$email'";
		$res = mysqli_query($link,$company_sql);
		$array = mysqli_fetch_assoc($res);

		echo json_encode($array);
		// print_r($_SESSION);
	}
 ?>