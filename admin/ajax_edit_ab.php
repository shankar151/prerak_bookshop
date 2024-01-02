<?php
	include('inc/config.php');
	$book_id = "";
	$book_id = $_POST['book_id'];
	
	$qs = "select * from books inner join category on book_cat=cat_id where book_id={$book_id}";
	$data = mysqli_query($con,$qs);
	$row = mysqli_fetch_assoc($data);
	
	$qe='select * from category';
	$data = mysqli_query($con,$qe);
	
	$output="";
	
	if(mysqli_num_rows($data) > 0){
		$output = "<tr>
		<td>
		<select class='form-control' id='edit_cat_id'>";
		
		while($op=mysqli_fetch_array($data,MYSQLI_BOTH)){
			
			if($row['book_cat']==($op['cat_id']))
			{
				$output.="<option value='".$op['cat_id']."' selected>".$op['cat_name']."</option>";;
			}
			else
			{
				$output.="<option value='".$op['cat_id']."'>".$op['cat_name']."</option>";
			}
		}
		$output.="</select>
		</td>
		<td>
		<input required class='form-control' id='edit_title' type='text' placeholder='Book title' value='{$row["book_title"]}'>
		<input required class='form-control' id='edit_book_id' type='text' placeholder='Book title' value='{$row["book_id"]}'>
		</td>
		</tr>
		
		<tr>
		<td>
		<input required class='form-control' id='edit_price' type='text' placeholder='Book price' value='{$row["book_price"]}'>
		</td>
		
		<td><input required class='form-control' id='edit_author' type='text' placeholder='Book author' value='{$row["book_author"]}'>
		</td>
		</tr>
		
		<tr>
		<td><input required class='form-control' id='edit_description' type='text' placeholder='Book description' value='{$row["book_description"]}'>
		</td>
		
		<td><input required class='form-control' id='edit_image' type='file' placeholder='Book image'>
		</td>
		</tr>
		<tr>
		<td></td>
		<td>
		<button type='submit' id='upd_b' class='btn btn-fill-out btn-sm'>Update</button>
		</td>
		</tr>";
		
		mysqli_close($con);
		echo $output;
		}else{
		echo "<h2>No Records Found</h2>";
	}
?>
