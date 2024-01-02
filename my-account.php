<?php
	session_start();
	include('inc/config.php');
	
	if(!isset($_SESSION['email']))
	{
		header('location:login.php');
	}
	$name = $_SESSION['name'];
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
							<h1>My Account</h1>
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
										<a class="nav-link active" id="dashboard-tab" data-bs-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="false"><i class="ti-layout-grid2"></i>Dashboard</a>
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
										<a class="nav-link" href="logout.php"><i class="ti-lock"></i>Logout</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="login.php"><i class="ti-lock"></i>ccc</a>
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
											<h4><font color="brown">Welcome <?php echo $name; ?> To Prerak Bookshop</font></h4>
											<p>From your account dashboard. you can easily check &amp; view your <a href="javascript:void(0);" onclick="$('#orders-tab').trigger('click')">recent orders</a>, manage your <a href="javascript:void(0);" onclick="$('#address-tab').trigger('click')">shipping and billing addresses</a> and <a href="javascript:void(0);" onclick="$('#account-detail-tab').trigger('click')">edit your password and account details.</a></p>
										</div>
									</div>
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
			
			<!-- START SECTION SUBSCRIBE NEWSLETTER -->
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
		<footer class="footer_dark">
			<div class="footer_top">
        <div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-12">
							<div class="widget">
								<div class="footer_logo">
									<a href="#"><img src="assets/images/logo_light.png" alt="logo"/></a>
								</div>
								<p>If you are going to use of Lorem Ipsum need to be sure there isn't hidden of text</p>
							</div>
							<div class="widget">
								<ul class="social_icons social_white">
									<li><a href="#"><i class="ion-social-facebook"></i></a></li>
									<li><a href="#"><i class="ion-social-twitter"></i></a></li>
									<li><a href="#"><i class="ion-social-googleplus"></i></a></li>
									<li><a href="#"><i class="ion-social-youtube-outline"></i></a></li>
									<li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-2 col-md-3 col-sm-6">
							<div class="widget">
								<h6 class="widget_title">Useful Links</h6>
								<ul class="widget_links">
									<li><a href="#">About Us</a></li>
									<li><a href="#">FAQ</a></li>
									<li><a href="#">Location</a></li>
									<li><a href="#">Affiliates</a></li>
									<li><a href="#">Contact</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-2 col-md-3 col-sm-6">
							<div class="widget">
								<h6 class="widget_title">Category</h6>
								<ul class="widget_links">
									<li><a href="#">Men</a></li>
									<li><a href="#">Woman</a></li>
									<li><a href="#">Kids</a></li>
									<li><a href="#">Best Saller</a></li>
									<li><a href="#">New Arrivals</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="widget">
								<h6 class="widget_title">My Account</h6>
								<ul class="widget_links">
									<li><a href="#">My Account</a></li>
									<li><a href="#">Discount</a></li>
									<li><a href="#">Returns</a></li>
									<li><a href="#">Orders History</a></li>
									<li><a href="#">Order Tracking</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="widget">
								<h6 class="widget_title">Contact Info</h6>
								<ul class="contact_info contact_info_light">
									<li>
										<i class="ti-location-pin"></i>
										<p>123 Street, Old Trafford, New South London , UK</p>
									</li>
									<li>
										<i class="ti-email"></i>
										<a href="mailto:info@sitename.com">info@sitename.com</a>
									</li>
									<li>
										<i class="ti-mobile"></i>
										<p>+ 457 789 789 65</p>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="bottom_footer border-top-tran">
        <div class="container">
					<div class="row">
						<div class="col-md-6">
							<p class="mb-md-0 text-center text-md-start">© 2020 All Rights Reserved by Bestwebcreator</p>
						</div>
						<div class="col-md-6">
							<ul class="footer_payment text-center text-lg-end">
								<li><a href="#"><img src="assets/images/visa.png" alt="visa"></a></li>
								<li><a href="#"><img src="assets/images/discover.png" alt="discover"></a></li>
								<li><a href="#"><img src="assets/images/master_card.png" alt="master_card"></a></li>
								<li><a href="#"><img src="assets/images/paypal.png" alt="paypal"></a></li>
								<li><a href="#"><img src="assets/images/amarican_express.png" alt="amarican_express"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
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
		
	</body>
</html>