<?php
include "../classes/db/connect.php";

session_start();
if(!isset($_SESSION['abc']))
echo "<script>alert('You need to login first!'); location.href='../admin/login.php'</script>";

$id=$_GET['id'];
$queryval=$con->query("SELECT * FROM team WHERE id='$id'");
$disp=mysqli_fetch_array($queryval);

if(isset($_POST['done']))
{
    $name=$_POST['name'];
    $position=$_POST['position'];
    $description=$_POST['description'];
    $facebook=$_POST['facebook'];
    $instagram=$_POST['instagram'];

    $query="SELECT * FROM team WHERE position='$position'";
    $exec=$con->query($query);

    $target="../pictures/team/";
    if(isset($_FILES['memberimage-u']) && !empty($_FILES['memberimage-u']['name']))
    {
    	if($_FILES['memberimage-u']['type']=="image/png" || $_FILES['memberimage-u']['type']=="image/jpg" || $_FILES['memberimage-u']['type']=="image/jpeg")
    	{
    		$dp="img_".time()."_".$_FILES['memberimage-u']['name'];
    		$target.=basename($dp);
    		move_uploaded_file($_FILES['memberimage-u']['tmp_name'],$target);
    	}
    	else
    	{
    		echo"<script>alert('Not an image file.');location.href='basic-table.php' </script>";
    	}
    	
    }


    if($exec->num_rows==0 || $position!='Founder' || $position==$disp['position'])
    {
    	unlink($disp['image']);
        $query2="UPDATE team SET name='$name',position='$position',description='$description',image='$target',facebook='$facebook',instagram='$instagram' WHERE id='$id'";

        if($con->query($query2))
        {   
            //echo $query;
            header("location:basic-table.php");
        }
        else
        {
            echo $query;
        }
    }
    else
    {
    	unlink($target);
        echo"<script>alert('More than 1 founder.');location.href='basic-table.php' </script>";
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
						  <h5 class="txt-dark">Edit Team Member</h5>
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
												<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-info-outline mr-10"></i>About Member</h6>
												<hr class="light-grey-hr"/>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Name</label>
															<input name="name" type="text" id="firstName" class="form-control" value="<?php echo $disp['name']; ?>" required>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Position</label>
															<select name="position" class="form-control" data-placeholder="Choose a Category" tabindex="1">
																<option value="Founder">Founder</option>
																<option value="Cashier">Cashier</option>
																<option selected value="Cook">Cook</option>
																<option value="Chef">Chef</option>
																<option value="Manager">Manager</option>
															</select>
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
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Facebook</label>
															<input  name="facebook" type="text" class="form-control" value="<?php echo $disp['facebook']; ?>" >
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Instagram</label>
															<input name="instagram" type="text" class="form-control" value="<?php echo $disp['instagram']; ?>" >
														</div>
													</div>
												</div>
												<!--/row-->
												<div class="seprator-block"></div>
												<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-collection-image mr-10"></i>upload image (Please upload 270x436 image inorder to avoid irresponsiveness)</h6>
												<hr class="light-grey-hr"/>
												<div class="row">
													<div class="col-lg-12">
														<div class="img-upload-wrap">
															<!-- <img class="img-responsive" src="../img/chair.jpg" alt="upload_img"> --> 
														</div>
														<div class="fileupload btn btn-info btn-anim"><i class="fa fa-upload"></i><span class="btn-text">Upload new image</span>
															<input name="memberimage-u" id="memberimage-u" type="file" class="upload" required>
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