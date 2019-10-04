<?php

include "../classes/db/connect.php";

session_start();
if(!isset($_SESSION['abc']))
echo "<script>alert('You need to login first!'); location.href='../admin/login.php'</script>";

$id=$_GET['id'];
$queryval=$con->query("SELECT * FROM starter WHERE id='$id'");
$disp=mysqli_fetch_array($queryval);

if(isset($_POST['done']))
{
    $name=$_POST['name'];
    $description=$_POST['description'];
    $pieces_or_servings=$_POST['pieces_or_servings'];
    $price=$_POST['price'];

    $query="SELECT * FROM starter WHERE name='$name'";
    $exec=$con->query($query);

    $target="../pictures/menu/starters/";
    if(isset($_FILES['starterimage-u']) && !empty($_FILES['starterimage-u']['name']))
    {
    	if($_FILES['starterimage-u']['type']=="image/png" || $_FILES['starterimage-u']['type']=="image/jpg" || $_FILES['starterimage-u']['type']=="image/jpeg")
    	{
    		$dp="img_".time()."_".$_FILES['starterimage-u']['name'];
    		$target.=basename($dp);
    		move_uploaded_file($_FILES['starterimage-u']['tmp_name'],$target);
    	}
    	else
    	{
    		echo"<script>alert('Not an image file.');location.href='menutable.php' </script>";
    	}
    	
    }

    if($exec->num_rows==0  || $name==$disp['name'])
    {
    	unlink($disp['image']);
        $query2="UPDATE starter SET name='$name',description='$description',image='$target',pieces_or_servings='$pieces_or_servings',price='$price' WHERE id='$id'";

        if($con->query($query2))
        {   
            //echo $query;
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
        echo"<script>alert('Duplicate Values.');location.href='menutable.php' </script>";//
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
						  <h5 class="txt-dark">Edit Starter</h5>
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
												<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-info-outline mr-10"></i>About Starter</h6>
												<hr class="light-grey-hr"/>
												<div class="row">
													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label mb-10">Name</label>
															<input name="name" type="text" id="firstName" class="form-control" value="<?php echo $disp['name']; ?>" required>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label mb-10">Price</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="ti-money"></i></div>
																<input name="price" type="text" class="form-control" value="<?php echo $disp['price']; ?>"  required>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label mb-10">Pieces/Servings</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="ti-gift"></i></div>
																<input name="pieces_or_servings" type="number" class="form-control" value="<?php echo $disp['pieces_or_servings']; ?>"  required>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												
												<div class="seprator-block"></div>
												<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-comment-text mr-10"></i>Description</h6>
												<hr class="light-grey-hr"/>
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<textarea name="description" class="form-control" rows="4"><?php echo $disp['description']; ?></textarea>
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
															<!-- <img class="img-responsive" src="../img/chair.jpg" alt="upload_img">  -->
														</div>
														<div name="starterimage-u" id="starterimage-u" class="fileupload btn btn-info btn-anim"><i class="fa fa-upload"></i><span class="btn-text">Upload new image</span>
															<input name="starterimage-u" id="starterimage-u" type="file" class="upload" required>
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