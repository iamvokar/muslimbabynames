<?php

                   include "config.php";
                    if(isset($_POST["submit"]))
                    {
                     
						 
                     $tables=$_POST["tables"];
	  						$english=$_POST["english"];
	     					$arabic=$_POST["arabic"];
	     					$meaning=$_POST["meaning"];
                     $origin=$_POST["origin"];
	     					$number=$_POST["number"];
	     					$desc=$_POST["desc"];
                     



								$sql= "INSERT INTO `muslimboynames` (tables,English,Arabic,Meaning,origin,number,description) VALUES ('$tables','$english','$arabic','$meaning','$origin','$number','$desc')";
								if ($conn->query($sql) === TRUE) {
								    header("location:muslimboynames.php");
								} else {
								    echo "Error: ".$sql ."<br>" .$conn->error;
								}

								
								 
                    }
		?>




<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>MuslimBabyNames Dashboard</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="css/custom.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="images/layout_img/user_img.jpg" alt="#" /></div>
                        <div class="user_info">
                           <h6>Admin</h6>
                           <p></p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h4>General</h4>
                  <ul class="list-unstyled components">
                     <li class="active">
                        <a href="index.html" ><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a> 
                     </li>
                     
                     <li>
                        <a href="#muslim" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-table purple_color2"></i> <span>Muslim Baby Names</span></a>
                        <ul class="collapse list-unstyled" id="muslim">
                           <li><a href="muslimboynames.php"> <span>Boy Names</span></a></li>
                           <li><a href="muslimgirlnames.php"> <span>Girls Names</span></a></li>
                        </ul>
                     </li>

                     <li>
                        <a href="#popular" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-object-group blue2_color"></i> <span>Popular Baby Names</span></a>
                        <ul class="collapse list-unstyled" id="popular">
                           <li><a href="popularboynames.php"> <span>Boy Names</span></a></li>
                           <li><a href="populargirlnames.php"> <span>Girls Names</span></a></li>
                        </ul>
                     </li>

                     <li>
                        <a href="#feature" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-briefcase blue1_color"></i> <span>Featured Baby Names</span></a>
                        <ul class="collapse list-unstyled" id="feature">
                           <li><a href="featuredboynames.php"> <span>Boy Names</span></a></li>
                           <li><a href="featuredgirlnames.php"> <span>Girls Names</span></a></li>
                        </ul>
                     </li>

                     <li>
                        <a href="#arabic" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i> <span>Arabic Baby Names</span></a>
                        <ul class="collapse list-unstyled" id="arabic">
                           <li><a href="arabicboynames.php"> <span>Boy Names</span></a></li>
                           <li><a href="arabicgirlnames.php"> <span>Girls Names</span></a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="historicalnames.php" ><i class="fa fa-map purple_color2"></i> <span>Historical Names</span></a>
                     </li>
                   
                     <li>
                        <a href="allahnames.php" ><i class="fa fa-bar-chart-o green_color"></i> <span>Allah's  Names</span></a>
                     </li>
                   
                     <li>
                        <a href="prophetnames.php" ><i class="fa fa-cog yellow_color"></i> <span>Prophet Names</span></a>
                     </li>
                     <li>
                        <a href="islamicnames.php" ><i class="fa fa-diamond purple_color"></i> <span>Islamic Names</span></a>
                     </li>
                   
                   
                  </ul>
               </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                        <div class="right_topbar">
                           <div class="icon_info">
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="images/layout_img/user_img.jpg" alt="#" /><span class="name_user">Admin</span></a>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="profile.html">My Profile</a>
                                       <a class="dropdown-item" href="#"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
               <!-- end topbar -->
    
  <!-- dashboard inner -->
  <div class="midde_cont">
    <div class="container-fluid">
       <div class="row column_title">
          <div class="col-md-12 ">
             <div class="page_title ">
                <h2>Muslim Boy Tables</h2> 
             </div>
          </div>
       </div>
              
             <div class="row justify-content-center">
                
              <div class="col-md-3 pb-3 pl-5 pt-3">
               <a href="" class=" btn btn-lg btn-success " data-toggle="modal" data-target="#myModal"><i class="fa fa-plus" aria-hidden="true"></i> Add Name</a>
              </div>
                <!-- table section -->
                <div class="col-md-10">
                   <div class="white_shd full margin_bottom_30">
                      <div class="full graph_head">
                         <div class="heading1 margin_0">
                            <h2>Muslim Boy Tables</h2>
                         </div>
                      </div>
                      <div class="table_section padding_infor_info">
                         <div class="table-responsive-sm">
                         <table class="table table_row">
                               <thead class="thead-dark">
                                  <tr>
                                      <th>#</th>
                                     <th>English word</th>
                                     <th>Arabic word</th>
                                     <th>Meaning</th>
                                     <th>Origin</th>
                                     <th>Number</th>
                                     <th>Description</th>
                                     <th>Action</th>
                                  </tr>
                               </thead>
                               <tbody>
                               <?php
                              $sql= "SELECT * FROM muslimboynames";
                             $result=mysqli_query($conn,$sql) or die("data not fetch");
                             while($row=mysqli_fetch_assoc($result))
                            {
                            ?><tr>
                            <td><?php echo $row['id']; ?></td>
                               <td><?php echo $row['English']; ?></td>
                               <td><?php echo $row['Arabic']; ?></td>
                              <td><?php echo $row['Meaning']; ?></td>
                              <td><?php echo $row['origin']; ?></td>
                               <td><?php echo $row['number']; ?></td>
                              <td><?php echo $row['description']; ?></td>
                              <td><a href="updates.php?id=<?php echo $row['id']; ?>&table=<?php echo $row['tables']; ?>" class=" btn btn-lg btn-success "> Update</a> <a href="delete.php?id=<?php echo $row['id']; ?>&table=<?php echo $row['tables']; ?>" class=" btn btn-lg btn-danger "> Delete</a></td>
                          </tr>
                            <?php  }?>
                               </tbody>
                            </table>
                         </div>
                      </div>
                   </div>
                </div>
              
             </div>
          </div>
      
          <!-- modal form -->
          <div class="row justify-content-center" >
              <div class="col-md-4" >
                  <div class="modal fade" id="myModal">
                      <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                             <div class="modal-header bg-dark">
                                 <h4 class="modal-title text-white">Names</h4>
                                 <button class="close" data-dismiss="modal">
                                   <span>&#9747;</span>
                              </button>
                             </div>
                             <div class="modal-body bg-light">
                             
                                  <form class="" method="post" action="muslimboynames.php">
                                      <div class="form-group"><input class="form-control" type="hidden"  name="tables" value="muslimboynames"/></div>
                                      <div class="form-group"><input class="form-control" type="text" name="english" placeholder="English Word"></div>
                                      <div class="form-group"><input class="form-control" type="text" name="arabic" placeholder="Arabic Word"></div>
                                      <div class="form-group"><textarea class="form-control" name="meaning" placeholder="Meaning" rows="5"></textarea></div>
                                      <div class="form-group"><input class="form-control" type="text" name="origin" placeholder="Origin"></div>
                                      <div class="form-group"><input class="form-control" type="text" name="number" placeholder="Lucky Number"></div>
                                      <div class="form-group"><textarea class="form-control" name="desc" placeholder="Description" rows="8"></textarea></div>
                                  
                              </div>
                            <div class="modal-footer bg-dark">
                             <button class="btn btn-warning text-dark" name="submit">Add</button>
                                <button class="btn btn-danger" data-dismiss="modal">close</button>
                            </div>
                            </form>
                            
                          </div>
                      </div>
                  </div>
                  </div>
                  </div>
          <!-- modal form end -->
    
                  <!-- footer -->
                  <div class="container-fluid">
                     <div class="footer">
                        <p>Copyright © 2018 MuslimBabyNames  . All rights reserved.<br>
                           Designed by <a href="https://ansrone.com/">AnsrOne</a></p>
                     </div>
                  </div>
               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="js/animate.js"></script>
      <!-- select country -->
      <script src="js/bootstrap-select.js"></script>
      <!-- owl carousel -->
      <script src="js/owl.carousel.js"></script> 
      <!-- chart js -->
      <script src="js/Chart.min.js"></script>
      <script src="js/Chart.bundle.min.js"></script>
      <script src="js/utils.js"></script>
      <script src="js/analyser.js"></script>
      <!-- nice scrollbar -->
      <script src="js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
      <script src="js/chart_custom_style1.js"></script>
   </body>
</html>