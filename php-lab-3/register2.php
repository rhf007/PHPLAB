<?php

if(isset($_GET['errors'])){
    $arrErrors = json_decode($_GET['errors'], true);
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"> -->

 <!-- jQuery library -->
<!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script> -->

<!-- Popper JS -->
<!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script> -->

<!-- Latest compiled JavaScript -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>


<div class='container'>
    
<form action='save2.php' method='POST' enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input  type="text" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
    <span> <?php if(isset($arrErrors['email'])){echo $arrErrors['email'];}  ?> </span>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Name</label>
    <input type="text" class="form-control" name="name" placeholder="name">
    <span> <?php if(isset($arrErrors['name'])){echo $arrErrors['name'];}  ?> </span>

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">password</label>
    <input type="password" class="form-control" name="password" placeholder="Password">
    <span> <?php if(isset($arrErrors['password'])){echo $arrErrors['password'];}  ?> </span>

  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">confirm password</label>
    <input type="password" class="form-control" name="confirmpassword" placeholder="Confirm Password">
    <span> <?php if(isset($arrErrors['confirmpassword'])){echo $arrErrors['confirmpassword'];}  ?> </span>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Room No.</label>
    <input type="number" class="form-control" name="room" placeholder="Room">
    <span> <?php if(isset($arrErrors['room'])){echo $arrErrors['room'];}  ?> </span>
  </div>  

  <div class="form-group">
    <label for="exampleInputPassword1">ext</label>
    <input type="text" class="form-control" name="ext" placeholder="ext">
    <span> <?php if(isset($arrErrors['ext'])){echo $arrErrors['ext'];}  ?> </span>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Profile Picture</label>
    <input type="file" class="form-control" name="image" placeholder="Image">
    <span> <?php if(isset($arrErrors['image'])){echo $arrErrors['image'];}  ?> </span>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>


</body>
</html>