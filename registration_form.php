<?php

include "./connection.php";

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

  <form action="./insert.php" method="POST" enctype="multipart/form-data" class="row g-3 container text-white font-weight-bold" style="margin: auto; width: 750px;">



    <div class="row">

      <h2 class="d-flex justify-content-center my-5 " style="color: aqua;"> ༒☬ STUDENT REGISTRATION FORM ☬༒</h2>
    </div>





    <div class="row">

      <div class="col-6">
        <label for="Name" class="form-label ">First Name</label>
        <input type="text" name="First_Name" class="form-control text-dark" id="inputEmail4" placeholder="Enter your first name" />
      </div>
      <div class="col-6">
        <label for="inputPassword4" class="form-label">Last Name</label>
        <input type="text" name="Last_Name" class="form-control" id="inputPassword4" placeholder="Enter your Last name" />
      </div>

    </div>




    <div class="row">


      <div class="col-6">
        <label for="email" class="form-label ">Email ID</label>
        <input type="email" name="Email" class="form-control " id="inputEmail4" placeholder="Enter your email id" />
      </div>
      <div class="col-6">
        <label for="number" class="form-label">Mobile Number</label>
        <input type="number" name="Number" class="form-control" id="inputPassword4" placeholder="Enter your mobile number" />
      </div>

    </div>





    <div class="row">


      <div class="col-12">
        <label for="inputAddress" class="form-label">Address</label>
        <textarea rows="4" cols="20" type="text" name="Address" class="form-control" id="inputAddress" placeholder="Enter your address"></textarea>
      </div>

    </div>



    <div class="row">


      <div class="col-7 ">
        <fieldset class=" container">
          <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
          <div class="row">
            <div class="col-sm-10 form-control">
              <div class="form-check form-check-inline">

                <input class="form-check-input" type="radio" name="Gender" id="gridRadios1" value="male" checked>
                <label class="form-check-label" for="gridRadios1">Male</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="Gender" id="gridRadios2" value="female">
                <label class="form-check-label" for="gridRadios2">Female</label>
              </div>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="Gender" id="gridRadios3" value="">
                <label class="form-check-label" for="gridRadios3">Other</label>
              </div>
            </div>
          </div>

        </fieldset>

      </div>

      <div class="col-md-5">
        <label for="inputAddress" class="form-label">DOB</label>
        <input type="date" name="DOB" class="date_style form-control " id="birthdate" max="2023-12-31">

      </div>

    </div>





    <div class="row">

      <div class="col-7">
        <label for="inputCity" class="form-label">City</label>
        <input type="text" class="form-control" name="City" id="inputCity" />
      </div>

      <div class="col-5">
        <label for="inputZip" class="form-label">Pin_Code</label>
        <input type="text" class="form-control" name="Pin_Code" id="inputZip" />
      </div>

    </div>






    <div class="row">

      <div class="col-7">
        <label for="inputState" class="form-label">State</label>
        <input type="text" class="form-control" name="State" id="inputState" />

      </div>
      <div class="col-5">
        <label for="inputState" class="form-label">Country</label>
        <select id="inputState" class="form-select" name="Country">
          <option selected></option>
          <option>India</option>
          <option>AUS</option>
          <option>England</option>
          <option>America</option>
          <option>Nez</option>

        </select>
      </div>

    </div>





    <!-- //////// Hobbies code/////////// -->


    <div class="row">

      <div class="col-6">
        <fieldset class=" container">
          <legend class="col-form-label col-sm-2 pt-0">Hobbise</legend>
          <div class="row">
            <div class="col-sm-10 form-control">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="Hobbies1[]" id="checkbox1" value="Chase" checked>
                <label class="form-check-label" for="checkbox1"> Chase</label>
              </div>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="Hobbies1[]" id="checkbox2" value="Swiming">
                <label class="form-check-label" for="checkbox2">Swiming</label>
              </div>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="Hobbies1[]" id="checkbox3" value="Cricket">
                <label class="form-check-label" for="checkbox3">Cricket</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="Hobbies1[]" id="checkbox3" value="Hockey">
                <label class="form-check-label" for="checkbox3">Hockey</label>
              </div>

            </div>
          </div>
        </fieldset>

      </div>

      
      
      
      
      <div class="col-6">
        <fieldset class=" container">
          <legend class="col-form-label  pt-0">Upload File</legend>
          <div class="row">
            <div class="col-sm-10 form-control">
              <label class="custom-file-label" for="fileInput">Choose File</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="fileInput" name="File" required>
              </div>
              <!-- <button type="button" class="btn btn-primary mt-2" id="uploadButton">Upload</button> -->
            </div>
          </div>
        </fieldset>
      </div>
      
      
    </div>





    <div class="col-12 d-flex justify-content-center my-5">

      <button type="submit" name="submit" class="btn btn-primary mx-5">Submit</button>
      <button type="reset" class="btn btn-info mx-5">Reset</button>
    </div>
    </fieldset>
    </div>



  </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>