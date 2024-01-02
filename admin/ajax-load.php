<?php
	include('inc/config.php');
	
	$qs = "select * from category";
	
	$data = mysqli_query($con,$qs);
	
	$output="";
	
	if(mysqli_num_rows($data) > 0){
		$output = '<table class="table table-bordered" id="dataTable" width="1000px" cellspacing="0">
													<thead>
														<tr>
															<th>Category Id</th>
															<th>Category Name</th>
															<th>Edit</th>
															<th>Delete</th>
														</tr>
													</thead>
													<tfoot>
														<tr>
															<th>Category Id</th>
															<th>Category Name</th>
															<th>Edit</th>
															<th>Delete</th>
														</tr>
													</tfoot>
													<tbody>';
								
								while($row = mysqli_fetch_assoc($data)){
									$output .= "<tr>
																<td>{$row['cat_id']}</td>
																<td>{$row['cat_name']}</td>
																
																<td><button type='button' class='edit-btn btn btn-sm btn-success' style='border-radius:10px;' data-eid='{$row['cat_id']}'>Edit</button></td>
																
																<td><button type='button' class='delete-btn btn btn-sm btn-danger' style='border-radius:10px;' data-id='{$row['cat_id']}'>Delete</button></td>
															</tr>";
								}
			$output .= "</tbody></table>";
			
			mysqli_close($con);
			echo $output;
		}else{
		echo "<h2>No Records Found</h2>";
	}
?>							