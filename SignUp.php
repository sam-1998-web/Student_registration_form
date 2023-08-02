<?php

include "./Registration/connection.php";

if(isset($_POST['Submit'])){

$username = $_POST['username'];
$password = $_POST['password'];


$insert = "INSERT INTO `login_from`( `username`, `password`) VALUES ('$username','$password')";

$query = mysqli_query($conn, $insert);

if($query){
    echo "<script>alert('Your register sucessfully'); 
    window.location.href='index.php'; </script>";
} else {
    echo "<script>alert('Your register failed'); 
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
                    
                    <header>SignUp</header>
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

               
            </form>
        </div>
    </div>
</body>
</html>