<?php
	require "connect.php"; 
	$u_id = $_POST['u_id'];
	$score = $_POST['score'];
	$query = "INSERT INTO result VALUES('$u_id','$score')";
	$data = mysqli_query($connect,$query);
	if($data){
		$arr = array(
			'success' => true,
			'result' => "Add successfully"
		);
	}else{
		$arr = array(
			'success' => false,
			'result' => "Add unsuccessfully"
		);
	}
	echo json_encode($arr);
?>