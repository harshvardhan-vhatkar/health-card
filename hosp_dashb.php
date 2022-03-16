<?php
session_start();
require "includes/database_connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard | Hospital</title>
  <link rel="stylesheet" href="css/hosp_dashb.css">
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/common.css">

  <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />

</head>
<body class="bodyy">
  <!--NAVBAR/HEADER-->
  <?php
    include "includes/header.php";
    ?>

  <!--BODY-->
  <div class="containerr">
  <div class="left_image" href="index.html"><img src="img/Group 100.png" class="img100" alt=""></div>
  <div class="righ_side">
<div class="heading">
  <h1> Health Card</h1>
</div>

  <div><input type="text" class="search1" placeholder="Search for patient information"></div>
  <br></br>
  <div><button type="button" class="search2 ">SEARCH</button></div>
</div>
  
</div>



 <!--FOOTER-->
  <div class="footer">
    <div class="footer-container">
        <div class="footer-a">
            <div class="footer-b">
                <a href="">Home</a>
            </div>
 
            <div class="footer-b">
                <a href="">About Us</a>
            </div>
            <div class="footer-b">
                <a href="">Contact Us</a>
            </div>
        </div>
    </div>
  </div>


    
</div>
</body>
</html>