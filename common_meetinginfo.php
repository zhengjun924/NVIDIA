<?php
	header("content-type:text/html;charset=utf-8");
	$link = mysqli_connect('127.0.0.1','root','root','nvidia');
	mysqli_set_charset($link,'utf8');

	session_start();

	$company_num = $_POST['company_num'];
	$price_num = $_POST['price_num'];
	$receipt = $_POST['receipt'];
	$way = $_POST['way'];
	$status = $_POST['status'];

	$num_sql = "select * from num where price_num='$price_num'";
	$num_res = mysqli_query($link,$num_sql);
	$num_array = mysqli_fetch_assoc($num_res);

	if ($num_array['price_num'] === $price_num || empty($num_array['price_num'])){
		if (empty($_SESSION['email'])) {
			unset($_SESSION['email']);
			$user = $_SESSION['user'];
			$sql = "update user set status='$status',receipt='$receipt',way='$way',company_num='$company_num',type='普通观众票',price='￥580' where user='$user' or email='$user'";
			mysqli_query($link,$sql);
			echo 1;
		}elseif (empty($_SESSION['user'])) {
			unset($_SESSION['user']);
			$email = $_SESSION['email'];
			$sql = "update user set status='$status',receipt='$receipt',way='$way',company_num='$company_num',type='专业观众票',price='￥1,580' where email='$email' or user='$email'";
			mysqli_query($link,$sql);
			echo 1;
		}
	}
	else{
		echo 2;
	}
		// echo $sql;

 ?>