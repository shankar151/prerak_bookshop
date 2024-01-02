<?php
	include('inc/config.php');
	$book_id = $_POST['book_id'];
	
	$qs = "delete from books where book_id={$book_id}";
	mysqli_query($con,$qs);
	
	if(mysqli_query($con,$qs)){
		echo 1;	
	}
	else
	{
		echo 0;
	}
?>