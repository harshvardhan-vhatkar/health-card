<?php
session_start();
require "includes/database_connect.php";

$username=$_SESSION['username'];

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
      Enter Your Full Name: <input type="text" name="name" id="name"> 
      <br>
     Gender:
      <input type="radio" name="gender" id="male" value="male">MALE
      <input type="radio" name="gender" id="female" value="female">FEMALE <br>
      
      DOB:
      <input type="date" id="dob" name="dob"><br>
      Phone Number:
      <input type="tel" id="phone" name="phone"><br>
      
      Address:
      <textarea rows="4" cols="50" name="address" placeholder="Enter your address..."></textarea><br>
      Bloodgroup: <input type="text" name="bgrp" id="bgrp"><br>
      Emergency Contact Number:
      <input type="tel" id="ephone" name="ephone"><br>
      <input type="submit" value="SAVE">
    </form>
    
</body>
</html>