<!DOCTYPE html>
<html lang="en">
<head>
<?php include "header.php";
?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery | Helping Hands</title>
    <link rel="stylesheet" href="index1.css">
    <?php include'header.php';?>
    <script src="jquery.js"></script>
    <style>
        body{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items:center;
            overflow-x: hidden;
        }
    </style>
</head>
<body>
    <?php include "nav_rajiya.php";
    include_once 'admin/connection.php';?>
    <div id="popup" onclick="this.style.display='none'"><img src="" alt="Gallery Image"></div>
    <section id="gheader" class=flexer>
        <div id="left" class=flexer><img src="hhlogo.png" alt="rguktLogo"></div>
        <div id="middle">
            <h1 style="font-size:40px;color: rgb(170, 0, 0);">HELPING HANDS</h1>
            <h4>A Students' Initiative- An Abode of Service</h5>
            <h4>Regd No. 313/2019 under the A.P. Societies Registration Act., 2001</h5>
        </div>
        <div id="right"></div>
    </section>
    <hr class=seperator>
    <br>
    <div id="about_head">H.H Gallery</div>
    <hr style="border:none;border-bottom:3px solid rgba(128, 128, 128, 0.459);">
    <section id=gdrop>
        <div id="dfilters">
            <button id="all" class="king x flexer1" data-filter="all">ALL</button>
            <div class="scroller flexer">
                <?php
         $query=mysqli_query($db,"SELECT DISTINCT year FROM gallery order BY year DESC");       
        if (mysqli_num_rows($query)>0) {          
            while ($row=mysqli_fetch_assoc($query)) {
                
                echo '<button  class="flexer1 king" data-filter="'.$row['year'].'">'.$row['year'].'</button>';
            }
            
        }
        ?>
            </div>
        </div>
        <!-- <form action="" id=gdropDiv method=POST>
            <label for="year">Select Year: </label>
            <select name="year" id="year">
                <option value="2001" id="y2001">2001</option>
                <option value="2002" id="y2002">2002</option>
                <option value="2003" id="y2003">2003</option>
                <option value="2004" id="y2004">2004</option>
                <option value="2005" id="y2005">2005</option>
                <option value="2006" id="y2006">2006</option>
                <option value="2007" id="y2007">2007</option>
                <option value="2008" id="y2008">2008</option>
            </select>
            <input id=gsubmit type="submit" name="submit" value="Get Pictures">
        </div> -->
    </section>
    
    <section id="gallery">
        <?php
         $query=mysqli_query($db,"SELECT * FROM gallery");       
        if (mysqli_num_rows($query)>0) {          
            while ($row=mysqli_fetch_assoc($query)) {
                //echo '<div class="gcard y'.$row["year"].'" style=background:url("admin/images/gallery/'.$row["Img"].'")></div>';
                echo '<img class="gcard y'.$row["year"].'" src="admin/images/gallery/'.$row["Img"].'">';
            }
        }
        ?>
    </section>
    <script>
        $(document).ready(function(){
            //--------------------POPUP CODE----------------------//
            $(".gcard").click(function(e){
                //alert(this.src);
                $("#popup").css("display","flex");
                $("#popup img").attr("src",this.src);
            });
            //--------------------POPUP CODE----------------------//
            $("#dfilters button").click(function(){
                var value = $(this).attr("data-filter");
                $("#dfilters button").removeClass("x");
                $(this).addClass("x");
                if(this.id == "all"){
                    $("#gallery .gcard").show("50");
                }else{
                    // alert(".y"+value);
                    $("#gallery .gcard").not('.y'+value).hide("50");
                    $("#gallery .gcard").filter('.y'+value).show("50");
                }
            });
        });
    </script>
    <?php 
    include "footer.php"
    ?>
</body>
</html>