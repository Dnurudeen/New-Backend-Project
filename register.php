<?php
    include ('dbconnect.php');

    if (isset($_POST['submit'])){
        $fname = $_POST['firstname'];
        $mname = $_POST['middlename'];
        $lname = $_POST['lastname'];
        $uname = $_POST['username'];
        $dob = $_POST['dob'];
        $currentYear = date("Y");
        $lga = $_POST['lga'];
        $birthyear = $_POST['birthyear'];
        $age = ($currentYear - $birthyear);
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        // if($new_password = ($password == $cpassword));
        // $legit_password = true;

        if($password == $cpassword){
            $insert = mysqli_query($conn, "INSERT INTO `register`(`firstname`, `middlename`, `lastname`, `username`, `dob`, `age`, `lga`, `birthyear`, `password`) VALUES ('$fname', '$mname', '$lname', '$uname', '$dob', '$age', '$lga', '$birthyear', '$password')");
            echo("<div style='color: green; font-weight: bold;'>Insertion Successful!</div>");
            header('Refresh:2 url=login.php');
        }else{
            echo("<div style='color: red; font-weight: bold;'>Password doesn't match!</div>");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="" method="post">
        First Name: <input type="text" name="firstname"> <br><br> Middle Name: <input type="text" name="middlename"> <br><br> Last Name: <input type="text" name="lastname"> <br><br><hr><br>
        
        Username: <input type="text" name="username"><br><br>
        Date of Birth: <input type="date" name="dob"><br><br>
        <!-- Age: <input type="number" name="age"><br><br> -->
        L.G.A: <input type="text" name="lga"><br><br>
        Birth Year: <input type="number" name="birthyear"><br><br> <hr><br>

        Password: <input type="password" name="password"><br><br>
        Confirm password: <input type="password" name="cpassword"><br><br>

        <input type="submit" name="submit"><br><br>
    </form>
    <p>Already have an account? <a href="login.php">Login</a></p>
</body>
</html>