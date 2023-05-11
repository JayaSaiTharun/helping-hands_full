
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Title Page-->
    <title>Admin Panel</title>   
    
    <script src="../files/jquery-3.6.0.js"></script>
    <link rel="stylesheet" type="text/css" href="dt/datatables.css">
	<script type="text/javascript" src="dt/datatables.js"></script>
    <link rel="stylesheet" href="../files/css/bootstrap.min.css">
    <script src="../files/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .form-floating>.form-control::placeholder {
            color: revert;
        }

        .form-floating>.form-control:not(:focus)::placeholder {
            color: transparent;
        }
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
    </style>
    
</head>
<body class="animsition">
<?php
  include "top.php";
  ?>
<div class="page-wrapper">
<div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit the Data</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <form id="main_slide_form" method="POST">
    <div class="form-group">
    <input type="text" id="editid" name="editid" required class="form-control">
  </div>
    <div class="form-group">
    <label for="ofdate">Updated Date</label>
    <input type="date" id="editofdate" name="editofdate" required class="form-control">
  </div>
  <div class="form-group">
  <label for="puc1">Weekly COllection NO :</label>
  <input type="text" required class="form-control" name="editweekly_no" id="editweekly_no" placeholder="Weekly collection number ">
    
  </div>
  <div class="form-group">
  <label for="puc1">PUC-1 Collected Amount:</label>
  <input type="text" required class="form-control" name="editpuc1" id="editpuc1" placeholder="PUC-1 Weekly collection">
                   
  </div>
  <div class="form-group">
  <label for="puc2">PUC-2 Collected Amount:</label>
  <input type="text" required class="form-control" name="editpuc2" id="editpuc2" placeholder="PUC-2 Weekly collection">
                    
  </div>
  <div class="form-group">
  <label for="e1">E-1 Collected Amount:</label>
  <input type="number" required class="form-control" name="edite1" id="edite1" placeholder="E-1 Weekly collection">
                    
  </div>
  <div class="form-group">
  <label for="e2">E-2 Collected Amount:</label>
  <input type="number" required class="form-control" name="edite2" id="edite2" placeholder="E-2 Weekly collection">
                    
  </div>
  <div class="form-group">
  <label for="e3">E-3 Collected Amount:</label>
  <input type="number" required class="form-control" name="edite3" id="edite3" placeholder="E-3 Weekly collection">
                    
  </div>
  <div class="form-group">
  <label for="e4">E-4 Collected Amount:</label>
  <input type="number" required class="form-control" name="edite4" id="edite4" placeholder="E-4 Weekly collection">
                    
  </div>
  <input type="submit" name="edit_main_slide" id="edit_submit"  class="btn btn-primary" value="Save changes">
        </form>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel11">Update Weekly Collection Details</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" id="hcd_add_slide">
      
    
      <div class="form-group">
    <label for="ofdate">Updated Date</label>
    <input type="date" id="ofdate" name="ofdate" required class="form-control">
  </div>
  <div class="form-group">
  <label for="puc1">Weekly COllection NO :</label>
  <input type="text" required class="form-control" name="weekly_no" id="weekly_no" placeholder="Weekly collection number ">
    
  </div>
  <div class="form-group">
  <label for="puc1">PUC-1 Collected Amount:</label>
  <input type="text" required class="form-control" name="puc1" id="puc1" placeholder="PUC-1 Weekly collection">
                   
  </div>
  <div class="form-group">
  <label for="puc2">PUC-2 Collected Amount:</label>
  <input type="text" required class="form-control" name="puc2" id="puc2" placeholder="PUC-2 Weekly collection">
                    
  </div>
  <div class="form-group">
  <label for="e1">E-1 Collected Amount:</label>
  <input type="number" required class="form-control" name="e1" id="e1" placeholder="E-1 Weekly collection">
                    
  </div>
  <div class="form-group">
  <label for="e2">E-2 Collected Amount:</label>
  <input type="number" required class="form-control" name="e2" id="e2" placeholder="E-2 Weekly collection">
                    
  </div>
  <div class="form-group">
  <label for="e3">E-3 Collected Amount:</label>
  <input type="number" required class="form-control" name="e3" id="e3" placeholder="E-3 Weekly collection">
                    
  </div>
  <div class="form-group">
  <label for="e4">E-4 Collected Amount:</label>
  <input type="number" required class="form-control" name="e4" id="e4" placeholder="E-4 Weekly collection">
                    
  </div>
  <input type="submit" id="add-hcd" name="add-hcd"  class="btn btn-primary" value="Submit">
        </form>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div id="main-content">
            <div class="container-fluid">                                                     
<button type="button" data-bs-toggle="modal" data-bs-target="#addModal" class="btn btn-outline-success">Add Item</button>
<div id="display">
<table id="dtBasicExample" data-tab="weekly" class="table table-striped table-hover  table-bordered">
  <thead class="thead-light table-warning">
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Collection No:</th>
      <th scope="col">PUC 1</th>
      <th scope="col">PUC 2 </th>
      <th scope="col">E1 </th>
      <th scope="col">E2</th>
      <th scope="col">E3</th>
      <th scope="col">E4</th>
      <th scope="col">Edit/Delete</th>
    </tr>
  </thead>
  <tbody id="result">
  </tbody>
</table>
</div>




</div>
                </div>
<script src="script.js"></script>
</body>
</html>


































<!-- 

























<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>HH Admin</title>
    <style>
        .form-floating>.form-control::placeholder {
            color: revert;
        }

        .form-floating>.form-control:not(:focus)::placeholder {
            color: transparent;
        }
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
    </style>
</head>
<body>
<div class="container">
        <h1>Update Weekly Collection Details</h1>
        <form class="rounded-2" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <div class="row pt-2">
                <div class="col-md-3">
                        <label for="ofdate">Updated Date</label>
                        <input type="date" id="ofdate" name="ofdate" required class="form-control">
                </div>
            </div>
            <div class="row pt-1">
                <div class="form-floating col-md-6">
                    <input type="text" required class="form-control" name="puc1" id="puc1" placeholder="PUC-1 Weekly collection">
                    <label for="puc1">PUC-1 Collected Amount:</label>
                </div>
                <div class="form-floating col-md-6">
                    <input type="text" required class="form-control" name="puc2" id="puc2" placeholder="PUC-2 Weekly collection">
                    <label for="puc2">PUC-2 Collected Amount:</label>
                </div>
            </div>
            <div class="row pt-1">
                <div class="form-floating col-md-3">
                    <input type="number" required class="form-control" name="e1" id="e1" placeholder="E-1 Weekly collection">
                    <label for="e1">E-1 Collected Amount:</label>
                </div>
                <div class="form-floating col-md-3">
                    <input type="number" required class="form-control" name="e2" id="e2" placeholder="E-2 Weekly collection">
                    <label for="e2">E-2 Collected Amount:</label>
                </div>
                <div class="form-floating col-md-3">
                    <input type="number" required class="form-control" name="e3" id="e3" placeholder="E-3 Weekly collection">
                    <label for="e3">E-3 Collected Amount:</label>
                </div>
                <div class="form-floating col-md-3">
                    <input type="number" required class="form-control" name="e4" id="e4" placeholder="E-4 Weekly collection">
                    <label for="e4">E-4 Collected Amount:</label>
                </div>
                <div class="row pt-3">
                    <div class="col-md-12">
                        <button class="btn btn-primary float-end" type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </form> 
    </div>
        
    <div class='container' id='cardscontainer'>

    </div>
</body>
</html>
<script type='text/javascript'>
    var data=[
        <?php /*
                require('./connection.php');
                $query="
                SELECT * FROM `certificate_requests`;";
                $result=mysqli_query($conn,$query);
                while($row=mysqli_fetch_array($result)){
                    echo json_encode($row);
                    echo ',';
                }*/
        ?>
    ];
console.log(data[0]);
var ele=document.getElementById('cardscontainer');
data.forEach((obj)=>{
    document.write(
    `<div class="card mb-3" style="max-width: 800px;">
        <div class="row g-0">
            <div class="col-md-4">
            <img src="${obj.idcard}" class="img-fluid rounded-start" alt="${obj.idnumber}">
            <img src="${obj.student_image}" class="img-fluid rounded-start" alt="${obj.idnumber}">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">${obj.firstname}${obj.lastname}(${obj.idnumber})</h5>
                <p class="card-text"><b>Father Name: </b>${obj.fathername}</p>
                <p class="card-text"><b>Studied</b>${obj.studied}</p>
                <p class="card-text"><b>Role worked as:</b>${obj.position_served}</p>
                <p class="card-text"><b>Certificate required as:</b>${obj.position_required}</p>
                <p class="card-text"><b>Contribution period</b>${obj.contributed_from}-${obj.contributed_till}</p>
            </div>
            </div>
        </div>
    </div>`);
}
    
)
</script>
<?php /*
    if($_SERVER['REQUEST_METHOD']==='POST'){
        require('./connection.php');
        $date=$_POST['ofdate'];
        $p1=$_POST['puc1'];
        $p2=$_POST['puc2'];
        $e1=$_POST['e1'];
        $e2=$_POST['e2'];
        $e3=$_POST['e3'];
        $e4=$_POST['e4'];
        $query=
        "
        INSERT INTO `weekly_collections` (`date`, `p1`, `p2`, `e1`, `e2`, `e3`, `e4`) VALUES ('$date', '$p1', '$p2', '$e1', '$e2', '$e3', '$e4');
        ";
        $result=mysqli_query($db,$query);
        if($result){
            echo "<script>alert('Updated Weekly Collection for $date')</script>";
        }
    }
*/
?> -->
