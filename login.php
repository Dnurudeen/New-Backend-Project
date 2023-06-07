<?php
    session_start();
    include ('dbconnect.php');

    if (isset($_POST['submit'])){
        $uname = $_POST['username'];
        $password = $_POST['password'];

        $check = mysqli_query($conn, "SELECT id FROM `register` WHERE username='$uname' and password='$password'");
        $cross_check = mysqli_fetch_row($check);

        if($cross_check > 0){
            $_SESSION['id'] = $cross_check['id'];
            $_SESSION['username'] = $cross_check['username'];
            header('Location: dashboard.php');
        }else{
            echo('Invalind input');
        }
    }
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
    <form action="" method="post">
        Username: <input type="text" name="username"><br><br>
        Password: <input type="password" name="password"><br><br>

        <input type="submit" name="submit"><br><br>
    </form>
    <p>Don't have an account? <a href="register.php">Sign Up</a></p>
</body>
</html>