<?php

include "./connection.php";


if (isset($_GET['edit_id'])) {


    if (isset($_POST['Submit'])) {


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

        $Checkbox = $_POST['Hobbies2'];
        $Hobbiesview = implode(',', $Checkbox);



        $target_path = "img/";
        $file1 = $_FILES['File']['name'];
        $target = $target_path . basename($_FILES['File']['name']);
        $imageFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));



        if (empty($file1)) {
           $update = "UPDATE `registration` SET `First_Name`='$First_Name',`Last_Name`='$Last_Name',`Email`='$Email',`Number`='$Number',`Address`='$Address', `Gender`='$Gender', `City`='$City',`Pin_Code`='$Pin_Code',`State`='$State',`DOB`='$DOB', `Country`='$Country',`Hobbies`='$Hobbiesview' WHERE id='" . $_GET['edit_id'] . "'";
        } else {
            $update = "UPDATE `registration` SET `First_Name`='$First_Name',`Last_Name`='$Last_Name',`Email`='$Email',`Number`='$Number',`Address`='$Address', `Gender`='$Gender', `City`='$City',`Pin_Code`='$Pin_Code',`State`='$State',`DOB`='$DOB', `Country`='$Country', `Hobbies`='$Hobbiesview',`File`='$file1' WHERE id='" . $_GET['edit_id'] . "'";
        }
    

        $update_query = mysqli_query($conn, $update);
        
        
        
        if ($update_query) {
            echo "<script>alert('Your Data is update'); 
           window.location.href='./select.php';</script>";
        } else {
            echo "<script>alert('Your Data is Not update'); </script>";
        }
    }
    



    // Previous Data is display ///////////////////////////////////////////

    $previousData = "SELECT * FROM `registration` WHERE  id = '" . $_GET['edit_id'] . "'";
    $previousData_query = mysqli_query($conn, $previousData);
    $fetch = mysqli_fetch_assoc($previousData_query);

    $dis = $fetch['Hobbies'];
    $Hobbies11 = explode(',', $dis);



    if ($fetch) {
        echo "<script>alert('Your previous Data is display');</script>";
    } else {
        echo "<script>alert('Your previous Data is NOT display');</script>";
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <link rel="stylesheet" href="./style.css" />
</head>

<body>

    <div class="img_container">
        <img src="./images/3.jpg" alt="home pic" />
    </div>

    <form action="" method="POST" enctype="multipart/form-data" class="row g-3 container text-white font-weight-bold " style="margin: auto; width: 750px;">

        <div class="row container">
            <h2 class="d-flex justify-content-center my-5 " style="color: aqua;"> ༒☬ STUDENT REGISTRATION FORM ☬༒</h2>
        </div>


        <div class="row">

            <div class="col-6">
                <label for="Name" class="form-label ">First Name</label>
                <input type="text" name="First_Name" value="<?php echo $fetch['First_Name']; ?>" class="form-control text-dark" id="inputEmail4" placeholder="Enter your first name"/>
            </div>
            <div class="col-6">
                <label for="inputPassword4" class="form-label">Last Name</label>
                <input type="text" name="Last_Name" value="<?php echo $fetch['Last_Name']; ?>" class="form-control" id="inputPassword4" placeholder="Enter your Last name"/>
            </div>

        </div>






        <div class="row">

            <div class="col-6">
                <label for="email" class="form-label ">Email ID</label>
                <input type="email" name="Email" value="<?php echo $fetch['Email']; ?>" class="form-control " id="inputEmail4" placeholder="Enter your email id" />
            </div>


            <div class="col-6">
                <label for="number" class="form-label">Mobile Number</label>
                <input type="number" name="Number" value="<?php echo $fetch['Number']; ?>" class="form-control" id="inputPassword4" placeholder="Enter your mobile number" />
            </div>

        </div>



        <div class="row">


            <div class="col-12">
                <label for="inputAddress" class="form-label">Address</label>
                <textarea rows="4" cols="20" name="Address" class="form-control" id="inputAddress" placeholder="Enter your address"><?php echo $fetch['Address']; ?></textarea>
            </div>

        </div>








        <!-- Radio Button me [ checked ] used karna padta hai.................................. -->
        <div class="row">


            <div class="col-7 ">
                <fieldset class=" container">
                    <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                    <div class="row">
                        <div class="col-sm-10 form-control">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="Gender" id="gridRadios1" value="Male" <?php if ($fetch['Gender'] == "Male") {
                                                                                                                                echo "checked";
                                                                                                                            } ?>>
                                <label class="form-check-label" for="gridRadios1">Male</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="Gender" id="gridRadios2" value="Female" <?php if ($fetch['Gender'] == "Female") {
                                                                                                                                echo "checked";
                                                                                                                            } ?>>
                                <label class="form-check-label" for="gridRadios2">Female</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="Gender" id="gridRadios3" value="Other" <?php if ($fetch['Gender'] == "Other") {
                                                                                                                                echo "checked";
                                                                                                                            } ?>>
                                <label class="form-check-label" for="gridRadios3">Other</label>
                            </div>
                        </div>
                    </div>

                </fieldset>




            </div>

            <div class="col-md-5">
                <label for="inputAddress" class="form-label">DOB </label>
                <input type="date" name="DOB" value="<?php echo $fetch['DOB']; ?>" class="date_style form-control " id="birthdate" max="2023-12-31">

            </div>

        </div>




        <div class="row">


            <div class="col-7">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" name="City" value="<?php echo $fetch['City']; ?>" class="form-control" id="inputCity" placeholder="Enter your city name" />
            </div>

            <div class="col-5">
                <label for="inputZip" class="form-label">Pin Code</label>
                <input type="text" name="Pin_Code" value="<?php echo $fetch['Pin_Code']; ?>" class="form-control" id="inputZip" placeholder="Enter your pin code number" />
            </div>

        </div>




        <div class="row">


            <div class="col-7">
                <label for="inputState" class="form-label">State</label>
                <input type="text" name="State" value="<?php echo $fetch['State']; ?>" class="form-control" id="inputState" placeholder="Enter your state name" />

            </div>




                <!-- Select option me [ selected ] used karna padta hai.................................................. -->

                <div class="col-5">
                    <label for="inputState" class="form-label">Country</label>
                    <select id="inputState" name="Country" class="form-select">
                        <option selected>Choose your country...</option>
                        <option value="India" <?php if ($fetch['Country'] == "India") {
                                                    echo "selected";
                                                } ?>>India</option>
                        <option value="Russia" <?php if ($fetch['Country'] == "Russia") {
                                                    echo "selected";
                                                } ?>>Russia</option>
                        <option value="Canada" <?php if ($fetch['Country'] == "Canada") {
                                                    echo "selected";
                                                } ?>>Canada</option>
                        <option value="America" <?php if ($fetch['Country'] == "America") {
                                                    echo "selected";
                                                } ?>>America</option>
                        <option value="Qatar" <?php if ($fetch['Country'] == "Qatar") {
                                                    echo "selected";
                                                } ?>>Qatar</option>
                    </select>
                </div>




        </div>



        <div class="row">


            <div class="col-6">
                <fieldset class=" container">
                    <legend class="col-form-label col-sm-2 pt-0">Hobbise</legend>
                    <div class="row">
                        <div class="col-sm-10 form-control">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="Hobbies2[]" id="checkbox1" value="Chase" <?php if (in_array('Chase', $Hobbies11)) {
                                                                                                                                    echo "checked";
                                                                                                                                } ?>>
                                <label class="form-check-label" for="checkbox1"> Chase</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="Hobbies2[]" id="checkbox2" value="Swiming" <?php if (in_array('Swiming', $Hobbies11)) {
                                                                                                                                        echo "checked";
                                                                                                                                    } ?>>
                                <label class="form-check-label" for="checkbox1">Swiming</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="Hobbies2[]" id="checkbox3" value="Cricket" <?php if (in_array('Cricket', $Hobbies11)) {
                                                                                                                                        echo "checked";
                                                                                                                                    } ?>>
                                <label class="form-check-label" for="checkbox3">Cricket</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="Hobbies2[]" id="checkbox3" value="Hockey" <?php if (in_array('Hockey', $Hobbies11)) {
                                                                                                                                    echo "checked";
                                                                                                                                } ?>>
                                <label class="form-check-label" for="checkbox3">Hockey</label>
                            </div>

                            <!-- <div class="form-group ">
                                <label for="otherInput">Other...</label>
                                <input type="text" class="form-control" id="otherInput" name="otherInput">
                            </div> -->

                        </div>
                    </div>
                </fieldset>
            </div>


            <div class="col-6">
                <fieldset class=" container">
                    <legend class="form-label  pt-0">Upload File</legend>
                    <div class="row">
                        <div class="col-ms-10 form-control">
                            <label class="custom-file-label" for="fileInput">Choose File below 3mb</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="fileInput" name="File">

                            </div>
                            <!-- <button type="button" name="Upload" class="btn btn-primary mt-2" id="uploadButton">Upload</button> -->
                        </div>
                    </div>
                </fieldset>
            </div>



        </div>

        <div class="col-12 d-flex justify-content-center my-5">
            <button type="submit" name="Submit" class="btn btn-primary mx-5">Submit</button>
        </div>
        </fieldset>
        </div>

    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>