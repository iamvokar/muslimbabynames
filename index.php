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

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container d-flex flex-column align-items-center justify-content-center" data-aos="fade-up">
      <h1>Find a unique Muslim baby name for your child</h1>
      <h2>Welcome to MuslimBabyNames.net</h2>
      <img src="assets/img/baby.jpg" class="img-fluid hero-img" alt="" data-aos="zoom-in" data-aos-delay="150">
    </div>

  </section><!-- End Hero -->

  <main id="main">

    

  
    <!-- ======= Features Section ======= -->
    <section id="features" class="features" data-aos="fade-up">
      <div class="container">

        <div class="section-title ">
          <h2>	
            Muslim Baby Names</h2>
            <div class="col-6">
              <div class="limiter ">
                <div class="container-table100 ">
                  <h3>Muslim Boy Names</h3>
                  <div class="wrap-table100   ">
                    <div class="row d-flex justify-content-center">
                      <div class="col-md-12 pb-2 ">

                      <?php 
                      $character=range('A','Z');
                      echo '<ul class="pagination  pagination-circle ">';
                      foreach($character as $alphabet)
                      {
                        echo '<li class="page-item">
                                <a href="index.php?character='.$alphabet.'" class="page-link">'.$alphabet.'</a>
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
                            
                           $sql = "SELECT * FROM muslimboynames WHERE English LIKE '$ch%' ORDER BY id LIMIT {$offset},{$limit} "; 
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
                         $sql2="SELECT * FROM muslimboynames";
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
                            <a href="index.php?page='.$i.'&character='.$ch.'" class="page-link">'.$i.'</a>
                              </li>';
                           }
                           echo '</ul>';
                         }
                      ?>
                      <!-- <ul class="pagination  pagination-circle ">
                        <li class="page-item">
                            <a href="" class="page-link pt-2"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                        </li>
                        <li class="page-item">
                            <a href="" class="page-link">1</a>
                        </li>
                        <li class="page-item">
                            <a href="" class="page-link">2</a>
                        </li>
                        <li class="page-item">
                            <a href="" class="page-link">3</a>
                        </li>
                        <li class="page-item">
                            <a href="" class="page-link">4</a>
                        </li>
                        <li class="page-item">
                            <a href="" class="page-link">5</a>
                        </li>
                        <li class="page-item">
                            <a href="" class="page-link pt-2"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </li>
                        
                    </ul> -->
                               
                  </div>
               </div>
               </div>
               </div>
               </div>
          


      
        <div class="col-6">
          <div class="limiter ">
            <div class="container-table100 ">
              <h3>Muslim Girl Names</h3>
              <div class="wrap-table100  ">
                <div class="row d-flex justify-content-center">
                  <div class="col-md-12 pb-2 ">
           
             
                           
                <?php 
                      $character=range('A','Z');
                      echo '<ul class="pagination  pagination-circle ">';
                      foreach($character as $alphabet)
                      {
                        echo '<li class="page-item">
                                <a href="index.php?character='.$alphabet.'" class="page-link">'.$alphabet.'</a>
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
                            
                           $sql = "SELECT * FROM muslimgirlnames WHERE English LIKE '$ch%' ORDER BY id LIMIT {$offset},{$limit} "; 
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
                         $sql2="SELECT * FROM muslimgirlnames";
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
                            <a href="index.php?page='.$i.'&character='.$ch.'" class="page-link">'.$i.'</a>
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

      <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="content col-xl-7 d-flex align-items-stretch" data-aos="fade-right">
            <div class="content">
              <h3>About us</h3>
              <p>
                Welcome to MuslimBabyNames.net. Our website has a large number of modern Muslim and Islamic names with meanings. Baby name given to a child is his or her first gift in life. Therefore, great care must be taken in choosing Muslim baby names that have pleasant and beautiful meanings just like our Prophet (pbuh) did. There are a great many Muslim names to choose from. Our web site has carefully selected list of Islamic and popular Muslim names.
              </p>
            </div>
          </div>
          <div class="col-xl-5 d-flex align-items-stretch" data-aos="fade-left">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-12 " data-aos="fade-up" data-aos-delay="100">
                  <img src="assets/img/about.jpg" class="img-fluid " alt="" data-aos="zoom-in" data-aos-delay="150">
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    <section id="features" class="features" data-aos="fade-up">
      <div class="container">
        
      <div class="section-title">
        <h2>	
          Muslim Baby Names Facts</h2>
          </div>
        <div class="row content">
          <div class="col-md-5" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/n1.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4" data-aos="fade-left" data-aos-delay="100">
            
            <p class="fst-italic">
              Keeping in mind that the origin, as well as the meaning of the Muslim baby names, are the two important things that matter a lot. There are some names that may even be pronounced differently. This is how the meanings of the names change and put an impact on the personality of the child. Regardless of the language origins in Islam, it is made sure that the meanings of the names remain the same along with the pronunciation. Some Islamic names that are also common in Christianity are prohibited for Muslims that they are originated from languages that are not acceptable to be a part of the Muslim name's origin.</p>
            </p>

            <p class="fst-italic ">
              Regardless of the nationality and the languages that keep all of the Muslims united are the values and practices of Islam. This is why when it comes to the customs and traditions then it is made sure that Muslims all over the world practices almost the same. At the time of naming a child, it is obvious that the rules which are to be followed by Muslims will be unanimous for all of us.</p>

            </p>
            
          </div>
        </div>

        <div class="row content">
          <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
            <img src="assets/img/n4.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
           

            <p>Muslim girl names and Muslim boy names are not that hard to find as the Holy Quran is full of examples and names of the pious people in the History of Islam. There is no restriction in Islam to keep a particular set of names. You can also find names on your own and they can be looked up. Once researched well, if they are suitable according to Islam then there is no problem in keeping them. Other than that, you can look up to our website for Popular Muslim baby names and their complete details.</p>
            
            
          </div>
        </div>

        <div class="row content">
          <div class="col-md-5" data-aos="fade-right">
            <img src="assets/img/n3.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5" data-aos="fade-left">
            
            <p class="fst-italic">
              It is the infant's vested right to be honored with a beautiful name. When choosing a modern Muslim baby name for the child, it should be done with the intention that the baby will be blessed with the barakah of that name.</p>
            </p>
            <p>
              According to a Hadith a child must be named promptly on birth. The baby name should be meaningful. 'You will be called by your name on the day of judgment' this is another reason why it is important to chose a baby name with good meaning. The prophet (pbuh) was very particular about it. The Prophet has suggested names of the Prophets or Abdullah and Abdur Rahman.</p>
            </p>
          </div>
        </div>


      </div>
    </section><!-- End Features Section -->

   

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Features</h2>
          <p>This website is a great place to find a beautiful name for your baby girl or baby boy. MuslimBabyNames.net has all the popular and modern Islamic names for your babies. We also have list of very unique and uncommon names for your Muslim baby boys and Muslim baby girls. We try our best not to include any non Muslim names to our database. Our baby names are mostly from the Arabic origin, there are names available from other languages like Urdu, Turkish, Pashto, etc. We take every possible care to verify names and their meanings before adding to your database. But there is still margin or error,
             please verify these names and their meanings from other sources before naming your child. You may also consult your local imam before choosing a popular Muslim baby name.  </p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="popularboynames.php">Popular BOY NAMES</a></h4>
              <p class="description">From A to Z</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="populargirlnames.php">Popular GIRL NAMES</a></h4>
              <p class="description">From A to Z</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="featuredboynames.php">Featured Boy Names</a></h4>
              <p class="description">Some unique name for boys</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4 class="title"><a href="featuredgirlnames.php">Featured Girl Names</a></h4>
              <p class="description">Some unique name for girls</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Our Blog's</h2>
          <p>BLOG ABOUT MUSLIM BABY NAMES.</p>
        </div>

        <div class="row">

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="assets/img/b1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Muslim Name Aneesa</h4>
                  <span>November 25, 2021</span>
                </div>
                
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <img src="assets/img/b2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Muslim Name Wajahat and Related Details</h4>
                  <span>November 10, 2021</span>
                </div>
               
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <img src="assets/img/b3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Muslim Name Aafiyah A Name from Different Languages</h4>
                  <span>September 24, 2021</span>
                </div>
                
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <img src="assets/img/b4.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Muslim Baby Girl Name Mantasha</h4>
                  <span>August 26, 2021</span>
                </div>
              </div>
            </div>
          </div>

        </div>
        <a href="#" class="btn btn-warning text-dark">Read More  <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
      </div>
    </section><!-- End Team Section -->

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
              <li><i class="bx bx-chevron-right"></i> <a href="arabicgrilnames.php"> Arabic girl names</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="arabicboynames.php">Arabic boy names</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="islamicnames.php">Islamic names</a></li>
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