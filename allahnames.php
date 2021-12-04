<?php
  include 'config.php';
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
  <main id="main" class="mt-5">


    <section id="features" class="features" data-aos="fade-up">
        <div class="container">
    
   <div class="section-title">
          <h2>	
            Allah's Names</h2>
            
           
            <div class="col-6">
              <div class="limiter ">
                <div class="container-table100 ">
                  <div class="wrap-table100  ">
                    <div class="row d-flex justify-content-center">
                    <div class="col-md-12 pb-2 ">
               
                    <?php 
                      $character=range('A','Z');
                      echo '<ul class="pagination  pagination-circle ">';
                      foreach($character as $alphabet)
                      {
                        echo '<li class="page-item">
                                <a href="allahnames.php?character='.$alphabet.'" class="page-link">'.$alphabet.'</a>
                              </li>';
                      }
                      echo '</ul>';

                      ?>
               
                      
                               
                  </div>
                </div> 
                    <div class="table100 ver1 m-b-15" >
                      <div class="table100-head ">
                      <table>
                        <thead>
                          <tr class="row100 head">
                            <th class="cell100 column1">#</th>
                            <th class="cell100 column2">English word</th>
                            <th class="cell100 column3">Arabic word</th>
                            <th class="cell100 column4">Meaning</th>
                            <th class="cell100 column5">Details</th>
                          </tr>
                        </thead>
                      </table>
                    </div>
          
                    <div class="table100-body ">
                      <table>
                        <tbody>
                        
                          <?php
                            $limit=10;
                            if(isset($_GET['page']))
                            {
                              $page=$_GET['page']; 
                              
                            }
                            else{
                              $page=1;
                              $ch='a';
                            }
                            if(isset($_GET['character']))
                            {
                              $ch=$_GET['character'];
                            }
                            else{
                              $ch='a';
                            }
                            $ch=ucfirst($ch);
                            $offset=($page-1) * $limit;
                            
                           $sql = "SELECT * FROM allahnames WHERE English LIKE '$ch%' ORDER BY id LIMIT {$offset},{$limit} "; 
                             $result=mysqli_query($conn,$sql) or die("data not fetch");
                             while($row=mysqli_fetch_assoc($result))
                            {
                        ?>
                         <!--  data fetch end-->
                         
                                       <tr class="row100 body">
   		                                 <td class="cell100 column1"><?php echo $row['id']; ?></td>
                                        <td class="cell100 column2"><?php echo $row['English']; ?></td>
   		                                  <td class="cell100 column3"><?php echo $row['Arabic']; ?></td>
   		                                  <td class="cell100 column4"><?php echo $row['Meaning']; ?></td>
                                         <td class="cell100 column5"><a href="inner-page.php?id=<?php echo $row['id']; ?>&table=<?php echo $row['tables']; ?>" >More</a>
                                       </tr>
                              
                           <?php } ?>
                            
                          
                        </tbody>
                      </table>
                      </div>
                    </div>
                    <div class="row d-flex justify-content-center ">
                      <div class="col-md-12  ">
                      <?php
                         $sql2="SELECT * FROM allahnames";
                         $result2=mysqli_query($conn,$sql2) or die("data not fetch");
                         if(mysqli_num_rows($result2))
                         {
                           $total_records=mysqli_num_rows($result2);
                           
                           $limit=10;
                           $total_page=ceil($total_records/$limit);
                           
                           echo '<ul class="pagination  pagination-circle ">';
                           for($i=1;$i<=$total_page;$i++)
                           {
                            echo '<li class="page-item">
                            <a href="allahnames.php?page='.$i.'&character='.$ch.'" class="page-link">'.$i.'</a>
                              </li>';
                           }
                           echo '</ul>';
                         }
                      ?>
                               
                  </div>
                </div> 
            </div>
            
          </div>
  </div>
  </section>
  </main>
        <!-- End #main -->
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
            <li><i class="bx bx-chevron-right"></i> <a href="#header">Home</a></li>
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