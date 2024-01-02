<?php
include('inc/config.php');
	$cat_id = "";
	$cat_id = $_POST['cat_id'];
	
	$qs = "select * from category where cat_id={$cat_id}";
		$data = mysqli_query($con,$qs);
	$row = mysqli_fetch_assoc($data);
	
	echo $row['cat_name'];
?>