<?php
    session_start();
    include ('dbconnect.php');

    $userid = $_SESSION['id'];
    $getinputs = mysqli_query($conn, "SELECT * FROM `register` WHERE id='$userid'");
    while($fetchinput = mysqli_fetch_array($getinputs)){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <?php echo("Hello " . $fetchinput['firstname'] . ' ' . $fetchinput['lastname']) . '!' ?>
    <h1>WELCOME TO YOUR DASHBOARD</h1>
    <?php } ?>
</body>
</html>