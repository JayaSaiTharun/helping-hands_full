<?php
session_start(); 
 $err = array();
 $db = mysqli_connect('localhost','root','','epiz_29509909_hh') or die('<center><h1>Error establishing a database connection</h1></center>');

if (isset($_POST['add-hcd'])) {
 	$title = $_POST['nhcd_title'];
 	$description = $_POST['nhcd_desc'];
    if(!empty($title) and !empty($description)){
        // $img=upload("nhcd_img",'/images/hcd/');
        $file='nhcd_img';
        $direct='./images/hcd/';
        $filename=$_FILES[$file]["name"];
        echo "<br>".$filename;
        $target=$direct.basename($_FILES[$file]["name"]);
        echo "<br>".$target;
        $tempfile = $_FILES[$file]["tmp_name"];
        echo "<br>".$tempfile;
        echo move_uploaded_file($tempfile, $target);
        $img="";
        if(move_uploaded_file($tempfile, $target))
        {
            echo "moved";
            $img=basename($_FILES[$file]["name"]);
        }
        echo "thbsihf".$img;
        // if($img != ""){
        //     echo "Data uploaded";
            if(mysqli_query($db,"insert into main_slide(Title, Info, Img) values ('$title', '$description', '$img')")){
                echo "<br>Data uploaded succesfully";
            }
        // }
    } 
 }
 function upload($file, $direct){
    $filename=$_FILES[$file]["name"];
    echo "<br>".$filename;
    $target=$direct.basename($_FILES[$file]["name"]);
    echo "<br>tharun".$target;
    $tempfile = $_FILES[$file]["tmp_name"];
    echo "<br>".$tempfile;
    // echo move_uploaded_file($tempfile, $target);
    if(move_uploaded_file($tempfile, $target))
	{
        echo "moved";
		return basename($_FILES[$file]["name"]);
	}
 }

?>