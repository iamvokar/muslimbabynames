<?php
                        include "config.php";
						    $id=$_GET['id'];
                            $tables=$_GET['table'];
							$sql= "DELETE FROM `$tables`  WHERE id={$id}";
								  
							if ($conn->query($sql) === TRUE) {
                                $sql2= " ALTER TABLE `$tables` AUTO_INCREMENT = 1";   
                                if ($conn->query($sql2) === TRUE) {
                                       
                                    header("location:$tables.php");
                               } else {
                                   echo "Error: ".$sql ."<br>" .$conn->error;
                               }    
							} else {
							    echo "Error: ".$sql ."<br>" .$conn->error;
							}  
                          
                            
?>