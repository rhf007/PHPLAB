<?php
// Get the form data
$old_email = $_POST['old_email'];
$email = $_POST['email'];
$name = $_POST['name'];
$ext = $_POST['ext'];
$room = $_POST['room'];

// Check if the new email is already in use
$data = file('users2.txt');
$emailExists = false;

foreach ($data as $key => $value) {
    $line = explode(':', $value);
    if ($line[1] == $email && $line[1] != $old_email) {
        $emailExists = true;
        break;
    }
}

if ($emailExists) {
    echo "Email address already in use!";
} else {
    // Update the user data in the file
    $newData = '';

    foreach ($data as $key => $value) {
        $line = explode(':', $value);
        if ($line[1] == $old_email) {
            $newData = $newData . "$name:$email:$ext:$room\n";
        } else {
            $newData = $newData . $value;
        }
    }

    file_put_contents('users2.txt', $newData);

    // Redirect to the home page
    header('location:home2.php');
}
?>