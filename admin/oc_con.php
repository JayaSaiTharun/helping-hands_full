
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">     
    <script src="../files/jquery-3.6.0.js"></script>
    <link rel="stylesheet" type="text/css" href="dt/datatables.css">
	<script type="text/javascript" src="dt/datatables.js"></script>
    <link rel="stylesheet" href="../files/css/bootstrap.min.css">
    <script src="../files/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body >
<?php
  include "top.php";
  ?>
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
      <input type="text" name="sno" class="form-control" id="edit_id">
    <label for="exampleInputEmail1">Title :</label>
    <input type="text" name="title" class="form-control" id="edit_title">
  </div>
        <div class="form-group">
    <label for="exampleFormControlTextarea1">Description :</label>
    <textarea class="form-control" name="description" id="edit_description" rows="3"></textarea>
  </div>
      <div class="form-group">
    <label for="exampleFormControlFile1">Image :</label>
    <input type="file" name="photo" class="form-control-file" id="edit_image">
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
        <h5 class="modal-title" id="exampleModalLabel11">Add the Data</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" id="hcd_add_slide" action="upload_1.php">
      
    <label for="exampleInputEmail1">Title :</label>
    <input type="text" id="hcd_title" name="nhcd_title" class="form-control">
  </div>
        <div class="form-group">
    <label for="exampleFormControlTextarea1">Description :</label>
    <textarea class="form-control" id="hcd_desc" name="nhcd_desc" rows="3"></textarea>
  </div>
      <div class="form-group">
    <label for="exampleFormControlFile1">Image :</label>
    <input type="file" id="hcd_img" name="nhcd_img" accept="image/*" class="form-control-file">
  </div>
  <input type="submit" id="add-hcd" name="add-hcd"  class="btn btn-primary" value="Submit">
        </form>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>

  <div id="main-content">
            <div class="container-fluid">                                                     
<button type="button" data-bs-toggle="modal" data-bs-target="#addModal" class="btn btn-outline-success">Add Item</button>
<div id="display">
<table id="dtBasicExample" data-tab="oc_con" class="table table-striped table-hover  table-bordered">
  <thead class="thead-light table-warning">
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Edit/ Delete</th>
    </tr>
  </thead>
  <tbody id="result">
  </tbody>
</table>
</div>
</div>
</div>               
<script src="script.js"></script>
<script src="script2.js"></script> 
</body>
</html>