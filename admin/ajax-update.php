<?php
	include('inc/config.php');
	
	$cat_id = $_POST['c_id'];
	$cat_name = $_POST["c_name"];
	
	$qs = "update category set cat_name='$cat_name' where cat_id='$cat_id'";
	
	if(mysqli_query($con,$qs)){
		echo 1;	
	}
	else
	{
		echo 0;
	}
?>