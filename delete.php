<?php
include "./connection.php";



// $delete = "DELETE FROM `registration` WHERE id='".$_GET['delete_id']."'";

// $query = mysqli_query($conn, $delete);


// if($query){
//     echo "<script>alert('Your data is deleted & your id is: $_GET[delete_id]'); window.location.href='select.php';</script>    ";
// }
// else{
//     echo " <script>alert('Your data is not deleted'); window.location.href='select.php';</script>    ";

// }

$id = $_GET["delete_id"];

$delete = "DELETE FROM `registration` WHERE id='".$id."'";
 $query = mysqli_query($conn, $delete);

 if($query){

    echo "<script>alert('your data is delete'); 
    window.location.href='select.php'</script>";
 }else{
    echo "<script>alert('your data is not delete'); 
    window.location.href='select.php'</script>";

 }


?>