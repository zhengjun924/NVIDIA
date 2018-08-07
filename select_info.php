<?php 
	session_start();
	if (isset($_SESSION['select'])) {
		echo 1;
	}else{
		echo 2;
	}
	// print_r($_SESSION);
 ?>