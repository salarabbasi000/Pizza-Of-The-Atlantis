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
	<title>Winkle I Fast build Admin dashboard for any platform</title>
	<meta name="description" content="Winkle is a Dashboard & Admin Site Responsive Template by hencework." />
	<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Winkle Admin, Winkleadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
	<meta name="author" content="hencework"/>
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

	<!-- Custom CSS -->
	<link href="dist/css/style.css" rel="stylesheet" type="text/css">
	
</head>

<body>
	
		<?php 
			include 'header.php';
			?>			
			

		<!-- Main Content -->
		<div class="page-wrapper">
			<div class="container">
				
				<!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
					  <h5 class="txt-dark">Menu Table</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li><a href="index.php">Dashboard</a></li>
						<li class="active"><span>Check Orders</span></li>
					  </ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->
				
				
				<div class="row">
					<!-- Basic Table -->
					<div class="col-sm-12">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Orders</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<!-- <p class="text-muted">Create style tables by wrapping any table with class <code>table  table-striped table-bordered</code> in <code>color-bg-table</code> class.</p> -->
									
									<div class="table-wrap mt-40">
										<div class="table-responsive">
											<table class="table table-striped table-bordered mb-0">
												<thead>
												  <tr>
													<th>#</th>
													<th>Email</th>
													<th>Address</th>
													<th>Contact</th>
													<th>Items (Along with quantity)</th>
													<th> </th>
													<th>Total</th>
													<th>Delete</th>
												  </tr>
												</thead>
												<tbody>

												<?php
											    $query="SELECT * FROM orders";
											    $exec=$con->query($query);
											    while ($arr=mysqli_fetch_array($exec))
											    {
											    ?>

												  <tr>
													<td><?php echo $arr['id']; ?></td>
													<td><?php echo $arr['email']; ?></td>
													<td><?php echo $arr['address']; ?></td>
													<td><?php echo $arr['contact']; ?></td>
													<td><?php echo $arr['items']; ?></td>
													<td><?php echo $arr['promo']; ?></td>
													<td><?php echo $arr['total']; ?></td>
													<td><p title="Delete"><button onclick="location.href='../php/deleteorder.php?id=<?php echo $arr['id'];?>';" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></button></p></td>	
													

												  </tr>
												<?php
											    }
											    ?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Basic Table -->
				</div>

				
				
			</div>
			
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
	
	<!-- Piety JavaScript -->
	<script src="../vendors/bower_components/peity/jquery.peity.min.js"></script>
	<script src="dist/js/peity-data.js"></script>
	
	<!-- Slimscroll JavaScript -->
	<script src="dist/js/jquery.slimscroll.js"></script>
	
	<!-- Owl JavaScript -->
	<script src="../vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
	
	<!-- Switchery JavaScript -->
	<script src="../vendors/bower_components/switchery/dist/switchery.min.js"></script>
	
	<!-- Fancy Dropdown JS -->
	<script src="dist/js/dropdown-bootstrap-extended.js"></script>
	
	<!-- Init JavaScript -->
	<script src="dist/js/init.js"></script>
	
</body>

</html>
