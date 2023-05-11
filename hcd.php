<html>
<head>
<?php
include_once 'header.php';
?>
    <link href="style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <?php include'header.php';?>
    <!-- <script src="files/jquery-3.6.0.js"></script>
    <link href="files/css/bootstrap.min.css" rel="stylesheet">
    <script src="files/js/bootstrap.min.js"></script> -->
</head>
<body>    
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><b id="popup_title1"></b></h5>
        
      </div>
      <div class="modal-body">
      <img src="" id="popup_image1">
      <div id="popup_content1"></div>
      </div>

    </div>
  </div>
</div>    
</div>
<?php
include_once 'nav_rajiya.php';
include_once 'admin/connection.php';
?>
<div id="hcd_title">
    <span>Health Care Department </span>
</div>
<div id="hcd_image">  
    
  <?php 
     $query=mysqli_query($db,"SELECT Img FROM hcd ");       
     $count=1;
    if (mysqli_num_rows($query)>0) { 
        
        echo '
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        ';           
        while ($row=mysqli_fetch_assoc($query)) {
            if($count == 1){
                echo '<div class="carousel-item active">
                <img src="admin/images/hcd/'.$row["Img"].'" class="d-block w-100" alt="...">
              </div>';
              $count=2;
            }
            else{
                echo '<div class="carousel-item">
                <img src="admin/images/hcd/'.$row["Img"].'" class="d-block w-100" alt="...">
              </div>';
            }
        }
        echo '
        
        </div>
        
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>';
    }
    ?>
  
  
</div>

</div>
<div id="hcd_info">
<b>Health Care Department (HCD)</b>
<br>
<span>
Health care is traditionally considered and regarded as an important signifier in championing the physiological, psychological, and socioeconomic well-being of individuals at very young age. 
Leading a successful life is intimately correlated with being in excellent health. The provision of healthcare services is the common purpose of the Health Care Department, which engages in dynamic interaction. HCD's primary objective is to promote health and wellbeing and inspire hope. 
The primary goal is to fund the students’ (mainly) and employees’ (partially) medical needs in order to provide immediate assistance in critical situations. In order to offer the student community affordable, high-quality medical care, it also facilitates Mega Health Camps.
</span>
</div>
<div id="hcd_donations">
<div id="hcd_donations_title">
    <div id="hcd_donations_title_inner">Contributions</div>
</div>

<div class="tharun">
<?php 
     $query=mysqli_query($db,"SELECT * FROM main_slide");       
    if (mysqli_num_rows($query)>0) { 
        while ($row=mysqli_fetch_assoc($query)) {
            echo '
            <div class="king box">
    <div class="part1">
    <div class="leftleft"><div class="inner1"></div></div>
    <div class="middle">
    <div class="righttop"><div class="inner2"></div></div>
    <div class="image"><img src="admin/images/hcd_con/'.$row["Img"].'" alt="tharun"></div>
    <div class="leftbottom"><div class="inner3"></div></div>
    </div>
    <div class="rightright"><div class="inner4"></div></div>
</div>
<div class="part2">
    <div class="part2_t"><div>'.$row["Title"].'</div></div>
    <div class="part2_d" style="display:none;"><div>'.$row["Info"].'</div></div>
    <div class="read_image"><button class="img btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Readmore >>></button></div>
</div>
</div>';
        }
    }
?>

</div>
</div>

</div>
    <script type="text/javascript">
    const boxes=document.querySelectorAll (".box");
    window.addEventListener('scroll',checkBoxes);
    checkBoxes();
    function checkBoxes(){
        console.log(window.innerHeight /5*4);
        const triggerBottom = window.innerHeight /5*4;
        boxes.forEach(box=>{
            const boxTop=box.getBoundingClientRect().top;
            if(boxTop < triggerBottom){
                box.classList.add("show");
            }
            else{
                box.classList.remove("show");
            }
        })
    }

    
    $( document ).ready(function() {
        $(".img").click(function(){
            var x=$(this).parentsUntil(".img");
            var k=$(x[2]).children();
            console.log(k[1]);
            var desc=$(k[1]).children();
            var desc1=$(desc[0]).children();
            console.log($(desc1).html());
            var desc2=$(desc[1]).children();
            console.log($(desc2).html());
            var gh=$(desc1).html();
            var gh2=$(desc2).html();
            var q=$(k[0]).children();
            var z=$(q[1]).children();
            var c=$(z[1]).children();
            var link=$(c[0]).attr("src");
            $("#popup_image1").attr("src", link);
            $("#popup_title1").html(gh);
            
            $("#popup_content1").html(gh2);
        });
        $("#popup").click(function hide(){
            $("#popup").hide();
        });
    });
</script>
<?php 
        include "footer.php";
    ?>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->
    <!-- jquery cdn -->

    <script  src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
</body>
</html>
