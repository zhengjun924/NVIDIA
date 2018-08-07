<?php
	$link = mysqli_connect('127.0.0.1','root','root','nvidia');
	mysqli_set_charset($link,'utf8');

	session_start();

	$joinmeet = $_POST['joinmeet'];
	$mainjob = $_POST['mainjob'];
	$area = $_POST['area'];
	$des = $_POST['des'];
	$know = $_POST['know'];
	$engineer = $_POST['engineer'];
	$buy = $_POST['buy'];
	$study = $_POST['study'];
	$eat = $_POST['eat'];
	$edu = $_POST['edu'];
	$get = $_POST['get'];

	if (!empty($_SESSION['email']) && !empty($joinmeet) && !empty($know) && !empty($mainjob) && !empty($area) && !empty($des) && !empty($engineer) && !empty($buy) && !empty($study) && !empty($eat) && !empty($edu) && !empty($get)) {
		$email = $_SESSION['email'];
		$sql = "update user set joinmeet='$joinmeet',know='$know',mainjob='$mainjob',area='$area',des='$des',engineer='$engineer',buy='$buy',study='$study',eat='$eat',edu='$edu',get='$get' where email='$email'";
		mysqli_query($link,$sql);
		echo 1;
	}else{
		echo 2;
	}
	if (isset($_SESSION['select'])) {
		unset($_SESSION['select']);
	}
 ?>