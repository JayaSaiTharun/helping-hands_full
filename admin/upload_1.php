<?php

session_start(); 
 $err = array();
 $db = mysqli_connect('localhost','root','','epiz_29509909_hh') or die('<center><h1>Error establishing a database connection</h1></center>');
 if(isset($_POST['tab1'])){
    $tab=$_POST['tab1'];
    if($tab == "hcd_con"){  
 $title = $_POST['nhcd_title'];
 	$description = $_POST['nhcd_desc'];
    $filename = $_FILES["nhcd_img"]["name"];
    $tempname = $_FILES["nhcd_img"]["tmp_name"];
    $folder = "./images/hcd_con/".$filename;
 
    // Get all the submitted data from the form
    $sql = "insert into main_slide(Title, Info, Img) values ('$title', '$description', '$filename')";
 
    // Execute query
    mysqli_query($db, $sql);
    if (move_uploaded_file($tempname, $folder)) {
        echo "success";
    } else {
        echo "failed";
    }
    }
    if($tab == "hcd"){  
        $filename = $_FILES["nhcd_img"]["name"];
        $tempname = $_FILES["nhcd_img"]["tmp_name"];
        $folder = "./images/hcd/".$filename;
     
        // Get all the submitted data from the form
        $sql = "insert into hcd(Img) values ('$filename')";
     
        // Execute query
        mysqli_query($db, $sql);
        if (move_uploaded_file($tempname, $folder)) {
            echo "success";
        } else {
            echo "failed";
        }
        }
    if($tab == "icd"){  
         $filename = $_FILES["nhcd_img"]["name"];
         $tempname = $_FILES["nhcd_img"]["tmp_name"];
         $folder = "./images/icd/".$filename;
      
         // Get all the submitted data from the form
         $sql = "insert into icd(Img) values ('$filename')";
      
         // Execute query
         mysqli_query($db, $sql);
         if (move_uploaded_file($tempname, $folder)) {
             echo "success";
         } else {
             echo "failed";
         }
         }
         if($tab == "icd_con"){  
            $title = $_POST['nhcd_title'];
                $description = $_POST['nhcd_desc'];
               $filename = $_FILES["nhcd_img"]["name"];
               $tempname = $_FILES["nhcd_img"]["tmp_name"];
               $folder = "./images/icd_con/".$filename;
            
               // Get all the submitted data from the form
               $sql = "insert into icd_con(Title, Info, Img) values ('$title', '$description', '$filename')";
            
               // Execute query
               mysqli_query($db, $sql);
               if (move_uploaded_file($tempname, $folder)) {
                   echo "success";
               } else {
                   echo "failed";
               }
               }

               if($tab == "prd"){  
                $filename = $_FILES["nhcd_img"]["name"];
                $tempname = $_FILES["nhcd_img"]["tmp_name"];
                $folder = "./images/prd/".$filename;
             
                // Get all the submitted data from the form
                $sql = "insert into prd(Img) values ('$filename')";
             
                // Execute query
                mysqli_query($db, $sql);
                if (move_uploaded_file($tempname, $folder)) {
                    echo "success";
                } else {
                    echo "failed";
                }
                }
                if($tab == "main"){  
                $filename = $_FILES["nhcd_img"]["name"];
                $tempname = $_FILES["nhcd_img"]["tmp_name"];
                $folder = "./images/main/".$filename;
             
                // Get all the submitted data from the form
                $sql = "insert into main(Img) values ('$filename')";
             
                // Execute query
                mysqli_query($db, $sql);
                if (move_uploaded_file($tempname, $folder)) {
                    echo "success";
                } else {
                    echo "failed";
                }
                }

                if($tab == "prd_con"){  
                    $title = $_POST['nhcd_title'];
                        $description = $_POST['nhcd_desc'];
                       $filename = $_FILES["nhcd_img"]["name"];
                       $tempname = $_FILES["nhcd_img"]["tmp_name"];
                       $folder = "./images/prd_con/".$filename;
                    
                       // Get all the submitted data from the form
                       $sql = "insert into prd_con(Title, Info, Img) values ('$title', '$description', '$filename')";
                    
                       // Execute query
                       mysqli_query($db, $sql);
                       if (move_uploaded_file($tempname, $folder)) {
                           echo "success";
                       } else {
                           echo "failed";
                       }
                       }
                       if($tab == "main_con"){  
                        $title = $_POST['nhcd_title'];
                        $titlehead = $_POST['ntitlehead'];
                            $description = $_POST['nhcd_desc'];
                           $filename = $_FILES["nhcd_img"]["name"];
                           $tempname = $_FILES["nhcd_img"]["tmp_name"];
                           $folder = "./images/main_con/".$filename;
                        
                           // Get all the submitted data from the form
                           $sql = "insert into main_con(titlehead,Title, Info, Img) values ('$titlehead','$title', '$description', '$filename')";
                        
                           // Execute query
                           mysqli_query($db, $sql);
                           if (move_uploaded_file($tempname, $folder)) {
                               echo "success";
                           } else {
                               echo "failed";
                           }
                           }
                           if($tab == "main_con2"){  
                            $title = $_POST['nhcd_title'];
                            $titlehead = $_POST['ntitlehead'];
                                $description = $_POST['nhcd_desc'];
                               $filename = $_FILES["nhcd_img"]["name"];
                               $tempname = $_FILES["nhcd_img"]["tmp_name"];
                               $folder = "./images/main_con2/".$filename;
                            
                               // Get all the submitted data from the form
                               $sql = "insert into main_con2(titlehead,Title, Info, Img) values ('$titlehead','$title', '$description', '$filename')";
                            
                               // Execute query
                               mysqli_query($db, $sql);
                               if (move_uploaded_file($tempname, $folder)) {
                                   echo "success";
                               } else {
                                   echo "failed";
                               }
                               }
                       if($tab == "iit"){  
                        $filename = $_FILES["nhcd_img"]["name"];
                        $tempname = $_FILES["nhcd_img"]["tmp_name"];
                        $folder = "./images/iit/".$filename;
                     
                        // Get all the submitted data from the form
                        $sql = "insert into iit(Img) values ('$filename')";
                     
                        // Execute query
                        mysqli_query($db, $sql);
                        if (move_uploaded_file($tempname, $folder)) {
                            echo "success";
                        } else {
                            echo "failed";
                        }
                        }
        
                        if($tab == "iit_con"){  
                            $title = $_POST['nhcd_title'];
                                $description = $_POST['nhcd_desc'];
                               $filename = $_FILES["nhcd_img"]["name"];
                               $tempname = $_FILES["nhcd_img"]["tmp_name"];
                               $folder = "./images/iit_con/".$filename;
                            
                               // Get all the submitted data from the form
                               $sql = "insert into iit_con(Title, Info, Img) values ('$title', '$description', '$filename')";
                            
                               // Execute query
                               mysqli_query($db, $sql);
                               if (move_uploaded_file($tempname, $folder)) {
                                   echo "success";
                               } else {
                                   echo "failed";
                               }
                               }
                               if($tab == "oc"){  
                                $filename = $_FILES["nhcd_img"]["name"];
                                $tempname = $_FILES["nhcd_img"]["tmp_name"];
                                $folder = "./images/oc/".$filename;
                             
                                // Get all the submitted data from the form
                                $sql = "insert into fd(Img) values ('$filename')";
                             
                                // Execute query
                                mysqli_query($db, $sql);
                                if (move_uploaded_file($tempname, $folder)) {
                                    echo "success";
                                } else {
                                    echo "failed";
                                }
                                }
                
                                if($tab == "oc_con"){  
                                    $title = $_POST['nhcd_title'];
                                        $description = $_POST['nhcd_desc'];
                                       $filename = $_FILES["nhcd_img"]["name"];
                                       $tempname = $_FILES["nhcd_img"]["tmp_name"];
                                       $folder = "./images/oc_con/".$filename;
                                    
                                       // Get all the submitted data from the form
                                       $sql = "insert into fd_con(Title, Info, Img) values ('$title', '$description', '$filename')";
                                    
                                       // Execute query
                                       mysqli_query($db, $sql);
                                       if (move_uploaded_file($tempname, $folder)) {
                                           echo "success";
                                       } else {
                                           echo "failed";
                                       }
                                       }
                                       if($tab == "gallery"){  
                                        $title = $_POST['nhcd_title'];
                    
                                           $filename = $_FILES["nhcd_img"]["name"];
                                           $tempname = $_FILES["nhcd_img"]["tmp_name"];
                                           $folder = "./images/gallery/".$filename;
                                        
                                           // Get all the submitted data from the form
                                           $sql = "insert into gallery(year, Img) values ('$title', '$filename')";
                                        
                                           // Execute query
                                           mysqli_query($db, $sql);
                                           if (move_uploaded_file($tempname, $folder)) {
                                               echo "success";
                                           } else {
                                               echo "failed";
                                           }
                                           }
                
        
         if($tab == "weekly"){  
            $weekly=$_POST['weekly_no'];
            $date=$_POST['ofdate'];
        $p1=$_POST['puc1'];
        $p2=$_POST['puc2'];
        $e1=$_POST['e1'];
        $e2=$_POST['e2'];
        $e3=$_POST['e3'];
        $e4=$_POST['e4'];
         
        $sql="insert into weekly_collections(collection_no,date, p1, p2, e1, e2, e3, e4) values ('$weekly','$date', '$p1', '$p2', '$e1', '$e2', '$e3', '$e4')";

            if (mysqli_query($db, $sql)) {
                echo "success";
            } else {
                echo "failed";
            }
            }

   }
 ?>