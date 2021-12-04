<?php

                   include "config.php";
                    if(isset($_POST["submit"]))
                    {
                     
						 
						    $id=$_GET['id'];
                            $tables=$_GET['table'];
	  						$english=$_POST["english"];
	     					$arabic=$_POST["arabic"];
	     					$meaning=$_POST["meaning"];
                             $origin=$_POST["origin"];
	     					$number=$_POST["number"];
	     					$desc=$_POST["desc"];
                     


								$sql= "UPDATE `$tables` SET English= '$english',Arabic='$arabic', Meaning='$meaning',origin='$origin',number='$number',description='$desc' WHERE id={$id}";
								  
								if ($conn->query($sql) === TRUE) {
								    header("location:$tables.php");
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
   </head>
   <body class="dashboard dashboard_1">
          <!-- modal form -->
          <div class="row justify-content-center" >
              <div class="col-md-4" >
                  <div class="modal fade" id="myModal">
                      <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                             <div class="modal-header bg-dark">
                                 <h4 class="modal-title text-white">Update</h4>
                                 <button class="close" data-dismiss="modal">
                                   <span>&#9747;</span>
                              </button>
                             </div>
                             <div class="modal-body bg-light">
                             
                                  <form class="" method="post" action="">
                                  <div class="form-group"><input class="form-control" type="hidden"  name="tables" value="featuredboynames"/></div>
                                      <div class="form-group"><input class="form-control" type="text" name="english" placeholder="English Word"></div>
                                      <div class="form-group"><input class="form-control" type="text" name="arabic" placeholder="Arabic Word"></div>
                                      <div class="form-group"><textarea class="form-control" name="meaning" placeholder="Meaning" rows="5"></textarea></div>
                                      <div class="form-group"><input class="form-control" type="text" name="origin" placeholder="Origin"></div>
                                      <div class="form-group"><input class="form-control" type="text" name="number" placeholder="Lucky Number"></div>
                                      <div class="form-group"><textarea class="form-control" name="desc" placeholder="Description" rows="8"></textarea></div>
                                  
                              </div>
                            <div class="modal-footer bg-dark">
                             <button class="btn btn-warning text-dark" name="submit">Update</button>
                                <button class="btn btn-danger" data-dismiss="modal">close</button>
                            </div>
                            </form>
                            
                          </div>
                      </div>
                  </div>
                  </div>
                  </div>
          <!-- modal form end -->
      <!-- jQuery -->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script>
        $(document).ready(function(){
            $('#myModal').modal('show');
        });
      </script>
   </body>
</html>