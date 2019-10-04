<?php

include "../classes/db/connect.php";

session_start();
if(!isset($_SESSION['abc']))
echo "<script>alert('You need to login first!'); location.href='../admin/login.php'</script>";

if(isset($_POST['done']))
{
    $name=$_POST['name'];
    $description=$_POST['description'];
    $small_price=$_POST['small_price'];
    $medium_price=$_POST['medium_price'];
    $large_price=$_POST['large_price'];

    $query="SELECT * FROM pizza WHERE name='$name'";
    $exec=$con->query($query);

    $target="../pictures/menu/pizzas/";
    if(isset($_FILES['pizzaimage']) && !empty($_FILES['pizzaimage']['name']))
    {
    	if($_FILES['pizzaimage']['type']=="image/png" || $_FILES['pizzaimage']['type']=="image/jpg" || $_FILES['pizzaimage']['type']=="image/jpeg")
    	{
    		$dp="img_".time()."_".$_FILES['pizzaimage']['name'];
    		$target.=basename($dp);
    		move_uploaded_file($_FILES['pizzaimage']['tmp_name'],$target);
    	}
    	else
    	{
    		echo"<script>alert('Not an image file.');location.href='menutable.php' </script>";
    	}
    	
    }

    if($exec->num_rows==0)
    {
        $query2="INSERT INTO pizza (name,description,image,small_price,medium_price,large_price) VALUES ('$name','$description','$target','$small_price','$medium_price','$large_price')";

        if($con->query($query2))
        {   
            header("location:menutable.php");
        }
        else
        {
            echo $query;
        }
    }
    else
    {
    	unlink($target);
    	echo"<script>alert('Duplicate Values Inserted.');location.href='menutable.php' </script>";
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
						  <h5 class="txt-dark">Add Pizza</h5>
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
											<form method="post" enctype="multipart/form-data">
												<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-info-outline mr-10"></i>About Pizza</h6>
												<hr class="light-grey-hr"/>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Name</label>
															<input name="name" type="text" id="firstName" class="form-control" required>
														</div>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															<label class="control-label mb-10">Price (Small):</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="ti-money"></i></div>
																<input name="small_price" type="text" class="form-control" required>
															</div>
														</div>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															<label class="control-label mb-10">Price (Medium):</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="ti-money"></i></div>
																<input name="medium_price" type="text" class="form-control" required>
															</div>
														</div>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															<label class="control-label mb-10">Price (Large):</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="ti-money"></i></div>
																<input name="large_price" type="text" class="form-control" required>
															</div>
														</div>
													</div>

												</div>
												<!--/row-->
												
												<div class="seprator-block"></div>
												<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-comment-text mr-10"></i>Description</h6>
												<hr class="light-grey-hr"/>
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<textarea name="description" class="form-control" rows="4">
																
															</textarea>
														</div>
													</div>
												</div>
												<!--/row-->
												
												<div class="seprator-block"></div>
												<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-collection-image mr-10"></i>upload image (Please upload 570x297 image inorder to avoid irresponsiveness)</h6>
												<hr class="light-grey-hr"/>
												<div class="row">
													<div class="col-lg-12">
														<div class="img-upload-wrap">
															<!-- <img class="img-responsive" src="../img/chair.jpg" alt="upload_img"> -->
														</div>
														<div class="fileupload btn btn-info btn-anim"><i class="fa fa-upload"></i><span class="btn-text">Upload new image</span>
															<input name="pizzaimage" id="pizzaimage" type="file" class="upload" required>
														</div>
													</div>
												</div>
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