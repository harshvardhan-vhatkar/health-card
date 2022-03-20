<?php
session_start();
require "includes/database_connect.php";

$uname=$_SESSION['username'];
$sql_1 = "SELECT * FROM patient_signup WHERE username = '$uname'";
$result_1 = mysqli_query($conn, $sql_1);
if (!$result_1) {
    echo "Something went wrong!";
    return;
}
$user = mysqli_fetch_assoc($result_1);
if (!$user) {
    echo "Something went wrong!";
    return;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Details</title>
</head>
<body>
    <form id="patient-form" class="form" role="form" method="post" action="api/patient_submit.php">
      Enter Your Full Name: <input type="text" name="name" id="name" value="<?= $user['name'] ?>"> 
      <br>
     Gender:
      <input type="radio" name="gender" id="male" value="male" checked >MALE
      <input type="radio" name="gender" id="female" value="female">FEMALE <br>
      
      DOB:
      <input type="date" id="dob" name="dob"><br>
      Phone Number:
      <input type="tel" id="phone" name="phone" value="<?= $user['phone'] ?>"><br>
      
      Address:
      <textarea rows="4" cols="50" name="address" value="<?= $user['address'] ?>"></textarea><br>
      Bloodgroup: <input type="text" name="bgrp" id="bgrp" value="<?= $user['bgrp'] ?>"><br>
      Emergency Contact Number:
      <input type="tel" id="ephone" name="ephone" value="<?= $user['ephone'] ?>"><br>
      <input type="submit" value="SAVE">
    </form>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select Image File to Upload:
      <input type="file" name="file">
      <input type="submit" name="submit" value="Upload">
  </form>
  <?php


  $query = $conn->query("SELECT file_name FROM patient_signup WHERE username = '$uname' ORDER BY uploaded_on DESC ");
  if($query->num_rows > 0){
      while($row = $query->fetch_assoc()){
          $imageURL = 'uploads/'.$row["file_name"];
  ?>
      <img src="<?= $imageURL; ?>" />
  <?php }} ?>
    
</body>
</html>