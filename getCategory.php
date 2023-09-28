<?php
	require "connect.php";
	public $c_id;
	public $description;

	$query = "SELECT * FROM category";
	$data = mysqli_query($connect,$query);
	public class Category{
		function __construct($c_id,$description){
			$this->c_id = $c_id;
			$this->description = $description;
		}
	}
	$array = array();
	while($row = mysql_fetch_assoc($data)){
		array_push($array, new Category($row['c_id'],$row['description']));
	}
	if($array!=null){
		echo "Success";
	}else{
		echo "unSuccess";
	}
?>