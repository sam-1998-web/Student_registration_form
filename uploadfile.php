
 <?php

$target_path= "img/";
$target= $target_path.basename($_FILES['filesb']['name']);
 $imageFileType = strtolower(pathinfo($target,PATHINFO_EXTENSION));


if($_FILES['filesb']['size'] > 1000000){
    echo "<script>
    alert('file size is too large '); 
    window.location.href='update.php';</script>";
}else if(file_exists($target)){
        echo "<script>
        alert('file allredy present'); 
        window.location.href='update.php';</script>";
    }
    else if($imageFileType != "jpg" && $imageFileType != "pdf"){
            echo "<script>
            alert('file must be in jpg format '); 
            window.location.href='update.php';</script>";

        }else if(move_uploaded_file($_FILES['filesb']['tmp_name'],$target)){
            if(file_exists($target)){
                echo "<script> alert('file uploaded suusscefully'); 
                window.location.href='select.php';</script>"; 

            }else{ move_uploaded_file($_FILES['filesb']['tmp_name'],$target);
                echo "<script> alert('file is not uploaded suusscefully');
                window.location.href='update.php';</script>";   
            }
        }


?> 