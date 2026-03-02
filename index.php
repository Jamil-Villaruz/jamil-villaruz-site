<?php

include('includes/dbh.inc.php');
include('includes/getMainDetails.php');
include('includes/getAboutDetails.php');
include('includes/getWorkDetails.php');
include('includes/getEducDetails.php');

?>

<!DOCTYPE html>
<!--[if IE 8]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
  <!-- Basic Page Needs -->
  <!--[if IE
      ]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"
    /><![endif]-->

  <title>JCVillaruz Portfolio</title>

  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <!--  -->
  <link rel="stylesheet" href="fonts/fonts.css" />
  <!-- Bootstrap -->
  <link rel="stylesheet" href="stylesheets/bootstrap.min.css" />

  <!-- Mobile Specific Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

  <!-- Theme Style -->
  <link rel="stylesheet" type="text/css" href="stylesheets/shortcodes.css" />
  <link rel="stylesheet" type="text/css" href="stylesheets/style.css" />

  <!-- Favicon and Touch Icons  -->
  <link rel="shortcut icon" href="images/logo.png">
  <link rel="apple-touch-icon-precomposed" href="images/favicon.png">

  <!-- Animation Text -->
  <link rel="stylesheet" type="text/css" href="stylesheets/splt.css" />

  <!-- Responsive -->
  <link rel="stylesheet" type="text/css" href="stylesheets/responsive.css" />

  <!-- Colors -->
  <link rel="stylesheet" type="text/css" href="stylesheets/colors/color1.css" id="colors">

  <!-- ios support -->
  <link rel="apple-touch-icon" href="images/logo.png">

  <meta name="apple-mobile-web-app-status-bar" content="#B4D700">
  <meta name="theme-color" content="#B4D700">
</head>

<body class="tf-fullscreen is-dark">

  <!-- preloaded -->
  <div id="preloader">
    <div class="preload-container"></div>
  </div>
  <!-- /preload -->

  <!-- Header -->
  <?php
  include('includes/header.php');
  ?>
  <!-- End header -->

  <!-- home -->
  <!--sidebar-->
  <section>
    <div class="tf-container">
      <div class="wrapper wrap-home" data-enter="fadeInUp" data-exit="">
        <div class="group-4-8">
          <div class="cl4">
            <div class="sticky-sidebar">
              <div class="avatar">
                <img src="images/avatar/avt-1.png" alt="image">
              </div>
              <div class="profile">
                <div class="top">
                  <h3><a href="#">Hey! I’m <?php echo $users[0]['nick_name']; ?></a></h3>
                  <div class="wrap-text">
                    <span class="auto-type">UX/UI Designer</span>
                  </div>
                </div>
                <div class="content">
                  <p class="mail"><a href="#"><?php echo $users[0]['email']; ?></a></p>
                  <p><?php echo $users[0]['short_bio']; ?></p>
                  <ul class="wd-social-icon m-top">
                    <li><a href="#"><i class="icon-facebook1"></i></a></li>
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-instagram"></i></a></li>
                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                  </ul>
                </div>
                <div class="bottom">
                  <a class="btn-profile active wedo-link-item" href="#contact">Hire Me!<span class="icon-arrow"></span></a>
                  <a class="btn-profile wedo-link-item" href="#contact">Download CV <span class="icon-arrow"></span></a>
                </div>
              </div>
            </div>
          </div>
          <!-- end sidebar -->

          <!-- home content -->
          <?php include('homepage.php'); ?>
          <!-- end home content -->

          <!-- about us -->
          <?php include('aboutme.php'); ?>
          <!-- end about us -->

          <!-- service -->
          <?php include('service.php'); ?>
          <!-- end service -->

          <!-- price-table -->
          <?php include('pricetable.php'); ?>
          <!-- end price table -->

          <!-- skill -->
          <?php include('skills.php'); ?>
          <!-- end skill -->

          <!-- portfolio -->
          <?php include('portfolio.php'); ?>
          <!-- end portfolio-->

          <!-- Full portfolio details -->
          <?php include('portfolio-details.php'); ?>
          <!-- end -->

          <!-- blog -->
          <?php include('blog.php'); ?>
          <!-- end -->

          <!-- blog - details -->
          <?php include('blog-details.php'); ?>
          <!-- end -->

          <!-- testimonials -->
          <?php include('testimonials.php'); ?>
          <!-- end -->

          <!-- contact -->
          <?php include('contact.php'); ?>
          <!-- end -->

        </div>

      </div>

    </div>

  </section>
  <!-- end -->

  <!-- Footer -->
  <footer>
    <?php include('includes/footer.php'); ?>
  </footer>
  <!-- End footer -->
  <div class="tf-mouse tf-mouse-outer"></div>
  <div class="tf-mouse tf-mouse-inner"></div>

  <script src="javascript/jquery.min.js"></script>
  <script src="javascript/bootstrap.min.js"></script>
  <script src="javascript/typed.umd.js"></script>
  <script src="javascript/countto.js"></script>
  <script src="javascript/jquery.cookie.js"></script>
  <script src="javascript/appear.js"></script>
  <script src="javascript/plugins.js"></script>
  <script src="javascript/splt.min.js"></script>
  <script src="javascript/main.js"></script>
</body>

</html>