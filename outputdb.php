<?php
  include 'dbconnect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" width="100%">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
        </tr>
        <?php
            $getinputs = mysqli_query($conn, "SELECT * FROM `new_users` WHERE 1");
            while($fetchinput = mysqli_fetch_array($getinputs)){
        ?>
        <tr>
            <td><?php echo ($fetchinput['id']); ?></td>
            <td><?php echo ($fetchinput['fullname']); ?></td>
            <td><?php echo ($fetchinput['telephone']); ?></td>
            <td><?php echo ($fetchinput['mailaddress']); ?></td>
        </tr>
        <?php } ?>
    </table>
    <!-- <div>
        <p><b>ID: </b><?php echo ($fetchinput['id']); ?></p>
        <p><b>Name: </b><?php echo ($fetchinput['fullname']); ?></p>
        <p><b>Phone: </b><?php echo ($fetchinput['telephone']); ?></p>
        <p><b>Email: </b><?php echo ($fetchinput['mailaddress']); ?></p>
    </div><hr> -->
</body>
</html>