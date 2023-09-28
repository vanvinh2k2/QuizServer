<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$database = "quiz";	
	$connect = mysqli_connect($host,$user,$pass,$database);
	mysqli_query($connect,"SET NAMES 'utf8'");
	/*if($connect){
		echo 'success';
	}*/
?>