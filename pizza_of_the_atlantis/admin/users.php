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
		
		<!-- switchery CSS -->
		<link href="../vendors/bower_components/switchery/dist/switchery.min.css" rel="stylesheet" type="text/css"/>
		
		<!-- Custom CSS -->
		<link href="dist/css/style.css" rel="stylesheet" type="text/css">
		
	</head>
	<body>
		
		<?php include 'header.php'; ?>
			
			<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container">
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
							<h5 class="txt-dark">Users</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
							<ol class="breadcrumb">
								<li><a href="index.php">Dashboard</a></li>
								<li class="active"><span>Users</span></li>
							</ol>
						</div>
						<!-- /Breadcrumb -->
					</div>
					<!-- /Title -->
					
					<!-- Row -->
					<div class="row">
						
						<?php

						function color($c)
						{
							if($c%5==0) return("info");
							if($c%5==1) return("success");
							if($c%5==2) return("warning");
							if($c%5==3) return("danger");
							if($c%5==4) return("primary");
						}



						$q=$con->query("SELECT * FROM users");
						$i=0;
						while($row=mysqli_fetch_array($q))
						{
						?>	

						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<div class="panel panel-<?php echo color($i); ?> contact-card card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<!-- <div class="pull-left user-img-wrap mr-15">
											<img class="card-user-img img-circle pull-left" src="../img/user4.png" alt="user"/>
										</div> -->
										<div class="pull-left user-detail-wrap">	
											<span class="block card-user-name">
												<?php echo $row['name']; ?>
											</span>
											<!-- <span class="block card-user-desn">
												designer
											</span> -->
										</div>
									</div>
									
									<div class="pull-right">
										<a class="pull-left inline-block mr-15" <?php if(!$row['is_admin']) { ?> href="updateuser.php?id=<?php echo $row['id']; ?>" <?php } else { ?> href="#" <?php } ?> >
											<i class="zmdi zmdi-edit txt-light"></i>
										</a>
										<a class="pull-left inline-block mr-15"  <?php if(!$row['is_admin']) { ?> href="../php/deleteuser.php?id=<?php echo $row['id']; ?>" <?php } else { ?> href="#" <?php } ?> >
											<i class="zmdi zmdi-delete txt-light"></i>
										</a>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body row">
										<div class="user-others-details pl-15 pr-15">
											<div class="mb-15">
												<i class="zmdi zmdi-email-open inline-block mr-10"></i>
												<span class="inline-block txt-dark"><?php echo $row['email']; ?></span>
											</div><!-- 
											<div class="mb-15">
												<i class="zmdi zmdi-smartphone inline-block mr-10"></i>
												<span class="inline-block txt-dark">9192372533</span>
											</div> -->
											<div class="mb-15">
												<i class="zmdi zmdi-phone inline-block mr-10"></i>
												<span class="inline-block txt-dark"><?php echo $row['contact']; ?></span>
											</div>
											<div>	
												<i class="zmdi zmdi zmdi-pin inline-block mr-10"></i>
												<span class="inline-block txt-dark"><?php echo $row['address']; ?></span>
											</div>
										</div>
										
									</div>
								</div>
							</div>
						</div>

						<?php $i++; } ?>

					<!-- Row -->
				</div>	
					
				<!-- Footer -->
				<?php include 'footer.php'; ?>
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
		
		<!-- Slimscroll JavaScript -->
		<script src="dist/js/jquery.slimscroll.js"></script>
	
		<!-- Fancy Dropdown JS -->
		<script src="dist/js/dropdown-bootstrap-extended.js"></script>		
		
		<!-- Owl JavaScript -->
		<script src="../vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
	
		<!-- Switchery JavaScript -->
		<script src="../vendors/bower_components/switchery/dist/switchery.min.js"></script>
	
		<!-- Init JavaScript -->
		<script src="dist/js/init.js"></script>
		
	</body>
</html>