<?php

include 'classes/db/connect.php';
session_start();

?>

<!DOCTYPE html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" xml:lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
	<?php include'php/head.php'; ?>
</head>

<body>
	<div id="page-loader" class="bg-pattern bg-white">
    	<div class="page-loader-content">
            <div id="loader-pizza-corpus">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="200px" height="200px" viewBox="0 0 128.917 127.773" style="enable-background:new 0 0 128.917 127.773;" xml:space="preserve"> <path d="M112.148,43.321c10.551,21.945,2.659,49.678-17.838,63.816c-21.246,14.655-50.346,12.235-68.023-6.434 C8.099,81.495,5.735,55.679,21.392,33.442C35.476,13.434,63.444,7.15,83.121,15.859c-6.193,15.873-12.396,31.774-18.869,48.367 C80.627,57.078,96.305,50.234,112.148,43.321z M81.305,91.321c-0.007,4.149,3.154,7.36,7.266,7.386 c4.061,0.024,7.272-3.229,7.277-7.373c0.004-4.104-3.27-7.261-7.458-7.194C84.325,84.205,81.313,87.258,81.305,91.321z M39.819,39.253c4.004,0.151,7.538-3.104,7.688-7.078c0.148-3.904-2.925-7.158-6.96-7.365c-4.212-0.215-7.582,2.698-7.865,6.809 C32.417,35.445,35.832,39.099,39.819,39.253z M70.039,89.749c4.184,0.029,7.443-3.131,7.402-7.175 c-0.04-3.969-3.159-7.051-7.171-7.088c-4.269-0.043-7.598,2.997-7.641,6.973C62.586,86.372,65.992,89.722,70.039,89.749z M90.937,59.303c-4.067-0.042-7.361,2.978-7.505,6.874c-0.146,3.944,3.3,7.498,7.285,7.508c4.105,0.01,7.492-3.295,7.487-7.312 C98.198,62.432,95.023,59.342,90.937,59.303z M29.295,95.366c0.007,4.042,3.062,7.148,7.089,7.22 c4.083,0.07,7.361-3.215,7.339-7.356c-0.021-3.995-3.2-7.188-7.152-7.183C32.274,88.052,29.288,91.056,29.295,95.366z M57.163,40.076c-4.235,0.009-7.343,3.131-7.292,7.326c0.048,3.971,3.203,6.975,7.335,6.986c4.162,0.01,7.337-3.197,7.288-7.365 C64.448,43.092,61.258,40.068,57.163,40.076z M24.585,68.434c3.864-0.015,7.275-3.323,7.334-7.11 c0.063-4.043-3.318-7.384-7.419-7.328c-4.104,0.052-7.446,3.427-7.346,7.423C17.251,65.257,20.632,68.451,24.585,68.434z M108.358,70.354c2.906-0.019,5.021-2.196,4.986-5.14c-0.036-2.979-2.121-5.058-5.087-5.067c-2.96-0.012-5.402,2.436-5.304,5.316 C103.044,68.186,105.456,70.368,108.358,70.354z M82.602,104.217c-0.087-2.812-2.385-4.898-5.323-4.833 c-3.054,0.065-5.095,2.125-5.033,5.074c0.059,2.823,2.444,5.088,5.257,4.987C80.333,109.346,82.686,106.932,82.602,104.217z M72.272,23.711c-0.038-2.855-2.233-4.953-5.169-4.945c-2.922,0.01-5.197,2.166-5.226,4.955c-0.028,2.781,2.599,5.363,5.387,5.292 C69.896,28.944,72.308,26.393,72.272,23.711z M45.63,65.794c-3.117-0.02-5.146,1.849-5.226,4.804 c-0.076,2.784,2.167,5.143,4.972,5.236c2.983,0.098,5.38-2.202,5.369-5.151C50.733,67.696,48.764,65.813,45.63,65.794z"/> <path d="M66.479,0c4.401,0.869,10.418,2.046,16.429,3.255c0.627,0.124,1.492,0.237,1.779,0.664 c0.801,1.19,1.357,2.543,2.009,3.827c-1.352,0.464-2.788,1.482-4.042,1.299C77.012,8.21,71.432,6.192,65.811,6.124 C37.184,5.77,13.934,24.036,7.271,51.561c-7.713,31.861,14.09,63.813,47.59,69.741c27.163,4.804,55.603-11.998,64.422-37.782 c4.439-12.974,5.314-25.753-0.247-38.584c-0.737-1.7-1.083-3.453,1.048-4.379c2.418-1.045,3.508,0.49,4.382,2.472 c6.421,14.54,5.49,29.167-0.219,43.512c-9.896,24.861-29.082,38.496-55.47,40.98c-25.346,2.385-53.667-12.146-64.958-41.848 C-9.063,51.791,11.4,8.901,53.722,1.398C57.33,0.757,61.021,0.583,66.479,0z"/> </svg>
        	</div>
            
            <div id="loader-pizza-piece">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100px" height="100px" viewBox="0 0 58.88 59.156" style="enable-background:new 0 0 58.88 59.156;" xml:space="preserve"> <path d="M18.897,10.835C32.395,16.096,41.72,25.19,47.858,38.322C32.091,45.187,16.523,51.959,0,59.156 C6.493,42.551,12.656,26.792,18.897,10.835z M33.058,24.871c-4.319,0.005-7.261,2.776-7.336,6.919 c-0.077,4.225,3.023,7.432,7.211,7.461c4.173,0.028,7.348-3.144,7.334-7.329C40.254,27.838,37.218,24.868,33.058,24.871z M9.626,43.747c0.009,2.815,2.263,5.077,5.073,5.092c2.644,0.012,5.245-2.498,5.282-5.104c0.042-2.887-2.439-5.253-5.438-5.185 C11.595,38.619,9.617,40.708,9.626,43.747z"/> <path d="M58.88,35.033c-0.597,0.656-1.262,2.029-2.036,2.091c-1.15,0.095-2.899-0.392-3.476-1.238 c-1.799-2.655-2.993-5.703-4.733-8.4c-6.181-9.589-14.721-16.471-25.207-21.027c-0.494-0.218-1.002-0.406-1.514-0.575 c-2.028-0.673-3.275-1.945-2.464-4.111c0.908-2.431,3.011-1.9,4.65-1.098c4.452,2.181,9.049,4.219,13.116,6.992 c9.199,6.279,15.998,14.69,20.686,24.741C58.214,33.079,58.424,33.802,58.88,35.033z"/> </svg>
        	</div>
            <div class="page-loader-text">Loading</div>
        </div>
    </div><!-- #page-loader -->
    
    <div id="screen-cover"></div>
    
    <?php include'header.php';?>

    <div class="page-title-img">
        <img class="img-full" alt="page title img" src="pictures/banners/menu.jpg">
        <div class="page-title">
            <!-- <div class="container">
                <h1>Menu</h1>
                <p>Lorem ipsum dolor sit amet</p>
            </div> --><!-- .container -->
        </div>
    </div><!-- .page-title-img -->
    
    <section class="section-gray">
        <div class="container">
        	<div class="text-center">
                <ul class="list-bullets-inline">
                	<li><a href="#menu-pizzas" class="scroll-to">Pizza</a></li>
                    <li><a href="#menu-breverages" class="scroll-to">Breverages</a></li>
                    <li><a href="#menu-starters" class="scroll-to">Starters</a></li>
                </ul>
            </div>
            
            <div class="border-lines-container">
                <h5 class="border-lines" id="menu-pizzas">Pizzas</h5>
            </div>

             <?php include'classes/menu.php';?>
            <div class="row">
                <?php  
                for ($i=0;$i<count($objpizza);$i++) { 
                    # code...

                ?>
            	<div class="col-md-6 product-preview-container">
                    <div class="product-preview-big">
                        <img alt="product photo" src="<?php echo substr($objpizza[$i]->getImage(),3); ?>">
                        <div class="product-content">
                        	<div class="product-content-inner">
                                <h4 class="product-title">
                                    <?php echo $objpizza[$i]->getName(); ?></h4>
                                <p><?php echo $objpizza[$i]->getDescription(); ?></p>
                                <div class="product-price">
                                    Price:<br>
                                    <button class="btn btn-sm btn-success" onclick="location.href='php/cartscript.php?type=pizza&name=<?php echo $objpizza[$i]->getName(); ?>&size=small&price=<?php echo $objpizza[$i]->getSmallPrice(); ?>'">
                                        <?php echo "Rs.".$objpizza[$i]->getSmallPrice()."<br>(Small)"; ?>   
                                    </button>
                                    <button class="btn btn-sm btn-success" onclick="location.href='php/cartscript.php?type=pizza&name=<?php echo $objpizza[$i]->getName(); ?>&size=medium&price=<?php echo $objpizza[$i]->getMediumPrice(); ?>'">
                                        <?php echo "Rs.".$objpizza[$i]->getMediumPrice()."<br>(Medium)";?>
                                    </button>
                                    <button class="btn btn-sm btn-success" onclick="location.href='php/cartscript.php?type=pizza&name=<?php echo $objpizza[$i]->getName(); ?>&size=large&price=<?php echo $objpizza[$i]->getLargePrice(); ?>'">
                                        <?php echo "Rs.".$objpizza[$i]->getLargePrice()."<br>(Large)";?>
                                    </button>
                                </div>
                        	</div>
                        </div><!-- .product-content -->
                    </div><!-- .product-preview-big -->
        		</div><!-- .col-md-6 -->
                <?php  
                }
                ?>
            </div><!-- .row -->


            <div class="border-lines-container">
                <h5 class="border-lines" id="menu-breverages">Breverages</h5>
            </div>
            <div class="row">
                <?php  
                for ($i=0;$i<count($objbreverage);$i++) { 
                    # code...
                ?>
            	<div class="col-md-6 product-preview-container">
                    <div class="product-preview-big">
                        <img alt="product photo" src="<?php echo substr($objbreverage[$i]->getImage(),3); ?>">
                        <div class="product-content">
                        	<div class="product-content-inner">
                                <h4 class="product-title"><?php echo $objbreverage[$i]->getName(); ?></h4>
                                <!-- <p>Sugar, sale, dehydrated garlic, black pepper, oregano, dehydrated onion, whole basil, soybean oil.</p> -->
                                <div class="product-price">
                                    Price:<br>
                                    <button class="btn btn-md btn-primary" onclick="location.href='php/cartscript.php?type=breverage&name=<?php echo $objbreverage[$i]->getName(); ?>&size=small&price=<?php echo $objbreverage[$i]->getSmallPrice(); ?>'"><?php echo "Rs.".$objbreverage[$i]->getSmallPrice()."<br>(Small)"; ?>
                                    </button>
                                    <button class="btn btn-md btn-primary" onclick="location.href='php/cartscript.php?type=breverage&name=<?php echo $objbreverage[$i]->getName(); ?>&size=1.5litre&price=<?php echo $objbreverage[$i]->getLargePrice(); ?>'"><?php echo "Rs.".$objbreverage[$i]->getLargePrice()."<br>(1.5 Litre)"; ?>
                                    </button>
                                </div>
                        	</div>
                        </div><!-- .product-content -->
                    </div><!-- .product-preview-big -->
        		</div><!-- .col-md-6 -->
                <?php  
                }
                ?>
            </div><!-- .row -->
            
            
            <div class="border-lines-container">
                <h5 class="border-lines" id="menu-starters">Starters</h5>
            </div>
            <div class="row">
            	<?php  
                for ($i=0;$i<count($objstarter);$i++) { 
                    # code...
                ?>
                <div class="col-md-6 product-preview-container">
                    <div class="product-preview-big">
                        <img alt="product photo" src="<?php echo substr($objstarter[$i]->getImage(),3); ?>">
                        <div class="product-content">
                        	<div class="product-content-inner">
                                <h4 class="product-title"><?php echo $objstarter[$i]->getName(); ?></h4>
                                <p><?php echo $objstarter[$i]->getDescription(); ?></p>
                                <div class="product-price">
                                    <?php echo $objstarter[$i]->getPieces()." pieces/serving<br>";?>
                                    Price:<br>
                                    <button class="btn btn-md btn-danger" onclick="location.href='php/cartscript.php?type=starter&name=<?php echo $objstarter[$i]->getName(); ?>&pps=<?php echo $objstarter[$i]->getPieces();?>&price=<?php echo $objstarter[$i]->getPrice(); ?>'"><?php echo "Rs.".$objstarter[$i]->getPrice(); ?></button>
                                </div>
                        	</div>
                        </div><!-- .product-content -->
                    </div><!-- .product-preview-big -->
        		</div><!-- .col-md-6 -->
                <?php  
                }
                ?>
            </div><!-- .row -->


            <!-- <ul class="pagination">
            	<li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul> -->
        </div><!-- .container -->
    </section>
    
    <?php include 'cart.php'; ?>
    
    <?php include 'footer.php'; ?>
    
    <?php include 'php/scripts.php'; ?>

    <script type="text/javascript">
        
        var cartitem=0;
        function cartinc()
        {
           var x=document.getElementById("cartnum").innerHTML=++cartitem;
        }
    </script>

</body>
</html>
