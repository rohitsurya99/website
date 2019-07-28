<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Infinite Developers</title>

        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="main_menu_area">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand text-white text-weight" href="index.php"><img src="img/logo.png" alt="" height="100px"  style="opacity:0.6;"></a>
                <button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about-us.php">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="service.php">Services</a></li>
                       <!--================ <li class="nav-item"><a class="nav-link" href="#">Portfolio</a></li> =================-->
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <!--================End Header Menu Area =================-->
        
        <section class="banner_area">
            <div class="container">
                <div  style="height:400px;" class="banner_inner_text">
                <h3 class="heading">If you have some ideas in mind
                     <br>we are here to help you with our Team</h3> <br>
                <a  href="contact.php" class="more_btn">Get In Touch</a>
                </div>
                
            </div>
        </section>
        
        <!--================Feature Area =================-->
        <section class="feature_area">
            <div class="container">
                <div class="c_title">
                    <img src="img/icon/title-icon.png" alt="">
                    <h6>Discover the features</h6>
                    <h2>We are here to help you in </h2><br>
                </div>
                <div class="row feature_inner">
                    <div class="col-lg-4 col-sm-6">
                        <div class="feature_item">
                            <div class="f_icon">
                                <i class="fa fa-android text-success" style="font-size:100px;" aria-hidden="true"></i>
                            </div>
                            <h4>App Developement</h4>
                            <p>A simple mobile phone can become a very powerful tool for accessing, manupulating and consuming imformation. smartphones can go away beyond there traditional role.</p>
								<?php include("modal.php");?>
							<button type="button" class="more_btn" data-toggle="modal" data-target="#app">Read More</button>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="feature_item">
                            <div class="f_icon">
                                <i class="fa fa-desktop text-primary" style="font-size:100px;" aria-hidden="true"></i>
                            </div>
                            <h4>Responsive Web Developement</h4>
                            <p>We design Mobile friendly responsive websites. Which is suitable to most of the current browsers and screens. We can redesign your site, to bring in freshness and more ROI. </p>
							<button type="button" class="more_btn" data-toggle="modal" data-target="#web">Read More</button>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="feature_item">
                            <div class="f_icon">
                                <i class="fa fa-code text-warning" style="font-size:100px;" aria-hidden="true"></i>
                            </div>
                            <h4>Web application</h4>
                            <p>We are full service web application developement company focus on building world class web 2.0 solutions using best avilable technologies</p>
							<button type="button" class="more_btn" data-toggle="modal" data-target="#ser_appli">Read More</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Feature Area =================-->
        
        <!--================The best slider Area =================-->
		<div class="conatiner">
			<div class="row">
				<div class="right_text col-md-6">
                
                    <div class="">
                        <div class="l_title text-center">
                            <img src="img/icon/title-icon.png" alt="">
							<h2>We don’t hide, we stand tall in front of challenges</h2>
                        </div>
                        <p class="ml-5 p-2">Infinite Developers was incepted in 2019, and since then has evolved to grow into a full-fledged Web &amp; App Development Company catering to all kinds of services and solutions in the Web Domain. We have been enabling and researching the best technology solutions for our clients. From the commencement, the company was instituted on the value of building and executing great thoughts that drive evolvement for our clients and enrich lives through enterprise solutions.</p>
                    </div>
                    
                
            </div>
			<div class="col-md-6">
                       <center> <img src="img/iphone4.png" alt=""></center>
                    </div>
				
			</div>
		</div>
        <!--================End The best slider Area =================-->
        
        
        <!--================Map Area =================-->
        <section class="world_map_area">
            <div class="container">
                <div class="world_map_inner">
                    <img class="img-fluid" src="img/world-map.png" alt="">
                    <div class="bd-callout">
                        <h3>Infinite Developers</h3>
                        <p>KAMOTHE NAVI MUMBAI <br/>MAHARASTRA</p>
                        <h4><a href="#">+91 70281 82539</a> <a href="#">contact@infinitedevelopers.in</a></h4>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Map Area =================-->
        
			<?php include("footer.php");?>
        
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <!-- Extra plugin css -->
        <script src="vendors/counterup/jquery.waypoints.min.js"></script>
        <script src="vendors/counterup/jquery.counterup.min.js"></script> 
        <script src="vendors/counterup/apear.js"></script>
        <script src="vendors/counterup/countto.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
        <script src="js/smoothscroll.js"></script>
        
        <script src="js/theme.js"></script>
    </body>
</html>