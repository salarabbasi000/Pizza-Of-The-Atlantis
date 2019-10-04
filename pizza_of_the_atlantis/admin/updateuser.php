<?php
include "../classes/db/connect.php";

session_start();
if(!isset($_SESSION['abc']))
echo "<script>alert('You need to login first!'); location.href='../admin/login.php'</script>";

$id=$_GET['id'];
$queryval=$con->query("SELECT * FROM users WHERE id='$id'");
$disp=mysqli_fetch_array($queryval);

if(isset($_POST['done']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $address=$_POST['address'];

    if($exec->num_rows==0 || $email==$disp['email'])
    {
        $query2="UPDATE users SET name='$name',email='$email',contact='$contact',address='$address' WHERE id='$id'";

        if($con->query($query2))
        {   
            //echo $query;
            header("location:users.php");
        }
        else
        {
            echo $query;
        }
    }
    else
    {
        echo"<script>alert('Duplicate users.');location.href='users.php' </script>";
        //echo "Duplicate Values.<br>";
    }

}

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
						  <h5 class="txt-dark">Edit User</h5>
						</div>
						
					</div>
					<!-- /Title -->
					
					<!-- Row -->
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap">
											<form method="post">
												<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-info-outline mr-10"></i>About User</h6>
												<hr class="light-grey-hr"/>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Name</label>
															<input name="name" type="text" id="firstName" class="form-control" value="<?php echo $disp['name']; ?>" required>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Email</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="ti-email"></i></div>
																<input name="email" type="text"class="form-control" value="<?php echo $disp['email']; ?>" required>
															</div>
															
														</div>
													</div>
												</div>
													<!--/span-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Address</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="ti-location-pin"></i></div>
																<input name="address" type="text" class="form-control" id="exampleInputuname" value="<?php echo $disp['address']; ?>" placeholder="Resident Address" required>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Contact</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="ti-mobile"></i></div>
																<input name="contact" type="text" class="form-control" id="exampleInputuname_1" value="<?php echo $disp['contact']; ?>" placeholder="Phone/Mobile" required>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												
												<div class="seprator-block"></div>
												</div>
												<!--/row-->
												<div class="seprator-block"></div>
												
												<div class="form-actions">
													<button name="done" class="btn btn-success btn-icon left-icon mr-10 pull-left"> <i class="fa fa-check"></i> <span>save</span></button>
													<button type="button" class="btn btn-warning pull-left">Cancel</button>
													<div class="clearfix"></div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->

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