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
		<!-- vector map CSS -->
		<link href="../vendors/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" type="text/css"/>
		
		<!-- Footable CSS -->
		<link href="../vendors/bower_components/FooTable/compiled/footable.bootstrap.min.css" rel="stylesheet" type="text/css"/>
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
							<li class="active"><span>Table</span></li>
							<li class="active"><span>Menu Table</span></li>
						  </ol>
						</div>
						<!-- /Breadcrumb -->
					</div>
					<!-- /Title -->
					
					
					
					<!-- Row -->
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Pizza DataTable</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="table-wrap">
								<table id="mytable" class="table table-bordred table-striped">
                   
									    <thead>
									        <th>ID</th>
									        <th>Name</th>
									        <th>Description</th>
									        <th>Price (Small)</th>
									        <th>Price (Medium)</th>
									        <th>Price (Large)</th>
									        <th>TimeStamp</th>
									        <th>Edit</th>
									        <th>Delete</th>
									    </thead>

									    <tbody>
									    
									    <?php

									    $query="SELECT * FROM pizza";
									    $exec=$con->query($query);

									    while ($arr=mysqli_fetch_array($exec))
									    {

									    ?>
									    <tr>
									    <td><?php echo $arr['id']; ?></td>
									    <td><?php echo $arr['name']; ?></td>
									    <td><?php echo $arr['description']; ?></td>
									    <td><?php echo $arr['small_price']; ?></td>
									    <td><?php echo $arr['medium_price']; ?></td>
									    <td><?php echo $arr['large_price']; ?></td>
									    <td><?php echo $arr['timestamp']; ?></td>
									    <td><p title="Edit"><button onclick="location.href='updatepizza.php?id=<?php echo $arr['id'];?>';" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
									    <td><p title="Delete"><button onclick="location.href='../php/deletepizza.php?id=<?php echo $arr['id'];?>';" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></button></p></td>
									    </tr>
									    <?php
									    }
									    ?>

								    </tbody>

							    </table>
							    		<button style="float: right;" class="btn btn-lg btn-warning" onclick="location.href='addpizza.php';" >Enter Pizza Details</button>
									</div>
								</div>
							</div>
							</div>
						</div>
					</div>
					<!-- /Row -->
					



					<!-- Row -->
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Starter DataTable</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="table-wrap">
								<table id="mytable" class="table table-bordred table-striped">
                   
									    <thead>
									        <th>ID</th>
									        <th>Name</th>
									        <th>Description</th>
									        <th>Pieces/Serving</th>
									        <th>Price</th>
									        <th>TimeStamp</th>
									        <th>Edit</th>
									        <th>Delete</th>
									    </thead>

									    <tbody>
									    
									    <?php

									    $query="SELECT * FROM starter";
									    $exec=$con->query($query);

									    while ($arr=mysqli_fetch_array($exec))
									    {

									    ?>
									    <tr>
									    <td><?php echo $arr['id']; ?></td>
									    <td><?php echo $arr['name']; ?></td>
									    <td><?php echo $arr['description']; ?></td>
									    <td><?php echo $arr['pieces_or_servings']; ?></td>
									    <td><?php echo $arr['price']; ?></td>
									    <td><?php echo $arr['timestamp']; ?></td>
									    <td><p title="Edit"><button onclick="location.href='updatestarter.php?id=<?php echo $arr['id'];?>';" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
									    <td><p title="Delete"><button onclick="location.href='../php/deletestarter.php?id=<?php echo $arr['id'];?>';" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></button></p></td>
									    </tr>
									    <?php
									    }
									    ?>

								    </tbody>

							    </table>
							    		<button style="float: right;" class="btn btn-lg btn-warning" onclick="location.href='addstarter.php';" >Enter Starter Details</button>
									</div>
								</div>
							</div>
							</div>
						</div>
					</div>
					<!-- /Row -->



					<!-- Row -->
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Breverages DataTable</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="table-wrap">
								<table id="mytable" class="table table-bordred table-striped">
                   
									    <thead>
									        <th>ID</th>
									        <th>Name</th>
									        <th>Price (Small)</th>
									        <th>Price (Half Litre)</th>
									        <th>TimeStamp</th>
									        <th>Edit</th>
									        <th>Delete</th>
									    </thead>

									    <tbody>
									    
									    <?php

									    $query="SELECT * FROM breverage";
									    $exec=$con->query($query);

									    while ($arr=mysqli_fetch_array($exec))
									    {

									    ?>
									    <tr>
									    <td><?php echo $arr['id']; ?></td>
									    <td><?php echo $arr['name']; ?></td>
									    <td><?php echo $arr['small_price']; ?></td>
									    <td><?php echo $arr['half_litre_price']; ?></td>
									    <td><?php echo $arr['timestamp']; ?></td>
									    <td><p title="Edit"><button onclick="location.href='updatebreverage.php?id=<?php echo $arr['id'];?>';" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
									    <td><p title="Delete"><button onclick="location.href='../php/deletebreverage.php?id=<?php echo $arr['id'];?>';" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></button></p></td>
									    </tr>
									    <?php
									    }
									    ?>

								    </tbody>

							    </table>
							    		<button style="float: right;" class="btn btn-lg btn-warning" onclick="location.href='addbreverage.php';" >Enter Breverage Details</button>
									</div>
								</div>
							</div>
							</div>
						</div>
					</div>
					<!-- /Row -->

			<!-- Footer -->
			<?php  
			include 'footer.php';
			?>
			<!-- /Footer -->
					
				</div>
			</div>
			<!-- /Main Content -->
		
		</div>
		<!-- /#wrapper -->
		
		<!-- JavaScript -->
		
		<!-- jQuery -->
		<script src="../vendors/bower_components/jquery/dist/jquery.min.js"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		
		<!-- Data table JavaScript -->
		<script src="../vendors/bower_components/moment/min/moment.min.js"></script>
		<script src="../vendors/bower_components/FooTable/compiled/footable.min.js" type="text/javascript"></script>
		<script src="dist/js/footable-data.js"></script>
		
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