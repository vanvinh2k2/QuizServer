<?php
	require "connect.php";
	$name = $_POST['name'];
	$pass = $_POST['pass'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$loai = $_POST['loai'];

	$query = "SELECT * FROM user WHERE email = '$email'";
	$data = mysqli_query($connect,$query);
	$number = mysqli_num_rows($data);
	if($number == 1){
		$arr = array(
			'success' => false,
			'result' => "Email da ton tai"
		);
	}
	else{
		$query = "INSERT INTO user VALUES(null,'$name','$pass','$email','$address','$loai')";
		$data = mysqli_query($connect,$query);
		if($data){
			$arr = array(
				'success' => true,
				'result' => "Save is successful"
			);
		}else{
			$arr = array(
				'success' => true,
				'result' => "Save is successful"
			);
		}
	}
	echo json_encode($arr);
?>