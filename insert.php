<?php

include "./connection.php";


if (isset($_POST['submit'])) {

$First_Name = $_POST['First_Name'];
$Last_Name = $_POST['Last_Name'];
$Email = $_POST['Email'];
$Number = $_POST['Number'];
$Address = $_POST['Address'];
$Gender = $_POST['Gender'];
$DOB = $_POST['DOB'];
$City = $_POST['City'];
$Pin_Code = $_POST['Pin_Code'];
$State = $_POST['State'];
$Country = $_POST['Country'];


$Hobbies = $_POST['Hobbies1'];  //Check box ye array show krta hai. esiliye use implode convert karte.
$Hobbiesview = implode(',', $Hobbies); 


    $target_path = "img/";
    $file = $_FILES['File']['name'];
    $target = $target_path . basename($_FILES['File']['name']);   
    $imageFileType = strtolower(pathinfo($target,PATHINFO_EXTENSION)); 
    



$insert = "INSERT INTO `registration`(`First_Name`, `Last_Name`, `Email`, `Number`, `Address`,`Gender`,`DOB`,`City`,`Pin_code`,`State`, `Country`, `Hobbies`,`File`) VALUES ('$First_Name', '$Last_Name', '$Email', '$Number', '$Address','$Gender','$DOB','$City', '$Pin_Code','$State', '$Country', '$Hobbiesview','$file')";


$query = mysqli_query($conn, $insert);




if($query){

    if ($_FILES['File']['size'] > 10000000000) {   // 1mb
        echo "<script>
        alert('File size is too large.');
        window.location.href='registration_form.php';
        </script>";
    }  else {
        if (move_uploaded_file($_FILES['File']['tmp_name'], $target)) {
            echo "<script>
            alert('File uploaded successfully.');
            window.location.href='select.php';
            </script>";
        } else {
            echo "<script>
            alert('Error in uploading file.');
            window.location.href='registration_form.php';
            </script>";
        }
    }


    
    echo"<script>alert('Data is enter');
     window.location.href='select.php';</script>";
}
else{
    echo"<script>alert('Data is not enter'); 
    window.location.href='registration_form.php';</script>";
}


}
