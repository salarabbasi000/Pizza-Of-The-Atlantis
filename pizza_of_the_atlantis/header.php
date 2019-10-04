<?php include 'classes/information.php'; ?>
<header class="page-header">
        <div class="page-top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <em>
                        Order Online OR Call At: <?php echo $info->getContact(); ?> - <span class="text-uppercase">Free Pizza delivery.</span>
                    </em>
                    </div>
                    <div class="col-xs-6 text-right">
                        <?php 
                        //session_start();
                        if(!isset($_SESSION['abc']))
                        {
                        ?>
                        <!-- Welcome Peeps! -->
                        Welcome Guest, <a href="login.php" class="text-uppercase">Sign in</a> | <a href="signup.php" class="text-uppercase">Create new account</a>
                        <?php
                        }
                        else
                        {
                            $email=$_SESSION['abc'];
                            $q=$con->query("SELECT * FROM users WHERE email='$email'");
                            $account=mysqli_fetch_array($q);
                            $name=$account['name'];
                        ?>
                        Logged In as <?php echo $name; ?>, <a href="php/logoutmain.php" class="text-uppercase">Sign out</a>
                        <?php
                        }
                        ?>
                     </div>
                    </div>
                </div>
            </div>
            <?php
            if(empty($_SESSION['order']))
            $_SESSION['order']=array();
            ?>
        </div><!-- .page-top -->
        <div id="main-navigation-container">
            <div id="main-navigation-inner">
                <div class="container">
                    <div class="relative-container clearfix">
                        <div id="main-navigation-button"><i class="fa fa-reorder"></i></div>
                        <div class="pull-left">
                            <div class="centered-columns">
                                <div class="centered-column">
                                    <img class="page-logo" alt="logo" src="pictures/logos/logo.jpg">
                                </div>
                                <div class="centered-column hidden-xs">
                                    <h1 style="color: red; text-align: center;" class="site-name">PIZZA OF<br>THE ATLANTIS</h1>
                                    <h2 style="color: orange" class="site-name-info">Something Your Tummy Will Love!</h2>
                                </div>
                            </div>
                        </div>
                        <nav id="main-navigation">
                            <ul id="one-page-nav">
                                <li <?php if(basename($_SERVER['PHP_SELF'])=="index.php") {?> class="active" <?php } ?> >
                                    <a href="index.php">Home</a>
                                    <!-- <ul>
                                    	<li><a href="../dark/index.html">Dark version</a></li>
                                        <li class="delimiter"></li>
                                        <li><a href="one_page.html">One-page</a></li>
                                    	<li><a href="../dark/one_page.html">One-page dark</a></li>
                                    </ul> -->
                                </li>

                                <li <?php if(basename($_SERVER['PHP_SELF'])=="about.php") {?> class="active" <?php } ?>>
                                    <a href="about.php">About Us</a>
                                </li>

                                <li <?php if(basename($_SERVER['PHP_SELF'])=="menu_3.php") {?> class="active" <?php } ?>>
                                    <a href="menu_3.php">Menu</a>
                                    <!-- <ul>
                                    	<li><a href="menu_2.html">Menu small</a></li>
                                        <li><a href="menu_3.html">Menu big</a></li>
                                    </ul> -->
                                </li>
                                <li <?php if(basename($_SERVER['PHP_SELF'])=="gallery_2.php") {?> class="active" <?php } ?>>
                                    <a href="gallery_2.php">Gallery</a>
                                    <!-- <ul>
                                    	<li><a href="gallery_2.html">Gallery small</a></li>
                                        <li><a href="gallery_3.html">Gallery big</a></li>
                                    </ul> -->
                                </li>

                                

                                <li <?php if(basename($_SERVER['PHP_SELF'])=="delivery.php") {?> class="active" <?php } ?>>
                                    <a href="delivery.php">Delivery</a>
                                </li>
                                <!-- <li>
                                    <a href="#section-delivery">Order</a>
                                </li> -->
                               <!--  <li>
                                    <a href="blog.html">Blog</a>
                                    <ul>
                                    	<li><a href="blog_single.html">Blog single</a></li>
                                    </ul>
                                </li>
 -->                            
                                <li <?php if(basename($_SERVER['PHP_SELF'])=="contact.php") {?> class="active" <?php } ?>>
                                    <a href="contact.php">Feedback</a>
                                </li>

                                <!-- <li class=" menu-item has-small-label">
                                    <a href="contact.php"><i class="fa fa-shopping-cart"></i><span class="small-label"><span>0</span></span></a>
                                </li>
 -->
                                <li>
                                    <div class="menu-item has-small-label cart-trigger"><i class="fa fa-shopping-cart"></i><span class="small-label"><span><?php echo count($_SESSION['order']);?> </span></span></div>
                                </li>
                            </ul>
                        </nav>
                    </div><!-- .relative-container -->
                </div><!-- .container -->
            </div><!-- #main-navigation-inner -->
        </div><!-- #main-navigation-container -->
        <div id="main-navigation-placeholder"></div>
    </header>

<!-- <script type="text/javascript">
    function current()
    {
       var x=document.getElementsbyClassName("currentpage");
       x.style.color="yellow";
    }
       

    $(document).ready(function(){
      $(document).on('click', '.nav li a', function () {
        console.log($(this));
        $('.active').removeClass('active');
        $(this).parent().addClass('active');
      });
    });
</script> -->