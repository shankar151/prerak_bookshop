<?php
	include('inc/config.php');
	
	$cat_id = $_GET['edit'];
	
	$qs = "select * from category where cat_id='$cat_id'";
	$data = mysqli_query($con,$qs);
	$row = mysqli_fetch_array($data,MYSQLI_BOTH);
	
	echo $cat_name = $row['cat_name'];
?>