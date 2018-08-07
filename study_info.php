<?php
	header("content-type:text/html;charset=utf-8");
	$link = mysqli_connect('127.0.0.1','root','root','nvidia');
	mysqli_set_charset($link,'utf8');

	session_start();

	$T1707 = $_POST['T1707'];
	$T1712 = $_POST['T1712'];
	$T1708 = $_POST['T1708'];
	$T1711 = $_POST['T1711'];
	$T1709 = $_POST['T1709'];
	$T1710 = $_POST['T1710'];
	$T1714 = $_POST['T1714'];
	$T1715 = $_POST['T1715'];
	$T1713 = $_POST['T1713'];
	$T1716 = $_POST['T1716'];

	// $first_sql = "update user set first_day='$T1707 $T1709,$T1708 $T1710' where user='$user' or email='$user'";
	// $first_res = mysqli_query($link,$first_sql);
	// // echo $first_sql;

	// $second_sql = "update user set second_day='$T1711 $T1714,$T1712 $T1715,$T1713 $T1716' where user='$user' or email='$user'";
	// $second_res = mysqli_query($link,$second_sql);
	// // echo $second_sql;
	// echo 1;

	if (empty($_SESSION['email'])) {
		unset($_SESSION['email']);
		// session_start();
		$user = $_SESSION['user'];
		$first_sql = "update user set first_day='$T1707 $T1709,$T1708 $T1710' where user='$user' or email='$user'";
		$first_res = mysqli_query($link,$first_sql);
		$second_sql = "update user set second_day='$T1711 $T1714,$T1712 $T1715,$T1713 $T1716' where user='$user' or email='$user'";
		$second_res = mysqli_query($link,$second_sql);
		echo 1;
	}elseif (empty($_SESSION['user'])) {
		unset($_SESSION['user']);
		// session_start();
		$email = $_SESSION['email'];
		$first_sql = "update user set first_day='$T1707 $T1709,$T1708 $T1710' where user='$email' or email='$user'";
		$first_res = mysqli_query($link,$first_sql);
		$second_sql = "update user set second_day='$T1711 $T1714,$T1712 $T1715,$T1713 $T1716' where user='$email' or email='$user'";;
		$second_res = mysqli_query($link,$second_sql);
		echo 1;
	}
	else{
		echo 2;
	}
	// print_r($_SESSION);
 ?>