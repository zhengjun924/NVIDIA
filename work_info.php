<?php
 $link = mysqli_connect('127.0.0.1','root','root','nvidia');
 mysqli_set_charset($link,'utf8');

 $surname = $_POST['surname'];
 $firstname = $_POST['firstname'];
 $num = $_POST['num'];
 $tel = $_POST['tel'];
 $depart = $_POST['depart'];
 $duty = $_POST['duty'];
 $email = $_POST['email'];

 if (!empty($surname) && !empty($firstname) && !empty($num) && !empty($tel) && !empty($depart) && !empty($duty) && !empty($email)) {
 	$sql = "insert into worker(name,mobile,email,depart,duty) values('$surname$firstname','+$num-$tel','$email','$depart','$duty')";
 	mysqli_query($link,$sql);
  	echo 1;
 }else{
 	echo 2;
 }
 ?>