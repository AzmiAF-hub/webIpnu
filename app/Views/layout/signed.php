<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mentor Bootstrap Template - Index</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url("/img/icon.ico") ?>" rel="icon">
  <link href="<?= base_url() ?>/Mentor/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url() ?>/Mentor/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/Mentor/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/Mentor/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/Mentor/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url() ?>/Mentor/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/Mentor/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/Mentor/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url() ?>/Mentor/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor - v2.1.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    
    <div class="container d-flex align-items-center">

      <h4 class="logo mr-auto">
        <img src="<?= base_url("/img/ipnu.png") ?>" alt="IPNU" class="logo">
        <a href="/">IPNU IPPNU MASA</a>
        <img src="<?= base_url("/img/ippnu.png") ?>" alt="IPNU" class="logo">
      </h4>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="/home">Dashboard</a></li>
          <!-- <li><a href="/about">Tentang</a></li> -->
          <!-- <li><a href="courses.html">Courses</a></li>
          <li><a href="trainers.html">Trainers</a></li>
          <li><a href="events.html">Events</a></li> -->
          <!-- <li><a href="/login">Masuk</a></li> -->
          <li class="drop-down"><a href=""><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAABCklEQVRIS72U4RFBMRCEv1cBHaADJdCBDtCBVlRACTqgBCXQARUwaxKTyctLLpkhf3PZvdvdXMePT/djfHIEC+AATCubuAFb4KJ3OQIVTirBfbnezkoErwHwJ3BydytgNFD3aT43QYpA4JLu6kDnTooUSRPBHthFHR+BdWKK/xN4SbxsKYkewDKS6AyMLRNYCIQjktDkFPjX39BkK4E1uT0PLAQyWaaGKZLpJpNzBHE84ylSca2aQF9fnefOxq0WX1NFYF2KYfKqCKzGhnVFAsVxaM+UCO9+C+diqp0j3Ws3qsDlR29dxykqdWm6z01gAigVhQStmmcTFl62am4mKE3bdG/9QE3gevQGa6U7GUKNWbsAAAAASUVORK5CYII="/></a>
            <ul>
              <li><a href="#"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAA2UlEQVRIS+2U0RXBQBBFbzrQCSpAB1SgBFSACihBB5RAB3SiA87gY4zszizyl/3JOcnLuzNvJqlo+FQN+9MC3IRTEXWADTB+ORyABXB1HY0gBTgDXaOVe/1/AKTqfcJoAkg3cm4O7FF8XQcrYJl4eQ3I858A0Q5CaZXM4AL0Qq5KlNuirdmiec0W5eaQnEFJkV8BZAYzYGhIR0CGLNfwsRHtgKnztt4kF6QBue2xRiPVSSqmjxlI6wO3pKfgpCIMA7wv07JDv3otahwQTKdMFmqzzPJd3QLc9O6V+iEZecKP3wAAAABJRU5ErkJggg=="/>
              Profile</a></li>
              <!-- <li class="drop-down"><a href="#">Deep Drop Down</a> -->
                <!-- <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li> -->
              <li><a href="/logout"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAvklEQVRIS92V0Q3CQAxDXyeADQoTwAiMQieDTdpRYAM2AFnqSQcqlSM1UuG+EztxnEtD8muS8VkNwQm4ADuj4xvQAYNi3Q6U1BrgJUTx+wjBc8x0CnqLdRKE/ZsEV+A8SrNoB1ugB44BE9Tzn52BQAUukogJLALJIa9H36dRvnaQTqDKJZE2cJMhUZFG+ovkkDHkWv80m04NedE9+E+CR+UsZ0/u5Xa4v6kOjobu3ASBa6dCB8epejLG7WC9BC+3rCgZQI207QAAAABJRU5ErkJggg=="/>
              Logout</a></li>
            </ul>
          </li>
          <!-- <li><a href="/logout">Logout</a></li> -->

        </ul>
      </nav><!-- .nav-menu -->

      <!-- <a href="courses.html" class="get-started-btn">Get Started</a> -->

    </div>
  </header><!-- End Header -->
<!-- CONTENT TEMPLATE -->

    <?php $this->renderSection("content") ?>

<!-- ============================ -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-5 col-md-6 footer-contact">
            <h3>Developer</h3>
            <p>
              <!-- A108 Adam Street <br> -->
              Pare, Kediri, Jawa Timur<br>
              Indonesia<br><br>
              <strong>Facebook:</strong> Azmi AF<br>
              <strong>Email:</strong> azq085608@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Link</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/">Beranda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/about">Tentang Kami</a></li>
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li> -->
            </ul>
          </div>
<!-- 
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div> -->
<!-- 
          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div> -->

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>AF Program & Desaign</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <!-- <a href="#" class="google"><i class="bx bxl-google"></i></a> -->
        <a href="https://www.facebook.com/assvi.annisa.9" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://github.com/AzmiAF-hub" class="github"><i class="bx bxl-github"></i></a>
        <a href="https://www.youtube.com/channel/UChf1r_EgSbz4UgkNQ4LT4_g" class="youtube"><i class="bx bxl-youtube"></i></a>
        <!-- <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> -->
      </div>
    </div>
  </footer><!-- End Footer -->

  <!-- Vendor JS Files -->
  <script src="<?= base_url() ?>/Mentor/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url() ?>/Mentor/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>/Mentor/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?= base_url() ?>/Mentor/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url() ?>/Mentor/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?= base_url() ?>/Mentor/assets/vendor/counterup/counterup.min.js"></script>
  <script src="<?= base_url() ?>/Mentor/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?= base_url() ?>/Mentor/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url() ?>/Mentor/assets/js/main.js"></script>
  <script src="<?= base_url() ?>/assets/js/main.js"></script>

</body>

</html>