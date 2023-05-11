<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate Request form</title>
    <link rel="stylesheet" href="files/css/bootstrap.min.css">
    <link href="nav_rajiya.css" rel="stylesheet">


    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">	
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <style type="text/css">
        .form-control {
            border: 0px;
            border-bottom: 2px solid gray;
            text-align: center;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        .form-control:focus{
            border-color: transparent;
            box-shadow: inset 0 1px 1px rgba(235, 229, 229, 0);
            box-shadow: 0 3px 5px -3px #000;
        }
        .col-md-6,
        .col-md-3,
        .col-md-4 {
            padding: 10px;
        }

        .row {
            padding: 15px;
        }

        .form-floating>.form-control::placeholder {
            color: revert;
        }

        .form-floating>.form-control:not(:focus)::placeholder {
            color: transparent;
        }
        form{
            background-color: rgb(255, 255, 255);
        }
        body{
            background-color:#e9ecef;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg fixed-top">
<a class="navbar-brand" href="index.php">
    <img src="hhlogo.png" width="30" height="30" class="d-inline-block align-top" alt="">&nbsp;
    <div class="brand-text">HELPING HANDS RGUKT NUZVID</div>
  </a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
  <i class="fa-solid fa-bars-staggered"></i>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="gallery.php">Gallery</a>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Departments
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="icd.php">Internal Care</a></li>
            <li><a class="dropdown-item" href="hcd.php">Health Care</a></li>
            <li><a class="dropdown-item" href="prd.php">Public Relation</a></li>
            <li><a class="dropdown-item" href="iit.php">Innovative and Informative Team</a></li>
            <li><a class="dropdown-item" href="oc.php">Outside Charity</a></li>
             
          </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about us.php">About Us</a>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          People
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="people/executive.html">Executive Commitee</a></li>
            <li><a class="dropdown-item" href="people/student.html">Students</a></li>
            <li><a class="dropdown-item" href="people/web.html">Web Team</a></li>
          </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="form.php">Certificate</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Weekly Collections</a>
      </li> -->
     
  </div>
</nav>
    <div class="container mt-5">
        <h1 class="pt-4">Please fill this form to submit a certificate request</h1>
        <form class="rounded-2" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" onsubmit="return submitted()" enctype="multipart/form-data">
            <div class="row">
                <div class="form-floating col-md-6">
                    <input type="text" required class="form-control" name="firstname" id="firstName" placeholder="First Name" onkeyup="validateFname()">
                    <label for="firstName">First Name</label>
                </div>
                <div class="form-floating col-md-6">
                    <input type="text" required class="form-control" name="lastname" id="lastName" placeholder="Last Name" onkeyup="validateLname()">
                    <label for="lastName">Last Name</label>
                </div>
            </div>
            <div class="row">
                <div class="form-floating col-md-12">
                    <input type="text" required class="form-control" name="fathername" id="fatherName" placeholder="Father Name" onkeyup="validateFatName()">
                    <label for="fatherName">Father Name</label>
                </div>
            </div>
            <div class="row">
                <div class="form-floating col-md-6">
                    <input type="text" id="idNum" required class="form-control" name="idnumber"  placeholder="Enter your ID number" onkeyup="validateId()">
                    <label for="idNum">ID Number</label>
                </div>
                <div class="col-md-6">
                    <label for="idCard">Upload IDcard Image</label>
                    <input type="file"  name="idcard" required class="form-control border-0" accept="image/*" id="idCard"
                        placeholder="Upload ID card">
                </div>
            </div>
            <div class="row">
                <div class="form-floating col-md-6">
                    <input type="text" required class="form-control" name="studied" onkeyup="validateStudied()" placeholder="Ex: 2018-2024" id="studyYear">
                    <label for="studyYear">Studied</label>
                </div>
                <div class="col-md-3">
                    <label for="contributedYearsFrom">Contributed From</label>
                    <input type="date" id="contributedYearsFrom" name="contributedfrom" required class="form-control">
                </div>
                <div class="col-md-3">
                    <label for="contributedYearsTill">Contributed Till</label>
                    <input type="date" id="contributedYearsTill" name="contributedtill" required class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="positionWorked">Position you worked as:</label>
                    <select id="positionWorked" name="positionserved" required class="form-select form-select-md">
                        <option selected></option>
                        <option value="ec-member">EC member</option>
                        <option value="hr">HR</option>
                        <option value="fr">FR</option>
                        <option value="voluntee">Volunteer</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="positionRequested">Position in the Certificate you need:</label>
                    <select id="positionRequested" name="positionrequired" class="form-select form-select-md" required>
                        <option selected></option>
                        <option value="ec-member">EC member</option>
                        <option value="hr">HR</option>
                        <option value="fr">FR</option>
                        <option value="voluntee">Volunteer</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <label for="image">Upload your Image</label>
                <input type="file"  accept="image/*" name="studentimage" id="image" required class="form-control border-0">
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button class="btn btn-primary float-end" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <script type="text/javascript">
        function submitted(){
            if(validateFname() && validateLname() && validateFatName() && validateId() && validateStudied()){
                return true;
            }
            return false;
        }
        function validateFatName(){
            var ele=document.getElementById('fatherName');
            if(ele.value.length>2){
                ele.style.borderColor='green';
                return true;
            }
            ele.style.borderColor='red';
            return false;
        }
        function validateFname(){
            var ele=document.getElementById('firstName');
            if(ele.value.length>2){
                ele.style.borderColor='green';
                return true;
            }
            ele.style.borderColor='red';
            return false;
        }
        function validateLname(){
            var ele=document.getElementById('lastName');
            if(ele.value.length>2){
                ele.style.borderColor='green';
                return true;
            }
            ele.style.borderColor='red';
            return false;
        }
        function validateId(){
            var ele=document.getElementById('idNum');
            var pattern=/(N|n)\d{6}/i;
            if(pattern.test(ele.value)){
                ele.style.borderColor='green';
                return true;
            }
            ele.style.borderColor='red';
            return false;
        }
        function validateStudied(){
            var ele=document.getElementById('studyYear');
            var pattern=/(\d{4})(-)(\d{4})/i;
            if(pattern.test(ele.value)){
                ele.style.borderColor='green';
                return true;
            }
            ele.style.borderColor='red';
            return false;
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="files/js/bootstrap.min.js"></script>
    
</body>
</html>
<?php 
    require('admin/connection.php');
    if($_SERVER['REQUEST_METHOD']==='POST'){
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $fathername=$_POST['fathername'];
        $idnumber=$_POST['idnumber'];
        $studied=$_POST['studied'];
        $contributedfrom=$_POST['contributedfrom'];
        $contributedtill=$_POST['contributedtill'];
        $positionserved=$_POST['positionserved'];
        $positionrequired=$_POST['positionrequired'];
        $id=$_FILES['idcard']['name'];
        $image=$_FILES['studentimage']['name'];
        $image1=$idnumber.$image;
        $image='./admin/images/certificate/'.$idnumber.$image;
        $tempimage=$_FILES['studentimage']['tmp_name'];
        $tempid=$_FILES['idcard']['tmp_name'];
        $id1=$idnumber.$id;
        $id='./admin/images/certificate/'.$idnumber.$id;

        move_uploaded_file($tempimage,$image);
        move_uploaded_file($tempid,$id);
        require('admin/connection.php');
        $query=
        "
        INSERT INTO `certificate_requests` (`firstname`, `lastname`, `fathername`, `idnumber`, `studied`, `contributed_from`, `contributed_till`, `position_served`, `position_required`, `idcard`, `student_image`) VALUES ('$firstname', '$lastname', '$fathername', '$idnumber', '$studied', '$contributedfrom', '$contributedtill', '$positionserved', '$positionrequired', '$id1', '$image1');
        ";
        $result=mysqli_query($db,$query);
        if($result){
            echo "alert('Success')";
        }
        // $img_data=addslashes(file_get_contents($image));
        // $id_data=addslashes(file_get_contents($id));
        // echo $img_data;
        // echo $id_data;
    }

?>