<?php
	require "connect.php";
	$name_question = $_POST['name_question'];
	$category = $_POST['category'];
	$sentence_a = $_POST['sentence_a'];
	$sentence_b = $_POST['sentence_b'];
	$sentence_c = $_POST['sentence_c'];
	$sentence_d = $_POST['sentence_d'];
	$answer = $_POST['answer'];

	$query = "INSERT INTO question VALUES(null,'$name_question','$category','$sentence_a','$sentence_b','$sentence_c','$sentence_d','$answer')";
	$data = mysqli_query($connect,$query);
	if($data){
		$arr = array(
			'success' => true,
			'result' => "Add successfully"
		);
	}else{
		$arr = array(
			'success' => false,
			'result' => "Add unsuccessfully!"
		);
	}
	echo json_encode($arr);
?>