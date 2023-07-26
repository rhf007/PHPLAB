<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   $fnameerr = "";
   $fname =$_POST["fname"];
   $fnameerr = "";
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $fname = $_POST["fname"];
       if (empty($fname)) {
           $fnameerr = "Name is required";
       }
   
   $lname = $_POST["lname"];
   $address = $_POST["address"];
   $country = $_POST["country"];
   $username = $_POST["username"];
   $password = $_POST["password"];
   $department = $_POST["depatrment"];

   echo "thanks " . $fname . " " . $lname . "<br>";
   echo "please review your information" . "<br>";
   echo "Name: " . $fname . $lname . "<br>";
   echo "Department: " . $department . "<br>";
    }
?>
</body>
</html>