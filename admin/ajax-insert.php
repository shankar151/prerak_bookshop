<?php
	include('inc/config.php');
	
	$cat_name = $_POST["c_name"];
	
	$qs = "insert into category(cat_name)values('$cat_name')";
	
	if(mysqli_query($con,$qs)){
		echo 1;	
	}
	else
	{
		echo 0;
	}
	
?>