<?php
$db = mysqli_connect('localhost','root','','epiz_29509909_hh') or die('<center><h1>Error establishing a database connection</h1></center>');





// Start session
session_start();

// Define valid username and password
$valid_username = 'myusername';
$valid_password = 'mypassword';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // Get the form data
  $username = $_POST['user'];
  $password = $_POST['pass'];

  // Check if the username and password are valid
  if ($username === $valid_username && $password === $valid_password) {
    echo '<meta http-equiv="refresh" content="0;url=index.php">';
    
    // Set the session variables
   
    $_SESSION['loggedin'] = true;
    $_SESSION['admin'] = $username;

    
    // Redirect to home page
   // header('Location: index.php');
    exit;

  } else {
    // Invalid credentials, show error message
    $error_message = 'Invalid username or password';
  }

}














if(isset($_POST['tab1'])){
    $tab=$_POST['tab1'];
    if($tab == "hcd"){
        $query=mysqli_query($db,"SELECT * FROM hcd");         
         if (mysqli_num_rows($query)>0){
          while ($row=mysqli_fetch_assoc($query)){
            echo '<tr id="'.$row["Sno"].'">
            <td><img src="images/hcd/'.$row["Img"].'" width="100"></td>
            <td><button onclick="showicd(this.id)" id = "'.$row["Sno"].'" data-bs-toggle="modal" data-bs-target="#EditModal" class="btn btn-outline-success"><i class="fa fa-edit"></i></button> <button data-del_tab = "main_slide" onclick=show2icd(this.id) id = "d'.$row["Sno"].'" data-toggle="modal" data-target="#confdel" class="btn btn-outline-danger"><i class="fa fa-trash"></i></button>
            ';
            echo '</td> </tr>';
            }

        }

        }
    if($tab == "hcd_con"){
        $query=mysqli_query($db,"SELECT * FROM main_slide");         
         if (mysqli_num_rows($query)>0){
          while ($row=mysqli_fetch_assoc($query)){
            echo '<tr id="'.$row["Sno"].'">
            
            <th scope="row">'.$row["Title"].'</th>
            <td>'.$row["Info"].'</td>
            <td><img src="images/hcd_con/'.$row["Img"].'" width="100"></td>
            <td><button onclick="show(this.id)" id = "'.$row["Sno"].'" data-bs-toggle="modal" data-bs-target="#EditModal" class="btn btn-outline-success"><i class="fa fa-edit"></i></button> <button data-del_tab = "main_slide" onclick=show2(this.id) id = "d'.$row["Sno"].'" data-toggle="modal" data-target="#confdel" class="btn btn-outline-danger"><i class="fa fa-trash"></i></button>
            ';
            echo '</td> </tr>';
            }

        }

        }
        if($tab == "icd"){
            $query=mysqli_query($db,"SELECT * FROM icd");         
             if (mysqli_num_rows($query)>0){
              while ($row=mysqli_fetch_assoc($query)){
                echo '<tr id="'.$row["Sno"].'">
                <td><img src="images/icd/'.$row["Img"].'" width="100"></td>
                <td><button onclick="showicd(this.id)" id = "'.$row["Sno"].'" data-bs-toggle="modal" data-bs-target="#EditModal" class="btn btn-outline-success"><i class="fa fa-edit"></i></button> <button data-del_tab = "main_slide" onclick=show2icd(this.id) id = "d'.$row["Sno"].'" data-toggle="modal" data-target="#confdel" class="btn btn-outline-danger"><i class="fa fa-trash"></i></button>
                ';
                echo '</td> </tr>';
                }
    
            }
    
            }
            if($tab == "icd_con"){
                $query=mysqli_query($db,"SELECT * FROM icd_con");         
                 if (mysqli_num_rows($query)>0){
                  while ($row=mysqli_fetch_assoc($query)){
                    echo '<tr id="'.$row["Sno"].'">
                    <th scope="row">'.$row["Title"].'</th>
                    <td>'.$row["Info"].'</td>
                    <td><img src="images/icd_con/'.$row["Img"].'" width="100"></td>
                    <td><button onclick="show(this.id)" id = "'.$row["Sno"].'" data-bs-toggle="modal" data-bs-target="#EditModal" class="btn btn-outline-success"><i class="fa fa-edit"></i></button> <button data-del_tab = "main_slide" onclick=show2(this.id) id = "d'.$row["Sno"].'" data-toggle="modal" data-target="#confdel" class="btn btn-outline-danger"><i class="fa fa-trash"></i></button>
                    ';
                    echo '</td> </tr>';
                    }
        
                }
        
                }
                if($tab == "iit"){
                    $query=mysqli_query($db,"SELECT * FROM iit");         
                     if (mysqli_num_rows($query)>0){
                      while ($row=mysqli_fetch_assoc($query)){
                        echo '<tr id="'.$row["Sno"].'">
                        <td><img src="images/iit/'.$row["Img"].'" width="100"></td>
                        <td><button onclick="showicd(this.id)" id = "'.$row["Sno"].'" data-bs-toggle="modal" data-bs-target="#EditModal" class="btn btn-outline-success"><i class="fa fa-edit"></i></button> <button data-del_tab = "main_slide" onclick=show2icd(this.id) id = "d'.$row["Sno"].'" data-toggle="modal" data-target="#confdel" class="btn btn-outline-danger"><i class="fa fa-trash"></i></button>
                        ';
                        echo '</td> </tr>';
                        }
            
                    }
            
                    }
                    if($tab == "iit_con"){
                        $query=mysqli_query($db,"SELECT * FROM iit_con");         
                         if (mysqli_num_rows($query)>0){
                          while ($row=mysqli_fetch_assoc($query)){
                            echo '<tr id="'.$row["Sno"].'">
                            <th scope="row">'.$row["Title"].'</th>
                            <td>'.$row["Info"].'</td>
                            <td><img src="images/iit_con/'.$row["Img"].'" width="100"></td>
                            <td><button onclick="show(this.id)" id = "'.$row["Sno"].'" data-bs-toggle="modal" data-bs-target="#EditModal" class="btn btn-outline-success"><i class="fa fa-edit"></i></button> <button data-del_tab = "main_slide" onclick=show2(this.id) id = "d'.$row["Sno"].'" data-toggle="modal" data-target="#confdel" class="btn btn-outline-danger"><i class="fa fa-trash"></i></button>
                            ';
                            echo '</td> </tr>';
                            }
                
                        }
                
                        }
                        if($tab == "oc"){
                            $query=mysqli_query($db,"SELECT * FROM fd");         
                             if (mysqli_num_rows($query)>0){
                              while ($row=mysqli_fetch_assoc($query)){
                                echo '<tr id="'.$row["Sno"].'">
                                <td><img src="images/oc/'.$row["Img"].'" width="100"></td>
                                <td><button onclick="showicd(this.id)" id = "'.$row["Sno"].'" data-bs-toggle="modal" data-bs-target="#EditModal" class="btn btn-outline-success"><i class="fa fa-edit"></i></button> <button data-del_tab = "main_slide" onclick=show2icd(this.id) id = "d'.$row["Sno"].'" data-toggle="modal" data-target="#confdel" class="btn btn-outline-danger"><i class="fa fa-trash"></i></button>
                                ';
                                echo '</td> </tr>';
                                }
                    
                            }
                    
                            }
                            if($tab == "oc_con"){
                                $query=mysqli_query($db,"SELECT * FROM fd_con");         
                                 if (mysqli_num_rows($query)>0){
                                  while ($row=mysqli_fetch_assoc($query)){
                                    echo '<tr id="'.$row["Sno"].'">
                                    <th scope="row">'.$row["Title"].'</th>
                                    <td>'.$row["Info"].'</td>
                                    <td><img src="images/oc_con/'.$row["Img"].'" width="100"></td>
                                    <td><button onclick="show(this.id)" id = "'.$row["Sno"].'" data-bs-toggle="modal" data-bs-target="#EditModal" class="btn btn-outline-success"><i class="fa fa-edit"></i></button> <button data-del_tab = "main_slide" onclick=show2(this.id) id = "d'.$row["Sno"].'" data-toggle="modal" data-target="#confdel" class="btn btn-outline-danger"><i class="fa fa-trash"></i></button>
                                    ';
                                    echo '</td> </tr>';
                                    }
                        
                                }
                        
                                }
                        
                if($tab == "prd"){
                    $query=mysqli_query($db,"SELECT * FROM prd");         
                     if (mysqli_num_rows($query)>0){
                      while ($row=mysqli_fetch_assoc($query)){
                        echo '<tr id="'.$row["Sno"].'">
                        <td><img src="images/prd/'.$row["Img"].'" width="100"></td>
                        <td><button onclick="showicd(this.id)" id = "'.$row["Sno"].'" data-bs-toggle="modal" data-bs-target="#EditModal" class="btn btn-outline-success"><i class="fa fa-edit"></i></button> <button data-del_tab = "main_slide" onclick=show2icd(this.id) id = "d'.$row["Sno"].'" data-toggle="modal" data-target="#confdel" class="btn btn-outline-danger"><i class="fa fa-trash"></i></button>
                        ';
                        echo '</td> </tr>';
                        }
            
                    }
            
                    }
                    if($tab == "main"){
                        $query=mysqli_query($db,"SELECT * FROM main");         
                         if (mysqli_num_rows($query)>0){
                          while ($row=mysqli_fetch_assoc($query)){
                            echo '<tr id="'.$row["Sno"].'">
                            <td><img src="images/main/'.$row["Img"].'" width="100"></td>
                            <td><button onclick="showicd(this.id)" id = "'.$row["Sno"].'" data-bs-toggle="modal" data-bs-target="#EditModal" class="btn btn-outline-success"><i class="fa fa-edit"></i></button> <button data-del_tab = "main_slide" onclick=show2icd(this.id) id = "d'.$row["Sno"].'" data-toggle="modal" data-target="#confdel" class="btn btn-outline-danger"><i class="fa fa-trash"></i></button>
                            ';
                            echo '</td> </tr>';
                            }
                
                        }
                
                        }
                        if($tab == "main_con"){
                            $query=mysqli_query($db,"SELECT * FROM main_con");         
                             if (mysqli_num_rows($query)>0){
                              while ($row=mysqli_fetch_assoc($query)){
                                echo '<tr id="'.$row["Sno"].'">
                                <th scope="row">'.$row["titlehead"].'</th>
                                <th scope="row">'.$row["Title"].'</th>
                                <td>'.$row["Info"].'</td>
                                <td><img src="images/main_con/'.$row["Img"].'" width="100" alt="no image available"></td>
                                <td><button onclick="showmain(this.id)" id = "'.$row["Sno"].'" data-bs-toggle="modal" data-bs-target="#EditModal" class="btn btn-outline-success"><i class="fa fa-edit"></i></button> <button data-del_tab = "main_slide" onclick=show2main(this.id) id = "d'.$row["Sno"].'" data-toggle="modal" data-target="#confdel" class="btn btn-outline-danger"><i class="fa fa-trash"></i></button>
                                ';
                                echo '</td> </tr>';
                                }
                    
                            }
                    
                            }
                            if($tab == "main_con2"){
                                $query=mysqli_query($db,"SELECT * FROM main_con2");         
                                 if (mysqli_num_rows($query)>0){
                                  while ($row=mysqli_fetch_assoc($query)){
                                    echo '<tr id="'.$row["Sno"].'">
                                    <th scope="row">'.$row["titlehead"].'</th>
                                    <th scope="row">'.$row["Title"].'</th>
                                    <td>'.$row["Info"].'</td>
                                    <td><img src="images/main_con2/'.$row["Img"].'" width="100" alt="no image available"></td>
                                    <td><button onclick="showmain(this.id)" id = "'.$row["Sno"].'" data-bs-toggle="modal" data-bs-target="#EditModal" class="btn btn-outline-success"><i class="fa fa-edit"></i></button> <button data-del_tab = "main_slide" onclick=show2main(this.id) id = "d'.$row["Sno"].'" data-toggle="modal" data-target="#confdel" class="btn btn-outline-danger"><i class="fa fa-trash"></i></button>
                                    ';
                                    echo '</td> </tr>';
                                    }
                        
                                }
                        
                                }
                    if($tab == "prd_con"){
                        $query=mysqli_query($db,"SELECT * FROM prd_con");         
                         if (mysqli_num_rows($query)>0){
                          while ($row=mysqli_fetch_assoc($query)){
                            echo '<tr id="'.$row["Sno"].'">
                            <th scope="row">'.$row["Title"].'</th>
                            <td>'.$row["Info"].'</td>
                            <td><img src="images/prd_con/'.$row["Img"].'" width="100"></td>
                            <td><button onclick="show(this.id)" id = "'.$row["Sno"].'" data-bs-toggle="modal" data-bs-target="#EditModal" class="btn btn-outline-success"><i class="fa fa-edit"></i></button> <button data-del_tab = "main_slide" onclick=show2(this.id) id = "d'.$row["Sno"].'" data-toggle="modal" data-target="#confdel" class="btn btn-outline-danger"><i class="fa fa-trash"></i></button>
                            ';
                            echo '</td> </tr>';
                            }
                
                        }
                
                        }
                        if($tab == "gallery"){
                            $query=mysqli_query($db,"SELECT * FROM gallery");         
                             if (mysqli_num_rows($query)>0){
                              while ($row=mysqli_fetch_assoc($query)){
                                echo '<tr id="'.$row["Sno"].'">
                                <th scope="row">'.$row["year"].'</th>
                            
                                <td><img src="images/gallery/'.$row["Img"].'" width="100"></td>
                                <td><button onclick="showgal(this.id)" id = "'.$row["Sno"].'" data-bs-toggle="modal" data-bs-target="#EditModal" class="btn btn-outline-success"><i class="fa fa-edit"></i></button> <button data-del_tab = "main_slide" onclick=show2gal(this.id) id = "d'.$row["Sno"].'" data-toggle="modal" data-target="#confdel" class="btn btn-outline-danger"><i class="fa fa-trash"></i></button>
                                ';
                                echo '</td> </tr>';
                                }
                    
                            }
                    
                            }
            if($tab == "certificate"){
                $query=mysqli_query($db,"SELECT * FROM certificate_requests");         
                 if (mysqli_num_rows($query)>0){
                  while ($row=mysqli_fetch_assoc($query)){
                    echo '<tr id="'.$row["sno"].'">                    
                    <td><img src="images/certificate/'.$row["idcard"].'" width="100"></td>
                    <td><img src="images/certificate/'.$row["student_image"].'" width="100"></td>
                <td>'.$row["firstname"].' '.$row["lastname"].' ('.$row["idnumber"].')
                <p><b>Father Name: </b>'.$row["fathername"].'</p>
                <p"><b>Studied</b>'.$row["studied"].'</p></td>
                <td><p><b>Role worked as:</b>'.$row["position_served"].'</p>
                <p><b>Certificate required as:</b>'.$row["position_required"].'</p>
                <p><b>Contribution period</b>'.$row["contributed_from"].'-'.$row["contributed_till"].'</p></td>
                <td><button data-del_tab = "main_slide" onclick=show2certificate(this.id) id = "d'.$row["sno"].'" data-toggle="modal" data-target="#confdel" class="btn btn-outline-danger"><i class="fa fa-trash"></i></button></td>
                    ';
                    echo '</tr>';
                    }
        
                }
        
                }



                if($tab == "weekly"){
                    $query=mysqli_query($db,"SELECT * FROM weekly_collections");         
                     if (mysqli_num_rows($query)>0){
                      while ($row=mysqli_fetch_assoc($query)){
                        echo '<tr id="'.$row["sno"].'">                    
                        <td>'.$row["date"].'</td>
                        <td>'.$row["collection_no"].'</td>
                        <td>'.$row["p1"].'</td>
                        <td>'.$row["p2"].'</td>
                        <td>'.$row["e1"].'</td>
                        <td>'.$row["e2"].'</td>
                        <td>'.$row["e3"].'</td>
                        <td>'.$row["e4"].'</td>
                        <td><button onclick="showweekly(this.id)" id = "'.$row["sno"].'" data-bs-toggle="modal" data-bs-target="#EditModal" class="btn btn-outline-success"><i class="fa fa-edit"></i></button> <button data-del_tab = "main_slide" onclick=show2weekly(this.id) id = "d'.$row["sno"].'" data-toggle="modal" data-target="#confdel" class="btn btn-outline-danger"><i class="fa fa-trash"></i></button></td>
                        ';
                        echo '</tr>';
                        }
            
                    }
            
                    }
     }




?>

