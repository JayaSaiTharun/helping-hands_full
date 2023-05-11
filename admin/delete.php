<?php
session_start(); 
 $err = array();
 $db = mysqli_connect('localhost','root','','epiz_29509909_hh') or die('<center><h1>Error establishing a database connection</h1></center>');
 if(isset($_POST['tab1'])){
    $tab=$_POST['tab1'];
    if($tab == "hcd_con"){
    $id = $_POST['sno'];
    $src = $_POST['src'];
    $sql="DELETE FROM main_slide WHERE Sno = '$id'";
    unlink($src);
    
    if (mysqli_query($db, $sql)) {
        echo "success";
    } else {
        echo "failed";
    }
}
if($tab == "hcd"){
    $id = $_POST['sno'];
    $src = $_POST['src'];
    $sql="DELETE FROM hcd WHERE Sno = '$id'";
    unlink($src);
    
    if (mysqli_query($db, $sql)) {
        echo "success";
    } else {
        echo "failed";
    }
}
    if($tab == "icd"){
        $id = $_POST['sno'];
        $src = $_POST['src'];
        $sql="DELETE FROM icd WHERE Sno = '$id'";
        unlink($src);
        
        if (mysqli_query($db, $sql)) {
            echo "success";
        } else {
            echo "failed";
        }
    }
    if($tab == "icd_con"){
        $id = $_POST['sno'];
        $src = $_POST['src'];
        $sql="DELETE FROM icd_con WHERE Sno = '$id'";
        unlink($src);
        
        if (mysqli_query($db, $sql)) {
            echo "success";
        } else {
            echo "failed";
        }
    }
    if($tab == "iit"){
        $id = $_POST['sno'];
        $src = $_POST['src'];
        $sql="DELETE FROM iit WHERE Sno = '$id'";
        unlink($src);
        
        if (mysqli_query($db, $sql)) {
            echo "success";
        } else {
            echo "failed";
        }
    }
    if($tab == "iit_con"){
        $id = $_POST['sno'];
        $src = $_POST['src'];
        $sql="DELETE FROM iit_con WHERE Sno = '$id'";
        unlink($src);
        
        if (mysqli_query($db, $sql)) {
            echo "success";
        } else {
            echo "failed";
        }
    }
    if($tab == "oc"){
        $id = $_POST['sno'];
        $src = $_POST['src'];
        $sql="DELETE FROM fd WHERE Sno = '$id'";
        unlink($src);
        
        if (mysqli_query($db, $sql)) {
            echo "success";
        } else {
            echo "failed";
        }
    }
    if($tab == "main"){
        $id = $_POST['sno'];
        $src = $_POST['src'];
        $sql="DELETE FROM main WHERE Sno = '$id'";
        unlink($src);
        
        if (mysqli_query($db, $sql)) {
            echo "success";
        } else {
            echo "failed";
        }
    }
    if($tab == "oc_con"){
        $id = $_POST['sno'];
        $src = $_POST['src'];
        $sql="DELETE FROM fd_con WHERE Sno = '$id'";
        unlink($src);
        
        if (mysqli_query($db, $sql)) {
            echo "success";
        } else {
            echo "failed";
        }
    }
    if($tab == "main_con"){
        $id = $_POST['sno'];
        $src = $_POST['src'];
        $sql="DELETE FROM main_con WHERE Sno = '$id'";
        unlink($src);
        
        if (mysqli_query($db, $sql)) {
            echo "success";
        } else {
            echo "failed";
        }
    }
    if($tab == "main_con2"){
        $id = $_POST['sno'];
        $src = $_POST['src'];
        $sql="DELETE FROM main_con2 WHERE Sno = '$id'";
        unlink($src);
        
        if (mysqli_query($db, $sql)) {
            echo "success";
        } else {
            echo "failed";
        }
    }
    if($tab == "gallery"){
        $id = $_POST['sno'];
        $src = $_POST['src'];
        $sql="DELETE FROM gallery WHERE Sno = '$id'";
        unlink($src);
        
        if (mysqli_query($db, $sql)) {
            echo "success";
        } else {
            echo "failed";
        }
    }
    if($tab == "prd"){
        $id = $_POST['sno'];
        $src = $_POST['src'];
        $sql="DELETE FROM prd WHERE Sno = '$id'";
        unlink($src);
        
        if (mysqli_query($db, $sql)) {
            echo "success";
        } else {
            echo "failed";
        }
    }
    if($tab == "prd_con"){
        $id = $_POST['sno'];
        $src = $_POST['src'];
        $sql="DELETE FROM prd_con WHERE Sno = '$id'";
        unlink($src);
        
        if (mysqli_query($db, $sql)) {
            echo "success";
        } else {
            echo "failed";
        }
    }
    if($tab == "certificate"){
        $id = $_POST['sno'];
        $src1 = $_POST['src1'];
        $src2 = $_POST['src2'];
        $sql="DELETE FROM certificate_requests WHERE Sno = '$id'";
        unlink($src1);
        unlink($src2);
        
        if (mysqli_query($db, $sql)) {
            echo "success";
        } else {
            echo "failed";
        }
    }
    if($tab == "weekly"){
        $id = $_POST['sno'];
        $sql="DELETE FROM weekly_collections WHERE Sno = '$id'";        
        if (mysqli_query($db, $sql)) {
            echo "success";
        } else {
            echo "failed";
        }
    }
}
?>
