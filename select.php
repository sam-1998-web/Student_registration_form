<?php

include "./connection.php"

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>select</title>
</head>

<body>
  <div align=center style="background-color: lightblue; height:1600px; width:1600px; padding:0px; margin:0px;">
    <h1>STUDENT INFO</h1>
    <h2><a href="./index.php" style="text-decoration: none">ADD DATA</a></h2>

    <table border="3" cellspacing="4">
      <tr>
        <th>id</th>
        <th>First_Name</th>
        <th>Last_Name</th>
        <th>Email</th>
        <th>Number</th>
        <th>ADDRESS</th>
        <th>City</th>
        <th>Pin_Code</th>
        <th>State</th>
        <th>DOB</th>
        <th>Gender</th>
        <th>Country</th>
        <th>Hobbies</th>
        <th>Files</th>

        <th>ACTION [Edit/delete]</th>
      </tr>

      <tr>
        <?php
        $select = "SELECT * FROM `registration` ORDER BY `id` DESC";

        $query = mysqli_query($conn, $select);
        //feching direct  result set 

        while ($fetch = mysqli_fetch_assoc($query)) {
        ?>


          <td><?php echo $fetch['id'] ?></td>
          <td><?php echo $fetch['First_Name'] ?></td>
          <td><?php echo $fetch['Last_Name'] ?></td>
          <td><?php echo $fetch['Email'] ?></td>
          <td><?php echo $fetch['Number'] ?></td>
          <td><?php echo $fetch['Address'] ?></td>
          <td><?php echo $fetch['City'] ?></td>
          <td><?php echo $fetch['Pin_Code'] ?></td>
          <td><?php echo $fetch['State'] ?></td>
          <td><?php echo $fetch['DOB'] ?></td>
          <td><?php echo $fetch['Gender'] ?></td>
          <td><?php echo $fetch['Country'] ?></td>
          <td><?php echo $fetch['Hobbies'] ?></td>

          <td><img src="./img/<?php echo $fetch['File']?>" height="100px;" width="100px;"></td>



          <td><a href="./update.php ? edit_id=<?php echo $fetch['id'] ?>">Edit</a> /
            <a href="./delete.php ?delete_id=<?php echo $fetch['id'] ?>">Delete</a>
          </td>


      </tr>

    <?php
        }
    ?>
    </table>
  </div>

  <script src="./script.js"></script>

</body>

</html>