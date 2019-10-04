<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="shortcut icon" type="image/png" href="img/logo.jpg"/>
    <title>Tartarus</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link type="text/css" href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/grayscale.min.css" rel="stylesheet">
    <link href="Swiper-3.4.0/dist/css/swiper.min.css" rel="stylesheet">
	<!--reCaptcha -->
	<script src='https://www.google.com/recaptcha/api.js'></script>
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.js"></script>
    
    <!-- Swiper -->
    <script src="Swiper-3.4.0/dist/js/swiper.jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/grayscale.min.js"></script>
    
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                <img src="img/Marka.png" style="height:36px; width:122pxque; margin-top:-9px;"> 
                </a>
            </div>
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#download">GreenLight</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#blog">Blog</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                    <li>
                    <a href="indextr.php"></a> 
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
    <!-- Intro Header -->
    <header> 
    <div class="swiper-container" style="margin-top:-2%;">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img class="img-responsive" src="img/Photos/Tartarus_001.png"></div>
            <div class="swiper-slide"><img class="img-responsive" src="img/Photos/Tartarus_002.png"></div>
            <div class="swiper-slide"><img class="img-responsive" src="img/Photos/Tartarus_003.png"></div>
            <div class="swiper-slide"><img class="img-responsive" src="img/Photos/Tartarus_004.png"></div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
        <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        paginationClickable: true,
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: 5000,
        autoplayDisableOnInteraction: false
    });	
    </script>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>About Tartarus?</h2>
				In the year of 2230, Mining and Research vessel Tartarus (MRS TARTARUS 220478) activates the security protocol near Neptune without any sign. The only chance for crew to survive is to reach the Bridge and restart all systems one by one before the ship crashes into Neptune. We are playing as Cooper(miner of the ship) who has no education or training about electronics or pilotage; to overcome this, vessels engineer - Andrews- is helping us as much as he can. Though it's not as easy as it sounds...
            </div>
     	<div class="col-xs-11 col-md-8 computer" style="margin-top:4%;">
        <div class="col-xs-5"><img src="img/Extras/applegame2.png"></div>
        </div>
        <div class="col-md-3" style="margin-top:4%;">
       	 TARTARUS is a First Person game with Action elements, set in terrifyingly dark sci-fi universe. In TARTARUS, you will play as Cooper. You are trying to hack the ship's systems via using "Terminals". Hacking the ship is the real challenge. You have to use specific Terminal commands ,which are very realistic, to make it work. Sometimes you have to search "Items" to get information which you need, to solve problems. TARTARUS has retro style elements like iconic sci-fi movies    
        </div>
        </div>
    </section>

    <!-- Download Section -->
    <section id="download" class="content-section text-center">
        <div class="parallax" style="background-image:url(img/Photos/Tartarus_006.png);">
                <div class="col-lg-8 col-lg-offset-2" style="margin-top:20%;">
                    <h2>Steam GreenLight Page</h2>
                    <p>You can support us on Greenlight.</p>
                    <a href="http://steamcommunity.com/sharedfiles/filedetails/?id=804575941" class="btn btn-default btn-lg">Visit Greenlight Page</a>
                </div>          
        </div>
    </section>
    <!--Blog Section -->
        <section id="blog" class=" container content-section text-center">  	
            <h2>Blog</h2>
                <div class="swiper-container x" class="col-xs-12 col-md-11">
       			 <div class="swiper-wrapper">
           			 <div class="swiper-slide col-md-5 col-xs-5">
                     <p>             
       	 TARTARUS is a First Person game with Action elements, set in terrifyingly dark sci-fi universe. In TARTARUS, you will play as Cooper. You are trying to hack the ship's systems via using "Terminals". Hacking the ship is the real challenge. You have to use specific Terminal commands ,which are very realistic, to make it work. Sometimes you have to search "Items" to get information which you need, to solve problems. TARTARUS has retro style elements like iconic sci-fi movies.    
          			</p>             
                     </div>
        		 </div>
                 <div class="swiper-pagination xt"></div>
      			  <div class="swiper-button-next x1"></div>
      			  <div class="swiper-button-prev x2"></div>
   				 </div>
    <script>
    	var swiperx = new Swiper('.x', {
		pagination: '.xr',
        nextButton: '.x1',
        prevButton: '.x2',
        paginationClickable: true,
        spaceBetween: 30,
        loop: true
    });
    </script>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-12 col-xs-12">
                <h2>Contact Us</h2>
                <ul class="list-inline banner-social-buttons" style="margin:2%;">
                    <li>
                    <a href="https://www.facebook.com/tartarusthegame/?fref=ts" class="col-md-1"><img src="img/SocialMedia/facebook.png" width="64" height="64"></a>
                    </li>
                    <li>
                    <a href="https://twitter.com/tartarusgame" class="col-md-1" ><img src="img/SocialMedia/twitter.png" width="64" height="64"></a>
                    </li>
                </ul>
                <form action="mail.php" method="post"> 
                <div class="col-lg-8 col-sm-6 col-xs-10 col-xs-offset-2" style="margin-bottom:12px;"><h4>E-Mail</h4><input type="email" class="form-control" name="email" placeholder="Please write you mail."></div>
                <div class="col-lg-8 col-sm-6 col-xs-10 col-xs-offset-2" style="margin-bottom:12px;"><h4>Name</h4><input type="text" class="form-control" name="name" placeholder="Write your name."></div>
                <div class="col-lg-8 col-sm-6 col-xs-10 col-xs-offset-2" style="margin-bottom:12px;"><h4>Message</h4><textarea class="form-control" rows="4" name="message" placeholder="Write your bugs,sugsessions or other."></textarea>
                <script src='https://www.google.com/recaptcha/api.js?hl=en'></script>
                <div class="g-recaptcha" data-sitekey="6LfX9AwUAAAAAM-e7Vg9hrftISooKZjMf6VlLdF6"></div>
                <button type="submit" class="btn btn-primary btn-lg" style="margin-top:16px;">Send</button>
                </div></form>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p><h6>Copyright &copy; Website created by <a href="https://www.prome.tech">Prometech.</a></h6></p>
        </div>
    </footer>

</body>

</html>
