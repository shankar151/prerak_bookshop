<?php
	include('inc/config.php');
	
	$c_id = $_POST["c_id"];
	$b_title = $_POST["b_title"];
	$b_price = $_POST["b_price"];
	$b_author = $_POST["b_author"];
	$b_description = $_POST["b_description"];
	
	$qs = "insert into books(book_cat,book_title,book_price,book_author,book_description)values('$c_id','$b_title','$b_price','$b_author','$b_description')";
	
	if(mysqli_query($con,$qs)){
		echo 1;	
	}
	else
	{
		echo 0;
	}
?>