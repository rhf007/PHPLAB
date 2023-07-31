<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>Edit User</title>
</head>
<body>

<?php
// Get the email from the query string
$email = $_GET['email'];

// Find the user data in the file
$data = file('users2.txt');
$userData = null;

foreach ($data as $key => $value) {
    $line = explode(':', $value);
    if ($line[1] == $email) {
        $userData = $line;
        break;
    }
}

// Display the form with previous data
if ($userData != null) {
    echo "<form action='update2.php' method='POST'>
              <div class='form-group'>
                <label for=''>Email address</label>
                <input type='text' class='form-control' name='email' placeholder='Enter email' value='$userData[1]'>
              </div>
              <div class='form-group'>
                <label for=''>Name</label>
                <input type='text' class='form-control' name='name' placeholder='name' value='$userData[0]'>
              </div>
              <div class='form-group'>
                <label for=''>Ext</label>
                <input type='text' class='form-control' name='ext' placeholder='ext' value='$userData[2]'>
              </div>
              <div class='form-group'>
                <label for=''>Room No.</label>
                <input type='number' class='form-control' name='room' placeholder='room' value='$userData[3]'>
              </div>
              <input type='hidden' name='old_email' value='$email'>  
              <button type='submit' class='btn btn-primary'>Submit</button>
          </form>";
} else {
    echo "User not found!";
}
?>

</body>
</html>