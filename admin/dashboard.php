<?php
	session_start();
	include('inc/config.php');
	
	$cat_name = "";
	
	if(!isset($_SESSION['admin_email']))
	{
		header('location:admin_login.php');
	}
	$admin_name = $_SESSION['admin_name'];
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="Anil z" name="author">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Shopwise is Powerful features and You Can Use The Perfect Build this Template For Any eCommerce Website. The template is built for sell Fashion Products, Shoes, Bags, Cosmetics, Clothes, Sunglasses, Furniture, Kids Products, Electronics, Stationery Products and Sporting Goods.">
		<meta name="keywords" content="ecommerce, electronics store, Fashion store, furniture store,  bootstrap 4, clean, minimal, modern, online store, responsive, retail, shopping, ecommerce store">
		
		<!-- SITE TITLE -->
		<title>Shopwise - eCommerce Bootstrap 5 HTML Template</title>
		<!-- Favicon Icon -->
		<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
		<!-- Animation CSS -->
		<link rel="stylesheet" href="assets/css/animate.css">	
		<!-- Latest Bootstrap min CSS -->
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
		<!-- Google Font -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet"> 
		<!-- Icon Font CSS -->
		<link rel="stylesheet" href="assets/css/all.min.css">
		<link rel="stylesheet" href="assets/css/ionicons.min.css">
		<link rel="stylesheet" href="assets/css/themify-icons.css">
		<link rel="stylesheet" href="assets/css/linearicons.css">
		<link rel="stylesheet" href="assets/css/flaticon.css">
		<link rel="stylesheet" href="assets/css/simple-line-icons.css">
		<!--- owl carousel CSS-->
		<link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.css">
		<link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.default.min.css">
		<!-- Magnific Popup CSS -->
		<link rel="stylesheet" href="assets/css/magnific-popup.css">
		<!-- jquery-ui CSS -->
		<link rel="stylesheet" href="assets/css/jquery-ui.css">
		<!-- Slick CSS -->
		<link rel="stylesheet" href="assets/css/slick.css">
		<link rel="stylesheet" href="assets/css/slick-theme.css">
		<!-- Style CSS -->
		<link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="assets/css/responsive.css">
		
		<style>
			#modal{
			background: rgba(0,0,0,0.7);
			position: fixed;
			left: 0;
			top:0;
			width:100%;
			height:100%;
			z-index:100;
			display:none;
			}
			
			#modal-form{
			background: #fff;
			width:50%;
			position:relative;
			top: 20%;
			left: calc(50%-15%);
			padding: 15px;
			border-radius: 4px;
			margin:auto;
			}
			
			#modal-form h2{
			margin: 0 0 15px;
			padding-bottom: 10px;
			border-bottom:1px solid #000;
			}
			#close-btn
			{
			background:red;
			color:white;
			width:30px;
			height:30px;
			line-height:30px;
			text-align:center;
			border-radius:50%;
			position:absolute;
			top:-15px;
			right:-15px;
			cursor:pointer;
			}
		</style>
	</head>
	
	<body>
		
		<!-- LOADER -->
		<!-- <div class="preloader">
			<div class="lds-ellipsis">
			<span></span>
			<span></span>
			<span></span>
			</div>
		</div> -->
		<!-- END LOADER -->
		
		<!-- Home Popup Section 
			<div class="modal fade subscribe_popup" id="onload-popup" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
			<div class="modal-body">
			<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
			<span aria-hidden="true"><i class="ion-ios-close-empty"></i></span>
			</button>
			<div class="row g-0">
			<div class="col-sm-5">
			<div class="background_bg h-100" data-img-src="assets/images/popup_img.jpg"></div>
			</div>
			<div class="col-sm-7">
			<div class="popup_content">
			<div class="popup-text">
			<div class="heading_s4">
			<h4>Subscribe and Get 25% Discount!</h4>
			</div>
			<p>Subscribe to the newsletter to receive updates about new products.</p>
			</div>
			<form method="post">
			<div class="form-group mb-3">
			<input name="email" required type="email" class="form-control rounded-0" placeholder="Enter Your Email">
			</div>
			<div class="form-group mb-3">
			<button class="btn btn-fill-line btn-block text-uppercase rounded-0" title="Subscribe" type="submit">Subscribe</button>
			</div>
			</form>
			<div class="chek-form">
			<div class="custome-checkbox">
			<input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox3" value="">
			<label class="form-check-label" for="exampleCheckbox3"><span>Don't show this popup again!</span></label>
			</div>
			</div>
			</div>
			</div>
			</div>
			</div>
    	</div>
			</div>
		</div>-->
		<!-- End Screen Load Popup Section --> 
		
		<!-- START HEADER -->
		<?php
			include('inc/header.php');
		?>
		<!-- END HEADER -->
		
		<!-- START SECTION BREADCRUMB -->
		<div class="breadcrumb_section bg_gray page-title-mini">
			<div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
        	<div class="col-md-6">
						<div class="page-title">
							<h1>ADMIN PANEL</h1>
						</div>
					</div>
					<div class="col-md-6">
						<ol class="breadcrumb justify-content-md-end">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item"><a href="#">Pages</a></li>
							<li class="breadcrumb-item active">My Account</li>
						</ol>
					</div>
				</div>
			</div><!-- END CONTAINER-->
		</div>
		<!-- END SECTION BREADCRUMB -->
		
		<!-- START MAIN CONTENT -->
		<div class="main_content">
			
			<!-- START SECTION SHOP -->
			<div class="section">
				<div class="container">
					<div class="row">
            <div class="col-lg-3 col-md-4">
							<div class="dashboard_menu">
								<ul class="nav nav-tabs flex-column" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" id="dashboard-tab" data-bs-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="false"><i class="ti-layout-grid2"></i>Admin Dashboard</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="cat" data-bs-toggle="tab" href="#category" role="tab" aria-controls="orders" aria-selected="false"><i class="ti-shopping-cart-full"></i>Add Category</a>
									</li>
									
									<li class="nav-item">
										<a class="nav-link" id="cat" data-bs-toggle="tab" href="#book" role="tab" aria-controls="orders" aria-selected="false"><i class="ti-shopping-cart-full"></i>Add New Book</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="orders-tab" data-bs-toggle="tab" href="#orders" role="tab" aria-controls="orders" aria-selected="false"><i class="ti-shopping-cart-full"></i>Orders</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="address-tab" data-bs-toggle="tab" href="#address" role="tab" aria-controls="address" aria-selected="true"><i class="ti-location-pin"></i>My Address</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="account-detail-tab" data-bs-toggle="tab" href="#account-detail" role="tab" aria-controls="account-detail" aria-selected="true"><i class="ti-id-badge"></i>Account details</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="admin_logout.php"><i class="ti-lock"></i>Logout</a>
									</li>
								</ul>
							</div>
						</div>
            <div class="col-lg-9 col-md-8">
							<div class="tab-content dashboard_content">
								<div class="tab-pane fade active show" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
									<div class="card">
										<div class="card-header">
											<h3>Dashboard</h3>
										</div>
										<div class="card-body">
											<h4><font color="brown">Welcome The Owner Of Prerak Bookshop Mr.<?php echo $admin_name; ?></font></h4>
											<p>From your account dashboard. you can easily check &amp; view your <a href="javascript:void(0);" onclick="$('#orders-tab').trigger('click')">recent orders</a>, manage your <a href="javascript:void(0);" onclick="$('#address-tab').trigger('click')">shipping and billing addresses</a> and <a href="javascript:void(0);" onclick="$('#account-detail-tab').trigger('click')">edit your password and account details.</a></p>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="category" role="tabpanel" aria-labelledby="cat-tab">
									<form id="addForm">
										<div class="card">
											<div class="card-header">
												<h3>Add Category</h3>
											</div>
											<div class="card-body">
												<div class="table-responsive">
													<table class="table">
														<thead>
															<tr>
																<th>Sr. No</th>
																<th><label>Category Name <span class="required">*</span></label></th>
																<th>Operation</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>1</td>
																
																<td>
																	<input required class="form-control" type="hidden" id="cat_id"placeholder="Category Id">
																	<input required class="form-control" type="text" id="cat_name"placeholder="Category Name">
																</td>
																<td>
																	<button type="submit" id="save-button" class="btn btn-fill-out btn-sm" >Save</button>
																	<button type="submit" class="btn btn-fill-out btn-sm" id="update">Update</button>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</form>
									
									<br/><br/>
									<div><h4>Category Details</h4>
									</div>
									<div id="msg"></div>
									<form method="GET">
										<div class="card-body">
											<div class="table-responsive" id="table-data">
												<!--This is table data of ajax-load.php-->
											</div>
										</div>
									</form>
								</div>
								
								<div class="tab-pane fade" id="book" role="tabpanel" aria-labelledby="cat-tab">
									<form id="">
										<div class="card">
											<div class="card-header">
												<h3>Add Book</h3>
											</div>
											<div class="card-body">
												<div class="table-responsive">
													<table class="table">
														<thead>
															
														</thead>
														<tbody>
															<tr>
																<td>
																	<select class="form-control"  id="c_id">
																		<option>--Select Book Category--</option>
																		<?php
																			$qs = "select * from category";
																			$data = mysqli_query($con,$qs);
																			
																			while($row = mysqli_fetch_array($data,MYSQLI_BOTH))
																			{
																			?>
																			<option value="<?php echo $row['cat_id'];?>"><?php echo $row['cat_name'];?></option>
																			<?php
																			}
																		?>
																	</select>
																</td>
																<td>
																	<input required class="form-control" id="b_title" type="text" placeholder="Book title">
																</td>
															</tr>
															
															<tr>
																<td>
																	<input required class="form-control" id="b_price" type="text" placeholder="Book price">
																</td>
																
																<td><input required class="form-control" id="b_author" type="text" placeholder="Book author">
																</td>
															</tr>
															
															<tr>
																<td><input required class="form-control" id="b_description" type="text" placeholder="Book description">
																</td>
																
																<td><input required class="form-control" id="b_image" type="file" placeholder="Book image">
																</td>
															</tr>
															<tr>
																<td>
																	<button type="submit" id="save_b" class="btn btn-fill-out btn-sm">Save</button>
																	<button type="submit" name="update" class="btn btn-fill-out btn-sm">Update</button>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</form>
									
									<div id="modal">
										<div id="modal-form">
											<h2>Edit Form</h2>
											<table class="table" width="100%" cellspacing="0" cellpadding="10">
											</table>
											<div id="close-btn">X</div>
										</div>
									</div>
									
									<br/><br/>
									
									<div><h4>Add Book Details</h4></div>
									<form method="GET">
										<div class="card-body">
											<div class="table-responsive" id="tabledatab">
												<!--Add book table ajax-book-load.php-->
											</div>
										</div>
									</form>
									
								</div>
								<div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
									<div class="card">
										<div class="card-header">
											<h3>Orders</h3>
										</div>
										<div class="card-body">
											<div class="table-responsive">
												<table class="table">
													<thead>
														<tr>
															<th>Order</th>
															<th>Date</th>
															<th>Status</th>
															<th>Total</th>
															<th>Actions</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>#1234</td>
															<td>March 15, 2020</td>
															<td>Processing</td>
															<td>$78.00 for 1 item</td>
															<td><a href="#" class="btn btn-fill-out btn-sm">View</a></td>
														</tr>
														<tr>
															<td>#2366</td>
															<td>June 20, 2020</td>
															<td>Completed</td>
															<td>$81.00 for 1 item</td>
															<td><a href="#" class="btn btn-fill-out btn-sm">View</a></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab">
									<div class="row">
										<div class="col-lg-6">
											<div class="card mb-3 mb-lg-0">
												<div class="card-header">
													<h3>Billing Address</h3>
												</div>
												<div class="card-body">
													<address>House #15<br>Road #1<br>Block #C <br>Angali <br> Vedora <br>1212</address>
													<p>New York</p>
													<a href="#" class="btn btn-fill-out">Edit</a>
												</div>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="card">
												<div class="card-header">
													<h3>Shipping Address</h3>
												</div>
												<div class="card-body">
													<address>House #15<br>Road #1<br>Block #C <br>Angali <br> Vedora <br>1212</address>
													<p>New York</p>
													<a href="#" class="btn btn-fill-out">Edit</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="account-detail" role="tabpanel" aria-labelledby="account-detail-tab">
									<div class="card">
										<div class="card-header">
											<h3>Account Details</h3>
										</div>
										<div class="card-body">
											<p>Already have an account? <a href="#">Log in instead!</a></p>
											<form method="post" name="enq">
												<div class="row">
													<div class="form-group col-md-6 mb-3">
														<label>First Name <span class="required">*</span></label>
														<input required="" class="form-control" name="name" type="text">
													</div>
													<div class="form-group col-md-6 mb-3">
														<label>Last Name <span class="required">*</span></label>
														<input required="" class="form-control" name="phone">
													</div>
													<div class="form-group col-md-12 mb-3">
														<label>Display Name <span class="required">*</span></label>
														<input required="" class="form-control" name="dname" type="text">
													</div>
													<div class="form-group col-md-12 mb-3">
														<label>Email Address <span class="required">*</span></label>
														<input required="" class="form-control" name="email" type="email">
													</div>
													<div class="form-group col-md-12 mb-3">
														<label>Current Password <span class="required">*</span></label>
														<input required="" class="form-control" name="password" type="password">
													</div>
													<div class="form-group col-md-12 mb-3">
														<label>New Password <span class="required">*</span></label>
														<input required="" class="form-control" name="npassword" type="password">
													</div>
													<div class="form-group col-md-12 mb-3">
														<label>Confirm Password <span class="required">*</span></label>
														<input required="" class="form-control" name="cpassword" type="password">
													</div>
													<div class="col-md-12">
														<button type="submit" class="btn btn-fill-out" name="submit" value="Submit">Save</button>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END SECTION SHOP -->
			
			<!-- START SECTION SUBSCRIBEl NEWSLETTER -->
			<div class="section bg_default small_pt small_pb">
				<div class="container">	
					<div class="row align-items-center">	
            <div class="col-md-6">
							<div class="heading_s1 mb-md-0 heading_light">
								<h3>Subscribe Our Newsletter</h3>
							</div>
						</div>
            <div class="col-md-6">
							<div class="newsletter_form">
								<form>
									<input type="text" required="" class="form-control rounded-0" placeholder="Enter Email Address">
									<button type="submit" class="btn btn-dark rounded-0" name="submit" value="Submit">Subscribe</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- START SECTION SUBSCRIBE NEWSLETTER -->
			
		</div>
		<!-- END MAIN CONTENT -->
		
		<!-- START FOOTER -->
		<?php include('inc/footer.php');?>
		<!-- END FOOTER -->
		
		<a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a> 
		
		<!-- Latest jQuery --> 
		<script src="assets/js/jquery-3.6.0.min.js"></script> 
		<!-- jquery-ui --> 
		<script src="assets/js/jquery-ui.js"></script>
		<!-- popper min js -->
		<script src="assets/js/popper.min.js"></script>
		<!-- Latest compiled and minified Bootstrap --> 
		<script src="assets/bootstrap/js/bootstrap.min.js"></script> 
		<!-- owl-carousel min js  --> 
		<script src="assets/owlcarousel/js/owl.carousel.min.js"></script> 
		<!-- magnific-popup min js  --> 
		<script src="assets/js/magnific-popup.min.js"></script> 
		<!-- waypoints min js  --> 
		<script src="assets/js/waypoints.min.js"></script> 
		<!-- parallax js  --> 
		<script src="assets/js/parallax.js"></script> 
		<!-- countdown js  --> 
		<script src="assets/js/jquery.countdown.min.js"></script> 
		<!-- imagesloaded js --> 
		<script src="assets/js/imagesloaded.pkgd.min.js"></script>
		<!-- isotope min js --> 
		<script src="assets/js/isotope.min.js"></script>
		<!-- jquery.dd.min js -->
		<script src="assets/js/jquery.dd.min.js"></script>
		<!-- slick js -->
		<script src="assets/js/slick.min.js"></script>
		<!-- elevatezoom js -->
		<script src="assets/js/jquery.elevatezoom.js"></script>
		<!-- scripts js --> 
		<script src="assets/js/scripts.js"></script>
		
		
		
		<script>
			//load table
			$(document).ready(function(){
				function loadTable(){
					$.ajax({
						url : "ajax-load.php",
						type : "POST",
						success :function(data){
							$("#table-data").html(data);
						}
					});
				}
				loadTable();
				
				//Insert New Records
				$("#save-button").on("click",function(e){
					e.preventDefault();
					var cat_name = $("#cat_name").val();
					
					if(cat_name == "")
					{
						alert('Please insert required details.');
					}
					else
					{
						$.ajax({
							url : "ajax-insert.php",
							type : "POST",
							data : {c_name:cat_name},
							success :function(data){
								if(data== 1)
								{
									loadTable();
									$("#addForm").trigger("reset");
								}
								else
								{
									alert("can't save records");
								}
							}
						});
					}
				});
				
				//Delete Records
				
				$(document).on("click",".delete-btn-b",function(){
					var cat_id = $(this).data("id");
					var element = this;
					var x = confirm('Are you sure to DELETE this record.');
					
					if(x == true)
					{
						$.ajax({
							url : "ajax_del.php",
							type : "POST",
							data : {cat_id : cat_id},
							success :function(data){
								if(data == 1){
									$(element).closest("tr").fadeOut();
								}
								else
								{
									alert("Can't deleted");
								}
							}
						});
					}
				});
				
				//Edit and print records in input text box.
				
				$(document).on("click",".edit-btn",function(){
					var cat_id = $(this).data("eid");
					
					$.ajax({
						url : "ajax_editb.php",
						type : "POST",
						data : {cat_id : cat_id},
						success :function(data){
							$("#cat_name").val(data);
							$("#cat_id").val(cat_id);
						}
					});
				});
				
				//Update Records
				
				$("#update").on("click",function(e){
					e.preventDefault();
					
					var cat_name = $("#cat_name").val();
					var cat_id = $("#cat_id").val();
					var element = this;
					if(cat_name == "")
					{
						alert('Please insert required details.');
					}
					else
					{
						$.ajax({
							url : "ajax-update.php",
							type : "POST",
							data : {c_name:cat_name, c_id:cat_id},
							success :function(data){
								if(data== 1)
								{
									loadTable();
									$(element).closest("tr").fadeIn();
									$("#addForm").trigger("reset");
								}
								else
								{
									alert("can't save records");
								}
							}
						});
					}
				});
			});
		</script>
		
		
		
		
		<!--ADD BOOK AJAX-->
		
		<script>
			//load table
			$(document).ready(function(){
				function loadTableB(){
					$.ajax({
						url : "ajax-book-load.php",
						type : "POST",
						success :function(data){
							$("#tabledatab").html(data);
						}
					});
				}
				loadTableB();
				
				//Insert New Records
				$("#save_b").on("click",function(e){
					e.preventDefault();
					var c_id = $("#c_id").val();
					var b_title = $("#b_title").val();
					var b_price = $("#b_price").val();
					var b_author = $("#b_author").val();
					var b_description = $("#b_description").val();
					//var b_title = $("#b_title").val();
					
					if(c_id == "" && b_title == "" && b_price == "" && b_author == "" && b_description == "")
					{
						alert('Please insert required details.');
					}
					else
					{
						$.ajax({
							url : "ajax-book-insert.php",
							type : "POST",
							data : {c_id:c_id, b_title:b_title, b_price:b_price, b_author:b_author, b_description:b_description},
							success :function(data){
								if(data== 1)
								{
									loadTableB();
									$("#formTable2").trigger("reset");
								}
								else
								{
									alert("can't save records");
								}
							}
						});
					}
				});
				
				//Delete Records
				
				$(document).on("click",".delete-b-btn",function(){
					var book_id = $(this).data("bid");
					var element = this;
					var x = confirm('Are you sure to DELETE this record.');
					
					if(x == true)
					{
						$.ajax({
							url : "ajax_del_b.php",
							type : "POST",
							data : {book_id : book_id},
							success :function(data){
								if(data == 1){
									$(element).closest("tr").fadeOut();
								}
								else
								{
									alert("Can't deleted");
								}
							}
						});
					}
				});
				
				//Show modal box and print with edit button 
				
				$(document).on("click",".edit-b-btn",function(){
					$("#modal").show();
					var book_id = $(this).data("ebid");
					
					$.ajax({
						url : "ajax_edit_ab.php",
						type : "POST",
						data : {book_id : book_id},
						success :function(data){
							$("#modal-form table").html(data);
						}
					});
				});
				
				//Hide modal box
				
				$("#close-btn").on("click",function(){
					$("#modal").hide();
				});
				
				//Update Records
				
				$("#update").on("click",function(e){
					e.preventDefault();
					
					var cat_name = $("#cat_name").val();
					var cat_id = $("#cat_id").val();
					var element = this;
					if(cat_name == "")
					{
						alert('Please insert required details.');
					}
					else
					{
						$.ajax({
							url : "ajax-update.php",
							type : "POST",
							data : {c_name:cat_name, c_id:cat_id},
							success :function(data){
								if(data== 1)
								{
									loadTable();
									$(element).closest("tr").fadeIn();
									$("#addForm").trigger("reset");
								}
								else
								{
									alert("can't save records");
								}
							}
						});
					}
				});
			});
		</script>
		<!--pagination data table-->
		<script src="table_js/jquery.dataTables.min.js"></script>
    <script src="table_js/dataTables.bootstrap4.min.js"></script>
    <script src="table_js/datatables-demo.js"></script>
	</body>
</html>