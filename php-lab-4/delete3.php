<?php
    include('connection3.php');

    $id = $_GET['id'];

    $stmt = $mysqli->prepare("DELETE FROM userdata WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    /* if ($stmt->error) {
        die("Error executing SQL query: " . $stmt->error);
    } */

    header('location:display3.php');
    exit();
?>