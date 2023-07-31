<?php

session_start();

if(!$_SESSION['loggedIn'])
{
  header('location:login2.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
 -->
<!-- jQuery library -->
<!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
 -->
<!-- Popper JS -->
<!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
 -->
<!-- Latest compiled JavaScript -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>


</body>
</html>


<?php



$data = file('users2.txt');

echo "<table class='table'>
<thead class='thead-dark'>
  <tr>
    <th>Username</th>
    <th>Email</th>
    <th>ext</th>
    <th>room</th>
    <th>image</th>
    <th> Edit </th>
    <th> Delete </th>
    <th> <a href='logout2.php' class='btn btn-primary'> Logout </a> </th>

  </tr>
</thead>

"
;

foreach ($data as $key => $value) {

    $line = explode(':', $value);
    $username = $line[0];
    $email = $line[1];
    $ext = $line[2];
    $room = $line[3];
    $imgname = $line[4];
    $imgpath = "images/" . trim($imgname);
    
    echo "<tr>

        <td> $username </td>
        <td> $email </td>
        <td> $ext </td>
        <td> $room </td>
        <td><img src='$imgpath' alt='user image' height='50px'></td>
        <td><a href='edit2.php?email=$line[1]' class='btn btn-warning'> Edit </a></td>
        <td> <a href='delete2.php?email=$line[1]' class='btn btn-danger'> Delete </a> </td>


    </tr>
    
    ";

}

echo "</table>";