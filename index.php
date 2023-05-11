<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Home | Helping Hands</title>
    <link href="css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css" integrity="sha512-SgaqKKxJDQ/tAUAAXzvxZz33rmn7leYDYfBP+YoMRSENhf3zJyx3SBASt/OfeQwBHA1nxMis7mM3EV/oYT6Fdw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <style type="text/css"></style>
</head>
<body>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><b id="popup_title1"></b></h5>
        
      </div>
      <div class="modal-body">
      <div id="popup_link1"><a href="">Link about this post</a></div>
      <img src="" id="popup_image1">
      <div id="popup_desc1" ></div>
      </div>

    </div>
  </div>
</div> 
    <?php include'nav_rajiya.php';
    include "admin/connection.php";?>

    <!--  -->
    <div class="logo-container1">
        <div class="image1"><img class="ourlogo" src="hhlogo.png" alt="Logo"></div>
        <div class="content-container1">
            <div class="header1">HELPING HANDS RGUKT NUZVID</div>
            <div class="header2">A Students's Initiative- An Abode of Service</div>
            <div class="header3">(Regd No. 313/2019 under the A.P. Societies Registration Act., 2001)</div>
        </div>
    </div>
    <!-- horizontal line -->
    <hr class="hr1">

    <!-- marquee weekly collection -->
    <section class="container">
		<div class="row">
            <div class="col-sm-12">
				  <marquee onmouseover="stop()" onmouseout="start()" behavior="scroll" scrollamount="4" direction="left"> 
				  <a class="marquee" href="Adm22/home"><strong>Service is celebration for Helping Hands </strong></a></marquee>
			</div>
        </div>
    </section>

    <!-- carousel -->
    <section>
       <div class="container update">
            <div class="col-sm-12 d-block dialy-updates">
   
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                      <div class="carousel-inner">
                      <?php 
     $query=mysqli_query($db,"SELECT Img FROM main ");       
     $count=1;
    if (mysqli_num_rows($query)>0) {     
        while ($row=mysqli_fetch_assoc($query)) {
            if($count == 1){
                echo '<div class="carousel-item active" >
                <img src="admin/images/main/'.$row["Img"].'" class="d-block w-100" alt="...">
            </div>';
              $count=2;
            }
            else{
                echo '<div class="carousel-item" >
                <img src="admin/images/main/'.$row["Img"].'" class="d-block w-100" alt="...">
            </div>';
            }
        }
        
    }
    ?>
                      </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>
    





<!-- HTML for the links -->
<!-- <a href="#" class="modal-link" data-content="Modal content 1">Open Modal 1</a>
<a href="#" class="modal-link" data-content="Modal content 2">Open Modal 2</a>
<a href="#" class="modal-link" data-content="Modal content 3">Open Modal 3</a> -->

    <!-- News and notification -->
    <section id="news">
        <div class="container p-5">
            <div class="row">
            <h2 class="notify justify-content-center"style="text-indent:10px;text-align: center;">- News and Events -  </h2>

                <div class="col-md-6 p-3 ">
                    <div class="card ">
                        <div class="card-body">
                        <h5 class="card-title "><strong>Latest</strong></h5>

                        <div class="whole" style="padding-top:4%;" >
                                <marquee loop="infinite" style="height:230px;" onmouseover="stop()" onmouseout="start()" behavior="scroll" scrollamount="4" direction="up"> 
                                <?php 
     $query=mysqli_query($db,"SELECT * FROM main_con ");       
     $count=1;
    if (mysqli_num_rows($query)>0) {     
        while ($row=mysqli_fetch_assoc($query)) {
                echo '<div class="content" style="margin-top:10px;"><a class="king_d" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" style="text-decoration:none;">'.$row['titlehead'].'</a>
                <div class="link" style="display: none;"> '.$row['Title'].'</div>
                <div class="desc_d" style="display: none;"> '.$row['Info'].'</div>
                <img src="admin/images/main_con/'.$row['Img'].'" style="display: none;">
                </div>';
        }
        
    }
    ?>
                             
                                </marquee>
                            </div></div>
                    </div>
                </div>
                <div class="col-md-6 p-3">
                    <div class="card">
                        <div class="card-body">
                        <h5 class="card-title"><strong>Archives</strong></h5>
                        <div class="whole" style="padding-top:4%;" >
                        <marquee loop="infinite" style="height:230px;" onmouseover="stop()" onmouseout="start()" behavior="scroll" scrollamount="4" direction="up"> 
                                <?php 
     $query=mysqli_query($db,"SELECT * FROM main_con2");       
    if (mysqli_num_rows($query)>0) {     
        while ($row=mysqli_fetch_assoc($query)) {
                echo '<div class="content" style="margin-top:10px;"><a class="king_d" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" style="text-decoration:none;">'.$row['titlehead'].'</a>
                <div class="link" style="display: none;"> '.$row['Title'].'</div>
                <div class="desc_d" style="display: none;"> '.$row['Info'].'</div>
                <img src="admin/images/main_con2/'.$row['Img'].'" style="display: none;">
                </div>';
        }
        
    }
    ?>
                             
                                </marquee>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- HTML for the modal -->
        <!-- <div class="modal" id="my-modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div id="modal-content"></div>
        </div>
        </div> -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    Modal body text goes here.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
        </div>

    </section>

    <!-- work flow -->
    <section>
        <div class="container"  id="features-container">
            <div class="row">
            <h2 class="work justify-content-center"style="text-indent:10px; text-align: center;">- Our Work Flow -  </h2>

                <div class="col-md-4 p-1">
                    <div class="card">
                        <div class="card-body"> 
                            <br>
                            <center><img class="card-title " src="img/strong_team.png" width="75px" height="75px">
                            <h5 class="card-title">Building Strong Team</h5></center> <br>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-1 ">
                    <div class="card">
                        <div class="card-body ">
                            <br>
                            <center> <img class="card-title" src="img/fund_raising.png" width="75px" height="75px">
                            <h5 class="card-text ">Fund Raising</h5></center> <br>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-1 ">
                    <div class="card">
                        <div class="card-body ">
                            <br>
                            <center><img class="card-title " src="img/Help.png" width="75px" height="75px">
                            <h5 class="card-text">Helping The needy</h5></center><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- certifications -->
    <section class="certs p-5 ">
        <div class="container " id="certs">
            <div class="row">
            <h2 class="certs-label justify-content-center mb-3"style="text-indent:10px;color:#000000; text-align: center;">- Certifications -  </h2>

                <div class="col-md-3 p-1">
                <div class="card">
                    <div class="card-body">
                    <center> <a href="assets/certificates/ngo.pdf" style="text-decoration: none;color:black;" target="_blank" alt="NGO certificate">NGO Registration</a></center>
                    </div>
                </div>
                </div>
                <div class="col-md-3 p-1">
                <div class="card">
                    <div class="card-body">
                    <center><a href="assets/certificates/12A.pdf" style="text-decoration: none;color:black;"target="_blank" alt="12-A Certificate">12-A Certificate</a></center>
                    </div>
                </div>
                </div>
                <div class="col-md-3 p-1">
                <div class="card">
                    <div class="card-body">
                    <center><a href="assets/certificates/lockdown.pdf" style="text-decoration: none;color:black;" target="_blank" alt="HH Lockdown Initiatives">HH Lockdown Initiatives</a></center>
                    </div>
                </div>
                </div>
                <div class="col-md-3 p-1">
                <div class="card">
                    <div class="card-body">
                    <center><a href="assets/certificates/kerala.pdf" style="text-decoration: none;color:black;" target="_blank" alt="Kerala Floods Acknowledgement">Kerala Floods Acknowledgement</a></center>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- blog slider -->
    <section class="p-5">
        <?php include 'blog-slider.php'?>
    </section>

    <!-- Footer -->
<br>
    <?php include 'footer.php'?>

    <script>
        $( document ).ready(function() {
        $(".king_d").click(function(){
            var xc=this.className;
           console.log(xc); 
            var x=$(this).parentsUntil("marquee");
            console.log(x);
            var k=$(x[0]).children();
            console.log(k);
            var title=$(k[0]).html();
            var link=$(k[1]).html();
            console.log(k[2]);
            var image=$(k[3]).attr("src");
            console.log(image);
            var desc=$(k[2]).html();
            $("#popup_image1").attr("src", image);
            $("#popup_title1").html(title);
            $("#popup_link1").html(link);
            $("#popup_desc1").html(desc);
        });
        $("#popup").click(function hide(){
            $("#popup").hide();
        });
    });
        

        // Get the modal and the modal content element
        // const modal = document.getElementById("my-modal");
        // const modalContent = document.getElementById("modal-content");
        
        // Get all the modal links and attach a click event listener to each one
        // const modalLinks = document.querySelectorAll(".modal-link");
        // modalLinks.forEach(link => {
        //     link.addEventListener("click", event => {
            // Prevent the default link behavior
            // event.preventDefault();
            
            // Get the content for the modal from the data-content attribute of the link
            // const content = link.getAttribute("data-content");
            
            // Set the content of the modal
            // modalContent.innerHTML = content;
            
            // Display the modal
            // modal.style.display = "block";
            // });
        // });
        
        // Attach a click event listener to the close button to hide the modal
        // const closeButton = document.querySelector(".close");
        // closeButton.addEventListener("click", () => {
        //     modal.style.display = "none";
        // });
        // Get all the links that will open the modal
       var links = document.querySelectorAll('.modal-link');

       // Add an event listener to each link
       links.forEach(function(link) {
            link.addEventListener('click', function(event) {
             event.preventDefault(); // Prevent the default link behavior
              $('#myModal').modal('show'); // Show the modal
            });
        });

    </script>
</body>
</html>