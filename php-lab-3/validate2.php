<?php



$email = $_POST['email'];
$name = $_POST['name'];


$data = file('users2.txt');

foreach ($data as $key => $value) {

    $line = explode(':', $value);


    if(!strcasecmp($email, $line[1]) and !strcasecmp($name, $line[0])){

        session_start();

        $_SESSION['name']= $name;
        $_SESSION['email']= $email;
        $_SESSION['loggedIn']= true;

        header('location:home2.php');
        exit();

    }

}

header('location:login2.php');