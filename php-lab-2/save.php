<?php

$errors = array();

if(!isset($_POST['name']) or empty($_POST['name'])){
    $errors['name'] = 'Name is required';
}if(!isset($_POST['email']) or empty($_POST['email'])){
    $errors['email'] = 'Email is required';
}if(!isset($_POST['department']) or empty($_POST['department'])){
    $errors['department'] = 'Dept is required';
}



if(empty($errors)){

    $username = $_POST['name'];
    $email = $_POST['email'];
    $department = $_POST['department'];

    $file = fopen('users.txt', 'a');

    fwrite($file, "$username:$email:$department\n");
    
    fclose($file);
    
    header('location:home.php');

}else{
    $errorsStr = json_encode($errors);
    header("location:register.php?errors=$errorsStr");
}


