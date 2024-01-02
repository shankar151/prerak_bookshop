<?php
	include('inc/config.php');
	
	$qs = "select * from books inner join category where book_cat=cat_id";
	
	$data = mysqli_query($con,$qs);
	
	$output="";
	
		if(mysqli_num_rows($data) > 0){
		$output = '<table class="table table-bordered" id="dataTable" width="1000px" cellspacing="0">
													<thead>
														<tr>
															<th>Book Id</th>
															<th>Book Image</th>
															<th>Book category</th>
															<th>Book title</th>
															<th>Book price</th>
															<th>Book author</th>
															<th>Book description</th>
															<th>Edit</th>
															<th>Delete</th>
														</tr>
													</thead>
													<tfoot>
														<tr>
															<th>Book Id</th>
															<th>Book Image</th>
															<th>Book category</th>
															<th>Book title</th>
															<th>Book price</th>
															<th>Book author</th>
															<th>Book description</th>
															<th>Edit</th>
															<th>Delete</th>
														</tr>
													</tfoot>
													<tbody>';
								
								while($row = mysqli_fetch_assoc($data)){
									$output .= "<tr>
																<td>{$row['book_id']}</td>
																<td><img src='{$row['book_img']}'></td>
																<td>{$row['cat_name']}</td>
																<td>{$row['book_title']}</td>
																<td>{$row['book_price']}</td>
																<td>{$row['book_author']}</td>
																<td>{$row['book_description']}</td>
																
																
																<td><button type='button' class='edit-b-btn btn btn-sm btn-success' style='border-radius:10px;' data-ebid='{$row['book_id']}'>Edit</button></td>
																
																<td><button type='button' class='delete-b-btn btn btn-sm btn-danger' style='border-radius:10px;' data-bid='{$row['book_id']}'>Delete</button></td>
															</tr>";
								}
			$output .= "</tbody></table>";
			
			mysqli_close($con);
			echo $output;
		}else{
		echo "<h2>No Records Found</h2>";
	}
	?>	