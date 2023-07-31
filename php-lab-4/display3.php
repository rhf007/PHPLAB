<?php include 'connection3.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <?php $sql = "SELECT * FROM userdata;";
    $result = $mysqli->query($sql);
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <table class='table'>
        <thead class='thead-dark'>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Room</th>
                <th>Ext</th>
                <th>Image</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['room']; ?></td>
                    <td><?php echo $row['ext']; ?></td>
                    <td><img src="<?php echo 'images/' . $row['img']; ?>" alt="Profile Picture" width="50"></td>
                    <td><a href="edit3.php?id=<?php echo $row['id'] ?>" class='btn btn-warning'>Edit</a></td>
                    <td><a href="delete3.php?id=<?php echo $row['id'] ?>" class='btn btn-danger'>Delete</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    </body>
    </html>
</body>
</html>