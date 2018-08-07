<?php
	session_start();
	$link = mysqli_connect('127.0.0.1','root','root','nvidia');
	mysqli_set_charset($link,'utf8');

	$user = $_POST['user'];
	$pass = md5($_POST['pass']);
	$name = $_POST['name'];
	$age = $_POST['age'];
	$sex = $_POST['sex'];
	$job = $_POST['job'];
	$tel = $_POST['tel'];
	$email = $_POST['email'];
	$pro = $_POST['pro'];
	$city = $_POST['city'];
	$company = $_POST['company'];
	$address = $_POST['address'];

	if(!empty($_SESSION['email']) && !empty($user) && !empty($pass) && !empty($name) && !empty($age) && !empty($sex) && !empty($job) && !empty($tel) && !empty($email) && !empty($company) && !empty($address) && !empty($pro) && !empty($city)){
		$Login_email = $_SESSION['email'];
		$per_sql = "update user set name='$name',user='$user',pass='$pass',sex='$sex',age='$age',job='$job',tel='$tel',company='$company',pro='$pro',city='$city',address='$pro$city$address' where email='$Login_email'";
		// echo $per_sql;
		mysqli_query($link,$per_sql);
		echo 1;
	}else{
		echo 2;
		// print_r($_SESSION);
	}
 ?>