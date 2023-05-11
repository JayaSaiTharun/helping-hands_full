
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
</head>
<body>
<?php
  include "top.php";
  ?>
<div id="main-content">
            <div class="container-fluid">                                                     
<button type="button" data-bs-toggle="modal" data-bs-target="#addModal" class="btn btn-outline-success">Add Item</button>
<div id="display">
<table id="dtBasicExample" data-tab="certificate" class="table table-striped table-hover  table-bordered">
  <thead class="thead-light table-warning">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">photo</th>
      <th scope="col">Info 1</th>
      <th scope="col">Info 2</th>
      <th scope="col">Delete</th>
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
