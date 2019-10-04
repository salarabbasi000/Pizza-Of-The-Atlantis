<footer class="page-footer">
    	<div class="container">
        	<div class="row">
                <?php include 'classes/openinghours.php' ?>
            	<div class="col-md-6 responsive-column">
                	<h2 class="footer-heading">Opening Hours</h2>
                    <div class="opening-hours-wrapper">
                        <div class="row">
                            <div class="col-xs-6">
                                <em>Monday - Saturday</em>
                            </div>
                            <div class="col-xs-6 text-left">
                                <em><!-- 06:00 - 23:00h -->
                                    <?php 
                                    if(($workingdays_time->getOpenHr()==$workingdays_time->getCloseHr())&&($workingdays_time->getOpenMin()==$workingdays_time->getCloseMin()))
                                    {
                                        echo "24 hours";   
                                    }
                                    else
                                    {
                                        echo $workingdays_time->getOpenHr().":".$workingdays_time->getOpenMin()." - ".$workingdays_time->getCloseHr().":".$workingdays_time->getCloseMin();
                                    }
                                    ?>
                                </em>
                            </div>
                        </div>
                        <div class="margin-5"></div>
                        <div class="row">
                            <div class="col-xs-6">
                                <em>Sunday</em>
                            </div>
                            <div class="col-xs-6 text-left">
                                <em>
                                    <?php 
                                    if(($sunday_time->getOpenHr()==$sunday_time->getCloseHr())&&($sunday_time->getOpenMin()==$sunday_time->getCloseMin()))
                                    {
                                        echo "24 hours";   
                                    }
                                    else
                                    {
                                        echo $sunday_time->getOpenHr().":".$sunday_time->getOpenMin()." - ".$sunday_time->getCloseHr().":".$sunday_time->getCloseMin();
                                    }
                                    ?>
                                </em>
                            </div>
                        </div>
                    </div>
                    <h2 class="footer-heading">Our Address</h2>
                    <address>
                        <?php echo $info->getAddress(); ?>
                    	<!-- PIZZA OF<br>THE ATLANTIS<br>
                        Bell Arcade, Gulistan-e-Johar, Block#1<br>
                        Karchi, Pakistan. -->
                        <div class="margin-20"></div>
                        Make Reservations: <?php echo $info->getContact(); ?><br>
                        Email: <?php echo $info->getEmail(); ?>
                    </address>
                </div><!-- .col-md-4 -->
            	<div class="col-md-6 text-center responsive-column">
                	<div class="margin-40 visible-lg visible-md"></div>
                    <!-- <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="141px" height="141px" viewBox="0 0 43.988 44.979" style="enable-background:new 0 0 43.988 44.979;" xml:space="preserve"> <path d="M37.383,16.22c3.517,7.474,0.886,16.918-5.946,21.733c-7.082,4.99-16.782,4.166-22.674-2.191 C2.7,29.22,1.912,20.428,7.131,12.854c4.695-6.813,14.018-8.953,20.577-5.988c-2.064,5.407-4.132,10.822-6.29,16.472 C26.876,20.904,32.102,18.574,37.383,16.22z M27.102,32.566c-0.002,1.413,1.051,2.507,2.422,2.515c1.354,0.008,2.424-1.1,2.426-2.51 c0.001-1.398-1.09-2.474-2.486-2.451C28.108,30.142,27.104,31.182,27.102,32.566z M13.273,14.833 c1.334,0.053,2.513-1.055,2.563-2.41c0.049-1.329-0.975-2.437-2.32-2.508c-1.404-0.074-2.527,0.919-2.622,2.318 C10.806,13.537,11.944,14.782,13.273,14.833z M23.347,32.031c1.395,0.009,2.481-1.067,2.467-2.445 c-0.013-1.351-1.053-2.4-2.39-2.414c-1.423-0.014-2.533,1.021-2.547,2.376C20.862,30.881,21.998,32.021,23.347,32.031z M30.313,21.663c-1.356-0.015-2.454,1.013-2.502,2.341c-0.049,1.342,1.101,2.552,2.429,2.556c1.368,0.004,2.497-1.121,2.496-2.489 C32.733,22.728,31.675,21.675,30.313,21.663z M9.766,33.943c0.002,1.377,1.02,2.435,2.363,2.459 c1.361,0.024,2.454-1.094,2.446-2.504c-0.007-1.361-1.066-2.449-2.384-2.447C10.758,31.453,9.763,32.476,9.766,33.943z M19.055,15.114c-1.412,0.003-2.447,1.067-2.431,2.496c0.016,1.351,1.068,2.375,2.445,2.379c1.387,0.003,2.446-1.089,2.429-2.508 C21.483,16.141,20.42,15.111,19.055,15.114z M8.195,24.771c1.288-0.005,2.425-1.131,2.445-2.422 c0.021-1.376-1.106-2.513-2.473-2.496c-1.368,0.02-2.482,1.168-2.449,2.528C5.75,23.689,6.878,24.777,8.195,24.771z M36.12,25.425 c0.969-0.006,1.674-0.747,1.662-1.75c-0.012-1.015-0.707-1.722-1.695-1.726c-0.987-0.003-1.801,0.831-1.768,1.811 C34.349,24.687,35.152,25.43,36.12,25.425z M27.534,36.958C27.505,36,26.739,35.29,25.76,35.312 c-1.018,0.023-1.698,0.724-1.678,1.728c0.02,0.961,0.814,1.732,1.752,1.698C26.778,38.705,27.563,37.882,27.534,36.958z M24.091,9.541c-0.013-0.973-0.744-1.688-1.723-1.684c-0.974,0.002-1.732,0.737-1.742,1.687c-0.01,0.948,0.866,1.827,1.795,1.803 C23.299,11.324,24.103,10.455,24.091,9.541z M15.21,23.873c-1.039-0.006-1.715,0.628-1.742,1.635 c-0.025,0.948,0.723,1.752,1.658,1.783c0.994,0.034,1.793-0.75,1.79-1.754C16.912,24.52,16.255,23.879,15.21,23.873z"/> <path d="M22.16,1.466c1.467,0.295,3.473,0.697,5.477,1.108c0.209,0.043,0.497,0.082,0.593,0.226 c0.267,0.406,0.452,0.866,0.669,1.304c-0.451,0.157-0.929,0.506-1.347,0.443c-1.881-0.286-3.741-0.972-5.615-0.996 C12.395,3.431,4.645,9.65,2.424,19.024c-2.571,10.852,4.697,21.734,15.863,23.752c9.054,1.636,18.534-4.085,21.474-12.866 c1.479-4.418,1.771-8.772-0.082-13.141c-0.246-0.579-0.361-1.177,0.35-1.49c0.806-0.356,1.169,0.167,1.46,0.84 c2.14,4.953,1.83,9.934-0.073,14.818c-3.299,8.468-9.694,13.109-18.49,13.957c-8.449,0.813-17.889-4.136-21.653-14.25 C-3.021,19.104,3.8,4.498,17.908,1.942C19.11,1.725,20.341,1.666,22.16,1.466z"/> <path d="M30.661,3.691c4.499,1.791,7.608,4.887,9.654,9.36c-5.255,2.337-10.445,4.645-15.953,7.094 C26.526,14.492,28.581,9.125,30.661,3.691z M35.381,8.472c-1.44,0-2.42,0.945-2.445,2.354c-0.026,1.438,1.008,2.531,2.404,2.542 c1.391,0.01,2.449-1.071,2.445-2.497C37.78,9.481,36.768,8.47,35.381,8.472z M27.57,14.899c0.003,0.958,0.754,1.729,1.691,1.733 c0.881,0.005,1.748-0.85,1.761-1.738c0.014-0.983-0.813-1.788-1.813-1.765C28.227,13.152,27.567,13.864,27.57,14.899z"/> <path d="M43.988,11.932c-0.199,0.224-0.42,0.69-0.679,0.712c-0.383,0.031-0.966-0.134-1.158-0.423 c-0.6-0.904-0.998-1.941-1.578-2.861c-2.061-3.264-4.907-5.607-8.402-7.16c-0.165-0.073-0.334-0.138-0.505-0.194 c-0.676-0.229-1.091-0.663-0.821-1.402c0.303-0.827,1.004-0.646,1.55-0.373c1.484,0.743,3.017,1.438,4.372,2.382 c3.066,2.137,5.333,5.001,6.895,8.425C43.767,11.267,43.836,11.511,43.988,11.932z"/> </svg> -->
                    <div class="centered-column">
                        <img class="page-logo" alt="logo" src="pictures/logos/logo1.jpg">
                    </div>
                	<p class="logo-footer-text" style="color: red;">PIZZA OF THE ATLANTIS</p>
                    <p class="logo-footer-detail" style="color: orange;">Something Your Tummy Will Love!</p>
                    <a  href="menu_3.php" class="scroll-to button-yellow button-heavy">MAKE YOUR ORDER NOW!</a>
                </div><!-- .col-md-4 -->
            	<!-- <div class="col-md-4 responsive-column">
                    <h2 class="footer-heading text-uppercase">Subscribe now</h2>
                    <div class="margin-10"></div>
                    <p>
                    	<em>Subscribe now for our new updates<br>
                        and get regular offers and stuff</em>
                    </p>
                    <form id="form-newsletter" class="form-subscribe" action="assets/php/save_rss.php" method="post" data-email-not-set-msg="Email must be set." data-success-msg="Email added.">
                    	<input type="email" name="email" placeholder="Enter your Email">
                        <div class="return-msg"></div>
                        <div class="text-right">
                        	<input class="button-yellow button-heavy" type="submit" value="Submit">
                        </div>
                    </form>
                </div> --><!-- .col-md-4 -->
            </div><!-- .row -->
        </div><!-- .container -->
        <div class="site-info">
        	<div class="container">
            	<div class="row">
                	<div class="col-xs-8">
                    	© Copyright PIZZA OF THE ATLANTIS 2018.
                    </div>
                    <div class="col-xs-4 text-right footer-socials">
                    	Spread the Word:
                        <a href="https://www.facebook.com/m.salaraliabbasi"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.instagram.com/salar_9_9/"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div><!-- .container -->
        	<div id="scroll-top"><i class="fa fa-angle-double-up"></i></div>
        </div><!-- .site-info -->
    </footer>