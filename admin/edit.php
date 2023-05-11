<?php
session_start(); 
 $err = array();
 $db = mysqli_connect('localhost','root','','epiz_29509909_hh') or die('<center><h1>Error establishing a database connection</h1></center>');
 if(isset($_POST['tab1'])){
    $tab=$_POST['tab1'];
    if($tab == "hcd_con"){
    $id1 = $_POST['sno'];
    $id = strtok($id1, "#");
    $src=strtok("#");    
    unlink(($src));
    $title = $_POST['title'];
 	  $description = $_POST['description'];
    $filename = $_FILES["photo"]["name"];
    $tempname = $_FILES["photo"]["tmp_name"];
    $folder = "./images/hcd_con/".$filename;
    $sql= "UPDATE main_slide SET Title = '$title', Info='$description', Img='$filename' WHERE Sno = '$id'";
    mysqli_query($db, $sql);
    if (move_uploaded_file($tempname, $folder)) {
        echo "success";
    } else {
        echo "failed";
    }
}
if($tab == "hcd"){
    $id1 = $_POST['sno'];
    $id = strtok($id1, "#");
    $src=strtok("#");    
    unlink(($src));
    $filename = $_FILES["photo"]["name"];
    $tempname = $_FILES["photo"]["tmp_name"];
    $folder = "./images/hcd/".$filename;
    $sql= "UPDATE hcd SET  Img='$filename' WHERE Sno = '$id'";
    mysqli_query($db, $sql);
    if (move_uploaded_file($tempname, $folder)) {
        echo "success";
    } else {
        echo "failed";
    }
 }
if($tab == "icd"){
    $id1 = $_POST['sno'];
    $id = strtok($id1, "#");
    $src=strtok("#");    
    unlink(($src));
    $filename = $_FILES["photo"]["name"];
    $tempname = $_FILES["photo"]["tmp_name"];
    $folder = "./images/icd/".$filename;
    $sql= "UPDATE icd SET  Img='$filename' WHERE Sno = '$id'";
    mysqli_query($db, $sql);
    if (move_uploaded_file($tempname, $folder)) {
        echo "success";
    } else {
        echo "failed";
    }
 }

 if($tab == "icd_con"){
    $id1 = $_POST['sno'];
    $id = strtok($id1, "#");
    $src=strtok("#");    
    unlink(($src));
    $title = $_POST['title'];
 	  $description = $_POST['description'];
    $filename = $_FILES["photo"]["name"];
    $tempname = $_FILES["photo"]["tmp_name"];
    $folder = "./images/icd_con/".$filename;
    $sql= "UPDATE icd_con SET Title = '$title', Info='$description', Img='$filename' WHERE Sno = '$id'";
    mysqli_query($db, $sql);
    if (move_uploaded_file($tempname, $folder)) {
        echo "success";
    } else {
        echo "failed";
    }
}

 if($tab == "main"){
    $id1 = $_POST['sno'];
    $id = strtok($id1, "#");
    $src=strtok("#");    
    unlink(($src));
    $filename = $_FILES["photo"]["name"];
    $tempname = $_FILES["photo"]["tmp_name"];
    $folder = "./images/main/".$filename;
    $sql= "UPDATE main SET  Img='$filename' WHERE Sno = '$id'";
    mysqli_query($db, $sql);
    if (move_uploaded_file($tempname, $folder)) {
        echo "success";
    } else {
        echo "failed";
    }
 }

 if($tab == "icd_con"){
    $id1 = $_POST['sno'];
    $id = strtok($id1, "#");
    $src=strtok("#");    
    unlink(($src));
    $title = $_POST['title'];
 	  $description = $_POST['description'];
    $filename = $_FILES["photo"]["name"];
    $tempname = $_FILES["photo"]["tmp_name"];
    $folder = "./images/icd_con/".$filename;
    $sql= "UPDATE icd_con SET Title = '$title', Info='$description', Img='$filename' WHERE Sno = '$id'";
    mysqli_query($db, $sql);
    if (move_uploaded_file($tempname, $folder)) {
        echo "success";
    } else {
        echo "failed";
    }
}
if($tab == "main_con"){
    $id1 = $_POST['sno'];
    $id = strtok($id1, "#");
    $src=strtok("#");    
    unlink(($src));
    $titlehead = $_POST['titlehead'];
    $title = $_POST['title'];
 	  $description = $_POST['description'];
    $filename = $_FILES["photo"]["name"];
    $tempname = $_FILES["photo"]["tmp_name"];
    $folder = "./images/main_con/".$filename;
    $sql= "UPDATE main_con SET titlehead='$titlehead',Title = '$title', Info='$description', Img='$filename' WHERE Sno = '$id'";
    mysqli_query($db, $sql);
    if (move_uploaded_file($tempname, $folder)) {
        echo "success";
    } else {
        echo "failed";
    }
}
if($tab == "main_con2"){
    $id1 = $_POST['sno'];
    $id = strtok($id1, "#");
    $src=strtok("#");    
    unlink(($src));
    $titlehead = $_POST['titlehead'];
    $title = $_POST['title'];
 	  $description = $_POST['description'];
    $filename = $_FILES["photo"]["name"];
    $tempname = $_FILES["photo"]["tmp_name"];
    $folder = "./images/main_con2/".$filename;
    $sql= "UPDATE main_con2 SET titlehead='$titlehead',Title = '$title', Info='$description', Img='$filename' WHERE Sno = '$id'";
    mysqli_query($db, $sql);
    if (move_uploaded_file($tempname, $folder)) {
        echo "success";
    } else {
        echo "failed";
    }
}

if($tab == "iit"){
    $id1 = $_POST['sno'];
    $id = strtok($id1, "#");
    $src=strtok("#");    
    unlink(($src));
    $filename = $_FILES["photo"]["name"];
    $tempname = $_FILES["photo"]["tmp_name"];
    $folder = "./images/iit/".$filename;
    $sql= "UPDATE iit SET  Img='$filename' WHERE Sno = '$id'";
    mysqli_query($db, $sql);
    if (move_uploaded_file($tempname, $folder)) {
        echo "success";
    } else {
        echo "failed";
    }
 }
 if($tab == "iit_con"){
    $id1 = $_POST['sno'];
    $id = strtok($id1, "#");
    $src=strtok("#");    
    unlink(($src));
    $title = $_POST['title'];
 	  $description = $_POST['description'];
    $filename = $_FILES["photo"]["name"];
    $tempname = $_FILES["photo"]["tmp_name"];
    $folder = "./images/iit_con/".$filename;
    $sql= "UPDATE iit_con SET Title = '$title', Info='$description', Img='$filename' WHERE Sno = '$id'";
    mysqli_query($db, $sql);
    if (move_uploaded_file($tempname, $folder)) {
        echo "success";
    } else {
        echo "failed";
    }
}

if($tab == "prd"){
    $id1 = $_POST['sno'];
    $id = strtok($id1, "#");
    $src=strtok("#");    
    unlink(($src));
    $filename = $_FILES["photo"]["name"];
    $tempname = $_FILES["photo"]["tmp_name"];
    $folder = "./images/prd/".$filename;
    $sql= "UPDATE prd SET  Img='$filename' WHERE Sno = '$id'";
    mysqli_query($db, $sql);
    if (move_uploaded_file($tempname, $folder)) {
        echo "success";
    } else {
        echo "failed";
    }
 }
 if($tab == "prd_con"){
    $id1 = $_POST['sno'];
    $id = strtok($id1, "#");
    $src=strtok("#");    
    unlink(($src));
    $title = $_POST['title'];
 	  $description = $_POST['description'];
    $filename = $_FILES["photo"]["name"];
    $tempname = $_FILES["photo"]["tmp_name"];
    $folder = "./images/prd_con/".$filename;
    $sql= "UPDATE prd_con SET Title = '$title', Info='$description', Img='$filename' WHERE Sno = '$id'";
    mysqli_query($db, $sql);
    if (move_uploaded_file($tempname, $folder)) {
        echo "success";
    } else {
        echo "failed";
    }
}
if($tab == "oc"){
    $id1 = $_POST['sno'];
    $id = strtok($id1, "#");
    $src=strtok("#");    
    unlink(($src));
    $filename = $_FILES["photo"]["name"];
    $tempname = $_FILES["photo"]["tmp_name"];
    $folder = "./images/oc/".$filename;
    $sql= "UPDATE fd SET  Img='$filename' WHERE Sno = '$id'";
    mysqli_query($db, $sql);
    if (move_uploaded_file($tempname, $folder)) {
        echo "success";
    } else {
        echo "failed";
    }
 }
 if($tab == "oc_con"){
    $id1 = $_POST['sno'];
    $id = strtok($id1, "#");
    $src=strtok("#");    
    unlink(($src));
    $title = $_POST['title'];
 	  $description = $_POST['description'];
    $filename = $_FILES["photo"]["name"];
    $tempname = $_FILES["photo"]["tmp_name"];
    $folder = "./images/oc_con/".$filename;
    $sql= "UPDATE fd_con SET Title = '$title', Info='$description', Img='$filename' WHERE Sno = '$id'";
    mysqli_query($db, $sql);
    if (move_uploaded_file($tempname, $folder)) {
        echo "success";
    } else {
        echo "failed";
    }
}
if($tab == "gallery"){
    $id1 = $_POST['sno'];
    $id = strtok($id1, "#");
    $src=strtok("#");    
    unlink(($src));
    $title = $_POST['title'];
 	
    $filename = $_FILES["photo"]["name"];
    $tempname = $_FILES["photo"]["tmp_name"];
    $folder = "./images/gallery/".$filename;
    $sql= "UPDATE gallery SET year = '$title', Img='$filename' WHERE Sno = '$id'";
    mysqli_query($db, $sql);
    if (move_uploaded_file($tempname, $folder)) {
        echo "success";
    } else {
        echo "failed";
    }
}
 if($tab == "weekly"){
    $id=$_POST['editid'];
    $date = $_POST['editofdate'];
    $weekly = $_POST['editweekly_no'];
    $p1 = $_POST['editpuc1'];
    $p2 = $_POST['editpuc2'];
    $e1 = $_POST['edite1'];
    $e2 = $_POST['edite2'];
    $e3 = $_POST['edite3'];
    $e4 = $_POST['edite4'];
    $sql= "UPDATE weekly_collections SET  collection_no='$weekly', date='$date', p1='$p1', p2='$p2', e1='$e1', e2='$e2', e3='$e3', e4='$e4' WHERE sno = '$id'";
    
    if (mysqli_query($db, $sql)) {
        echo "success";
    } else {
        echo "failed";
    }
 }
}
?>
