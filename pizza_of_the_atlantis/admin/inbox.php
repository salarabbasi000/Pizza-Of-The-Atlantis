<?php 
include "../classes/db/connect.php";

session_start();
if(!isset($_SESSION['abc']))
echo "<script>alert('You need to login first!'); location.href='../admin/login.php'</script>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Admin - Pizza Of The Atlantis</title>
	<meta name="description" content="Winkle is a Dashboard & Admin Site Responsive Template by hencework." />
	<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Winkle Admin, Winkleadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
	<meta name="author" content="hencework"/>
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	
	<!-- Bootstrap Wysihtml5 css -->
	<link rel="stylesheet" href="../vendors/bower_components/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.css" />
		
	<!-- Custom CSS -->
	<link href="dist/css/style.css" rel="stylesheet" type="text/css">
	
</head>

<body>
			
	<?php
		include 'header.php';
	?>	

		<div class="page-wrapper">
				<div class="container">
				<!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
					  <h5 class="txt-dark">Messages</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li><a href="index.php">Dashboard</a></li>
						<li class="active"><span>Messages</span></li>
					  </ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->
				
				<!-- Row -->
				<div class="row">
					
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Send an offer message to our users:</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="streamline user-activity">

									
										
										<div class="sl-item">
											<a href="javascript:void(0)">
												<div class="sl-content">

													<form action="../php/offermail.php" method="post">
														<textarea name="offer" placeholder="Mail all our users any offer, discount, or promo code." style="width: 100%; height: 2cm"></textarea>
													
													<br><br>
													<button type="submit" name="sendmsg" class="btn btn-block btn-xl btn-warning">
														<i class="ti-email"></i>
													</button>
													</form>

												</div>
											</a>
										</div>

									

									</div>
								</div>
							</div>
						</div>
					</div>	
				</div>	
				<!-- Row -->

				<!-- Row -->
				<div class="row">
					
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Messages (Feedback):</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="streamline user-activity">

									<?php
										$q=$con->query("SELECT * FROM feedback");
										while ($row=mysqli_fetch_array($q)) {
											# code...	
									?>
										
										<div class="sl-item">
											<a href="javascript:void(0)">
												<div class="sl-content">
													<p class="inline-block"><span class="capitalize-font txt-primary mr-5 weight-500"><?php echo $row['name']; ?></span><span><?php echo $row['message']; ?></span></p>
													<button class="btn btn-md btn-danger" style="float: right;" onclick="location.href='../php/deletefeedback.php?id=<?php echo $row['id'] ; ?>'">
														<i class="ti-trash"></i>
													</button>

													<form action="../php/reply.php?id=<?php echo $row['id'] ; ?>" method="post">
													<input type="text" name="reply" placeholder="Reply" style="width: 50%">
													<button type="submit" name="send" class="btn btn-xs btn-primary">
														<i class="ti-email"></i>
													</button>
													</form>

													<!-- <button class="btn btn-xs btn-primary" style="float: right;">
														<i class="ti-email"></i>
													</button> -->
													<span class="block txt-grey font-12 capitalize-font"><?php echo date('M j Y g:i A', strtotime($row['timestamp']));?></span>
												</div>
											</a>
										</div>

									<?php
									}
									?>

									</div>
								</div>
							</div>
						</div>
					</div>	
				</div>	
				<!-- Row -->
			
			<!-- Footer -->
			<?php  
				include 'footer.php';
				?>
			<!-- /Footer -->
			
        </div>
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->
	
	<!-- JavaScript -->
	
    <!-- jQuery -->
    <script src="../vendors/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	
	<!-- wysuhtml5 Plugin JavaScript -->
	<script src="../vendors/bower_components/wysihtml5x/dist/wysihtml5x.min.js"></script>
	
	<script src="../vendors/bower_components/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.all.js"></script>
	
	<!-- Fancy Dropdown JS -->
	<script src="dist/js/dropdown-bootstrap-extended.js"></script>
	
	<!-- Bootstrap Wysuhtml5 Init JavaScript -->
	<script src="dist/js/bootstrap-wysuhtml5-data.js"></script>
	
	<!-- Slimscroll JavaScript -->
	<script src="dist/js/jquery.slimscroll.js"></script>
	
	<!-- Owl JavaScript -->
	<script src="../vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
	
	<!-- Switchery JavaScript -->
	<script src="../vendors/bower_components/switchery/dist/switchery.min.js"></script>
	
	<!-- Init JavaScript -->
	<script src="dist/js/init.js"></script>
	
</body>

</html>
