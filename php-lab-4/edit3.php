<?php
    include('connection3.php');

    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $username = $_POST['name'];
        $email = $_POST['email'];
        $room = $_POST['room'];
        $ext = $_POST['ext'];

        $stmt = $mysqli->prepare("UPDATE userdata SET name=?, email=?, room=?, ext=? WHERE id=?");
        $stmt->bind_param("ssssi", $username, $email, $room, $ext, $id);
        $stmt->execute();
        if ($stmt->error) {
            die("Error executing SQL query: " . $stmt->error);
        }

        header('location:display3.php');
        exit();     
    }

    $id = $_GET['id'];
    $result = $mysqli->query("SELECT * FROM userdata WHERE id=$id");
    $row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <h1>Edit User</h1>
    <form method="post">
        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
        <label>Name:</label>
        <input type="text" name="name" value="<?php echo $row['name'] ?>"><br><br>
        <label>Email:</label>
        <input type="text" name="email" value="<?php echo $row['email'] ?>"><br><br>
        <label>Room:</label>
        <input type="text" name="room" value="<?php echo $row['room'] ?>"><br><br>
        <label>Ext:</label>
        <input type="text" name="ext" value="<?php echo $row['ext'] ?>"><br><br>
        <input type="submit" name="submit" value="Update">
    </form>
</body>
</html>