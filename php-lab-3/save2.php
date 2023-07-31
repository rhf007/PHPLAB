<?php

$errors = array();

if(!isset($_POST['name']) or empty($_POST['name'])){
    $errors['name'] = 'Name is required';
}if(!isset($_POST['email']) or empty($_POST['email'])){
    $errors['email'] = 'Email is required';
}if(!isset($_POST['ext']) or empty($_POST['ext'])){
    $errors['ext'] = 'Ext is required';
}if(!isset($_POST['password']) or empty($_POST['password'])){
    $errors['password'] = 'password is required';
}if(!isset($_POST['confirmpassword']) or empty($_POST['confirmpassword'])){
    $errors['confirmpassword'] = 'confirm password';
}if(!isset($_POST['room']) or empty($_POST['room'])){
    $errors['room'] = 'room number is required';
}/* if(!isset($_FILES['image']) or empty($_FILES['image'])){
    $errors['image'] = 'image is required';
} */
if(isset($_FILES['image'])){
    $img_name = $_FILES['image']['name'];
    $img_size = $_FILES['image']['size'];
    $img_tmp = $_FILES['image']['tmp_name'];
    $img_type = $_FILES['image']['type'];
   /*  $ext = explode('.', $img_name);
    $img_ext = strtolower(end($ext)); */

    //had to search online because i forgot
    $imgext = pathinfo($img_name)['extension'];
    $valid_ext = array('jpg', 'jpeg', 'png');
    
    if(in_array($imgext, $valid_ext) === false){
        $errors['image'] = 'invalid extension';
    }
    if($img_size > 87784532){
        $errors['image'] = 'image too big';
    }
}


if(empty($errors)){

    $username = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $ext = $_POST['ext'];
    $room = $_POST['room'];   
    //had to search online because i forgot the time()
    $new_name = uniqid('', true);
    $imgfilename = $new_name . '.' . $imgext;
    $imgpath = "images/" . $imgfilename;

    move_uploaded_file($img_tmp, $imgpath);
    $file = fopen('users2.txt', 'a');
    
    fwrite($file, "$username:$email:$ext:$room:$imgfilename\n");
    
    fclose($file);
    
    header('location:home2.php');

}else{
    $errorsStr = json_encode($errors);
    header("location:register2.php?errors=$errorsStr");
}


