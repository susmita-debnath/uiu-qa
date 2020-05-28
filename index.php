<?php 
	if( ! defined( 'BASE_URL' ) ) define( 'BASE_URL', 'http://localhost/oop' );
	if( ! defined( 'BASE_PATH' ) ) define( 'BASE_PATH', dirname( __FILE__ ) );	
	require_once dirname( __FILE__ ) . '/app/lib/functions.php'; 
	
	require_once base_path() . '/app/classes/class.student.php';
	require_once base_path() . '/app/classes/class.question.php';
	require_once base_path() . '/app/classes/class.course.php';
	
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
	
  <link rel="apple-touch-icon" sizes="76x76" href="assets/images/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/images/logo.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   Welcome to Query
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://www.creative-tim.com/product/material-kit-pro" />
  <!--  Social tags      -->
  <meta name="keywords" content="bootstrap 4, bootstrap 4 uit kit, bootstrap 4 kit, material, material kit, creative tim, html kit, html css template, web template, bootstrap, bootstrap 4, css3 template, frontend, responsive bootstrap template, bootstrap ui kit, responsive ui kit, premium bootstrap 4 ui kit, premium template, bootstrap 4 template">
  <meta name="description" content="Start Your Development With A Badass Bootstrap 4 UI Kit inspired by Material Design">
  <!-- Schema.org markup for Google+ -->
  <meta itemprop="name" content="Material Kit Pro by Creative Tim">
  <meta itemprop="description" content="Start Your Development With A Badass Bootstrap 4 UI Kit inspired by Material Design">
  <meta itemprop="image" content="../../s3.amazonaws.com/creativetim_bucket/products/46/original/opt_mkp_thumbnail.jpg">
  <!-- Twitter Card data -->
  <meta name="twitter:card" content="product">
  <meta name="twitter:site" content="@creativetim">
  <meta name="twitter:title" content="Material Kit Pro by Creative Tim">
  <meta name="twitter:description" content="Start Your Development With A Badass Bootstrap 4 UI Kit inspired by Material Design">
  <meta name="twitter:creator" content="@creativetim">
  <meta name="twitter:image" content="../../s3.amazonaws.com/creativetim_bucket/products/46/original/opt_mkp_thumbnail.jpg">
  <!-- Open Graph data -->
  <meta property="fb:app_id" content="655968634437471">
  <meta property="og:title" content="Material Kit Pro by Creative Tim" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="presentation.html" />
  <meta property="og:image" content="../../s3.amazonaws.com/creativetim_bucket/products/46/original/opt_mkp_thumbnail.jpg" />
  <meta property="og:description" content="Start Your Development With A Badass Bootstrap 4 UI Kit inspired by Material Design" />
  <meta property="og:site_name" content="Creative Tim" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="assets/css/material-kit.mind1f1.css?v=2.2.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link rel="stylesheet" type="text/css" href="assets/css/hhhdesign.css?<?php echo time(); ?>">
  <link href="assets/demo/demo.css" rel="stylesheet" />
  <link href="assets/demo/vertical-nav.css" rel="stylesheet" />

  <style>
    .header-filter:before,
    .index-page .header-filter:after{
      background: none !important;
    }
  </style>
  
	</head>
	<body class="index-page sidebar-collapse">
		<nav class="navbar navbar-color-on-scroll fixed-top  navbar-expand-lg " color-on-scroll="100" id="sectionsNav">
			<div class="container">
				<div class="navbar-translate">
					<img src="uploads/logo.png" width="40" height="40">
					<a class="navbar-brand" href="<?php echo base_url(); ?>"><b>Query</b></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
						<span class="sr-only">Toggle navigation</span>
						<span class="navbar-toggler-icon"></span>
						<span class="navbar-toggler-icon"></span>
						<span class="navbar-toggler-icon"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a href="<?php echo base_url(); ?>" class="nav-link">Home</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url(); ?>/index.php?page=login" class="nav-link">Log In</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url(); ?>/index.php?page=registration" class="nav-link">Registration</a>
						</li>
						
					</ul>
				</div>
			</div>
		</nav>
		
		<div class="content">
			<?php if( is_home() ) : ?>
			<div class="page-header header-filter clear-filter" data-parallax="true" style="background-image: url('assets/images/library.jpg');">
				<div class="container">
					<div class="row">
						<div class="col-md-8 ml-auto mr-auto">
							<div class="brand">
								<h1>Welcome</h1>
								<h3 class="title">Having problems during exam. Lots of questions running around your brain. Wanna find the answers? Yes, you are in the right place.</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php endif; ?>
			<div class="main main-raised">
				<div class="container">
					<?php
						require_once get_page_file_path( get_current_slug() );
					?>
				
				</div>
			</div>
		</div>
		<footer class="footer footer-black footer-big">
            <div class="container">
              <div class="content">
                <div class="row">
                  <div class="col-md-4">
                    <h5>Quick Links</h5>
                  <ul>
                    <li>
                      <a href="http://www.uiu.ac.bd/">United Internation University</a>
                    </li><br>
                    <li>
                      <a href="http://elms.uiu.ac.bd/">eLMS</a>
                    </li><br>
                    <li>
                      <a href="http://ucam.uiu.ac.bd/Security/LogIn.aspx">uCAM</a>
                    </li><br>
                    <li>
                      <a href="https://www.cisco.com/">CISCO</a>
                    </li>
                  </ul>
                  </div>

                  <div class="col-md-4">
                  </div>
                  
                  <div class=" col-lg-4 float-right">
                    <h5>Instagram Feed</h5>
                    <div class="gallery-feed">
                       
                      <div class="icon icon-info">
                          <i class="fab fa-facebook-square fa-3x" style="color:#3B5998;"></i>
                        
                      </div>
                    <div class="icon icon-info">
                      <i class="material-icons">people</i>
                    </div>
                    <div class="icon icon-info">
                      <i class="material-icons">people</i>
                    </div>
                     <!--  <i class="fab fa-500px" style="color: #D44638;"></i> -->
                    </div>
                  </div>
                </div>
              </div>
              <!-- <hr> -->
              <!-- <ul class="float-left">
                <li>
                  <a href="#pablo">
                    Blog
                  </a>
                </li>
                <li>
                  <a href="#pablo">
                    Presentation
                  </a>
                </li>
                <li>
                  <a href="#pablo">
                    Discover
                  </a>
                </li>
                <li>
                  <a href="#pablo">
                    Payment
                  </a>
                </li>
                <li>
                  <a href="#pablo">
                    Contact Us
                  </a>
                </li>
              </ul> -->
             <!--  <div class="copyright float-right">
                Copyright &#xA9; <script>
                  document.write(new Date().getFullYear())
                </script> Creative Tim All Rights Reserved.
              </div>
            </div> -->
          </footer>
          <!--     *********   END BIG FOOTER     *********      -->
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="../../buttons.github.io/buttons.js"></script>
  <!--  Plugin for Sharrre btn -->
  <script src="assets/js/plugins/jquery.sharrre.js" type="text/javascript"></script>
  <!--  Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="assets/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>
  <!--  Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="assets/js/plugins/jasny-bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Small Gallery in Product Page -->
  <script src="assets/js/plugins/jquery.flexisel.js" type="text/javascript"></script>
  <!-- Plugins for presentation and navigation  -->
  <script src="assets/demo/modernizr.js" type="text/javascript"></script>
  <script src="assets/demo/vertical-nav.js" type="text/javascript"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="../../buttons.github.io/buttons.js"></script>
  <!-- Js With initialisations For Demo Purpose, Don't Include it in Your Project -->
  <script src="assets/demo/demo.js" type="text/javascript"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/material-kit.mind1f1.js?v=2.2.0" type="text/javascript"></script>
  
  <script type="text/javascript" src="assets/js/script.js"></script>
	</body>
</html>