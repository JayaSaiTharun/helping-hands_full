<?php
session_start();
if(!isset($_SESSION['admin']) and $_SERVER['REQUEST_URI'] != "/admin/login.php"){
 header('location:login.php');
}
if(isset($_SESSION['admin']) and $_SERVER['REQUEST_URI'] == "/admin/login.php"){
   header('location:index.php');
}

?>
<button type="button" class="btn btn-light"><a href="index.php">Main Slide</a></button>
<button type="button" class="btn btn-light"><a href="main_con.php">Main_latest</a></button>
<button type="button" class="btn btn-light"><a href="main_con2.php">Main_Archieves</a></button>
<button type="button" class="btn btn-light"><a href="gallery.php">Gallery</a></button>
<button type="button" class="btn btn-light"><a href="hcd.php">HCD SLide</a></button>
<button type="button" class="btn btn-light"><a href="hcd_con.php">HCD contri..</a></button>
<button type="button" class="btn btn-light"><a href="iit.php">IIT SLide</a></button>
<button type="button" class="btn btn-light"><a href="iit_con.php">IIT contri..</a></button>
<button type="button" class="btn btn-light"><a href="prd.php">PRD SLide</a></button>
<button type="button" class="btn btn-light"><a href="prd_con.php">PRD contri..</a></button>
<button type="button" class="btn btn-light"><a href="icd.php">ICD SLide</a></button>
<button type="button" class="btn btn-light"><a href="icd_con.php">ICD contri..</a></button>
<button type="button" class="btn btn-light"><a href="oc.php">OC SLide</a></button>
<button type="button" class="btn btn-light"><a href="oc_con.php">OC contri..</a></button>
<button type="button" class="btn btn-light"><a href="weeklyadmin.php">Weekly</a></button>
<button type="button" class="btn btn-light"><a href="formadmin.php">Certificates</a></button>
