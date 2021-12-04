<?php
  include 'config.php';

                           $id=$_GET['id'];
                              $tables=$_GET['table'];
                            $sql= "SELECT * FROM `$tables` WHERE id={$id}";
                             $result=mysqli_query($conn,$sql) or die("data not fetch");
                             $row=mysqli_fetch_assoc($result);

                                       $eword= $row['English']; 
   		                                 $aword=$row['Arabic']; 
   		                                 $mean=$row['Meaning']; 
                                       $origin=$row['origin']; 
   		                                 $no= $row['number']; 
   		                                 $desc= $row['description'];                         
?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Muslim Baby Names</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Krub:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  

<!-- Tables CSS File -->
  <link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h4 class="logo"><a href="index.php">MuslimBabyNames</a></h4>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          
          <li><a class="nav-link scrollto" href="muslimboynames.php">Muslim Boy Names</a></li>
          <li><a class="nav-link scrollto" href="muslimgirlnames.php">Muslim Girl Names</a></li>
          <li><a class="nav-link scrollto " href="historicalnames.php">Historical Names</a></li>
          <li><a class="nav-link scrollto" href="prophetnames.php">Prophet Of Names</a></li>
          <li><a class="nav-link scrollto" href="allahnames.php">Allah's Names</a></li>
          <li><a class="getstarted scrollto" href="#about">Login</a></li>
          <li><a class="nav-link scrollto" href="#about"><i class="fa fa-3x  fa-search " aria-hidden="true"></i></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">Home</a></li>
          <li><?php echo ucfirst( $tables) ?></li>
        </ol>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
         <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single"><?php echo ucfirst( $tables) ?></h1>
            <span class="color-text-a"></span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.php">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
              <?php echo ucfirst( $tables) ?>
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Agent Single Star /-->
  <section class="agent-single">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="row">
            <div class="col-md-6">
              <div class="agent-avatar-box mt-4">
                <img src="assets/img/about.jpg" alt="" class="agent-avatar img-fluid">
              </div>
            </div>
            <div class="col-md-5 section-md-t3">
                <div class="agent-content mb-3">
                  
                  <div class="info-agents color-a">
                    <h4 class="py-3 text-info">
                      <strong>English word: </strong>
                      <span class="color-text-a text-dark lead"> <?php echo $eword; ?> </span>
                   </h4>
                    <h4 class="py-3 text-info">
                      <strong>Arabic word: </strong>
                      <span class="color-text-a text-dark lead"> <?php echo $aword; ?></span>
                    </h4>
                    <h4 class="py-3 text-info">
                      <strong>Meaning: </strong>
                      <span class="color-text-a text-dark lead"> <?php echo $mean; ?></span>
                    </h4>
                   
                    <h4 class="py-3 text-info">
                    <strong>Origin: </strong>
                      <span class="color-text-a text-dark lead"> <?php echo $origin; ?></span>
                    </h4>
                    <h4 class="py-3 text-info">
                      <strong>Lucky Number: </strong>
                      <span class="color-text-a text-dark lead"> <?php echo $no; ?></span>
                    </h4>
                    <h4 class="content-d py-3 text-info">
                    <strong>Description: </strong><h4>
                    <p class="text-dark lead"><?php echo $desc; ?>
                        </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
  
    <div class="footer-top">
      <div class="container">
        <div class="row">
  
          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>MuslimBabyNames</h3>
            <p>
              Please post to our Facebook page, if you need to discuss names or need help about any similar issue.<br><br>
              <!-- <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br> -->
            </p>
          </div>
  
          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#features">Features</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy Policy</a></li>
            </ul>
          </div>
  
          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="muslimboynames.php"> Muslim boy names</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="muslimgirlnames.php"> Muslim girl names</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="popularboynames.php"> Popular boys names</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="populargirlnames.php"> Popular girls names</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#features">Muslim names</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Mores</h4>
            <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="arabicgirlname.php"> Arabic girl names</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="arabicboyname.php">Arabic boy names</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="islamicname.php">Islamic names</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="allahnames.php">Names of Allah</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="prophetnames.php">Names of the Prophet (pbuh).</a></li>
          </ul>
          </div>
  
          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Ready Our Blogs</h4>
            <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Names Blog</a></li>
          </ul>
          </div>
  
        </div>
      </div>
    </div>
  
    <div class="container d-md-flex py-4">
  
      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>MuslimBabyNames</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="https://ansrone.com/">Ansrone</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.facebook.com/Muslimbabynames.net" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->
  
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  
  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  
  </body>
  
  </html>