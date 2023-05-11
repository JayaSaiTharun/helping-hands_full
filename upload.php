<?php
session_start(); 
 $err = array();
 $db = mysqli_connect('localhost','root','','epiz_29509909_hh') or die('<center><h1>Error establishing a database connection</h1></center>');


 if (isset($_POST['add-hcd'])) {
 
    $filename = $_FILES["nhcd_"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./image/" . $filename;
 
    $db = mysqli_connect("localhost", "root", "", "geeksforgeeks");
 
    // Get all the submitted data from the form
    $sql = "INSERT INTO image (filename) VALUES ('$filename')";
 
    // Execute query
    mysqli_query($db, $sql);
 
    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
}
 ?>