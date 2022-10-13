<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Habitaciones</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.ico">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->        
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/gijgo.css">
        <link rel="stylesheet" href="assets/css/slicknav.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
   </head>

   <body>
       
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <!-- <strong>Hotel</b> -->
                    <img src="assets/img/logo/logoGrisOsc.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
       <div class="header-area header-sticky">
            <div class="main-header ">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- logo -->
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                               <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                    <div class="col-xl-8 col-lg-8">

                        <?php include_once "pages/menu.php"; ?>
                    
                    </div>
                </div>
            </div>
       </div>
        <!-- Header End -->
    </header>
    <main>

        <!-- slider Area Start-->
        <div class="slider-area">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/rooms_page.jpg" >
                <div class="container">
                    <div class="row ">
                        <div class="col-md-11 offset-xl-1 offset-lg-1 offset-md-1">
                            <div class="hero-caption">
                                <span>Reservar</span>
                                <h2>Reservar</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

        <?php
            $checkin = $_POST['checkin'];
            $checkout = $_POST['checkout'];
            $adultos = $_POST['adultos'];
            $kids = $_POST['kids'];
            $rooms = $_POST['rooms'];
       ?>
    
       
       <section class="contact-section">
            <div class="container">
<div class="row">
    <div class="col-12">
        <h2 class="contact-title">Datos Personales</h2>
    </div>

   
    <div class="col-lg-8">
        <form  class="form-contact contact_form"  action="pages/enviar.php" method="POST" >
            <div class="row">

                
                <div class="col-6">
                    <div class="form-group">
                        <input class="form-control" type="email" name="mail" placeholder="Correo" required/>
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group">
                        <input class="form-control" type="email" name="confi_mail" placeholder="Confirmar Correo" required />
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" placeholder="Nombres" required />
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <input class="form-control" type="text" name="lastname" placeholder="Apellidos" required/>
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group">
                        <input class="form-control" type="text" name="country" placeholder="Pais" required/>
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group">
                        <input class="form-control" type="text" name="city" placeholder="Ciudad" required />
                    </div>
                </div>
                
                <div class="col-6">
                    <div class="form-group">
                        <input class="form-control" type="tel" name="movil" placeholder="Telefono/Movil" required />
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group">
                        <input class="form-control" type="text" name="identification" placeholder="Identificacion" required/>
                    </div>
                </div>
    
                
            </div>
            <input type="hidden" name="checkin" value="<?= $checkin?>" />
            <input type="hidden" name="checkout" value="<?= $checkout?>" />
            <input type="hidden" name="adults" value=" <?= $adultos?>" />
            <input type="hidden" name="kids" value="<?= $kids?>" />
            <input type="hidden" name="rooms" value="<?= $rooms ?>" />

            <div class="box_form">  
                <input type="submit"  value="Confirmar" />
            </div>
        </form>
    </div>

    <div class="col-lg-3 offset-lg-1">   
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-arrow-right"></i></span>
                            <div class="media-body">
                                <h3>Check In</h3>
                                <p> <?= $checkin?></p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-arrow-left"></i></span>
                            <div class="media-body">
                                <h3>Check Out</h3>
                                <p> <?= $checkout?></p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-user"></i></span>
                            <div class="media-body">
                                <h3>Adultos</h3>
                                <p> <?= $adultos?></p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-themify-favicon"></i></span>
                            <div class="media-body">
                                <h3>Niños</h3>
                                <p> <?= $kids?></p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Habitaciones</h3>
                                <p> <?= $rooms ?></p>
                            </div>
                        </div>
                    </div>

</div>
</section>

        <?php include_once 'pages/gallery.php'; ?>
        
    </main>



    <?php include_once "pages/footer.php"; ?>
   
<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="../assets/js/vendor/modernizr-3.5.0.min.js"></script>
		
		<!-- Jquery, Popper, Bootstrap -->
		<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <!-- Date Picker -->
        <script src="assets/js/gijgo.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="assets/js/wow.min.js"></script>
		<script src="assets/js/animated.headline.js"></script>
		
		<!-- Scrollup, nice-select, sticky -->
        <script src="assets/js/jquery.scrollUp.min.js"></script>
        <script src="assets/js/jquery.nice-select.min.js"></script>
		<script src="assets/js/jquery.sticky.js"></script>
        <script src="assets/js/jquery.magnific-popup.js"></script>

        <!-- contact js -->
        <script src="assets/js/contact.js"></script>
        <script src="assets/js/jquery.form.js"></script>
        <script src="assets/js/jquery.validate.min.js"></script>
        <script src="assets/js/mail-script.js"></script>
        <script src="assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
        
    </body>
</html>