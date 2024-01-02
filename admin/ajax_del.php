<?php
	include('inc/config.php');
	$cat_id = $_POST['cat_id'];
	
	$qs = "delete from category where cat_id={$cat_id}";
	mysqli_query($con,$qs);
	
	if(mysqli_query($con,$qs)){
		echo 1;	
	}
	else
	{
		echo 0;
	}
?>