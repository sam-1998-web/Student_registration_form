<?php

error_reporting(0);

include "./Registration/connection.php";

if (isset($_POST['Submit'])) {

    $name = $_POST['username'];
    $pass = $_POST['password'];


    $select = "SELECT  `username`, `password` FROM `login_from` WHERE `username`='$name' AND `password`='$pass'";


    $query = mysqli_query($conn, $select);

    $fetch = mysqli_fetch_assoc($query);



    $username = $fetch['username'];
    $password = $fetch['password'];



    if ($username == $name && $password == $pass) {
        echo "<script>alert('Password is correct'); 
        window.location.href='Registration/registration_form.php'; </script>";
    } else {
        echo "<script>alert('password is wrong  first register then login'); 
        window.location.href='SignUp.php'; </script>";
    }
}



?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style_login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Login</title>

</head>

<body>
    <div class="box">
        <div class="container">

            <form action="" method="POST">

                <div class="top">
            
                    <header>Login</header>
                </div>

                <div class="input-field">
                    <input type="text" class="input" placeholder="Username" name="username" id="">
                    <i class='bx bx-user'></i>
                </div>

                <div class="input-field">
                    <input type="Password" name="password" class="input" placeholder="Password" id="">
                    <i class='bx bx-lock-alt'></i>
                </div>

                <div class="input-field">
                    <input type="submit" name="Submit" class="submit" value="Submit" id="">
                </div>

                <div class="two-col">
                    <div class="one">
                        <input type="checkbox" name="" id="check">
                        <label for="check"> Remember Me</label>
                    </div>
                    <div class="two">
                        <label><a href="#">Forgot password?</a></label>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>