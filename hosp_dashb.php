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
  <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
</head>
<body class="bodyy">
  <!--NAVBAR/HEADER-->
  <div class="header sticky-top">
    <nav class="navbar navbar-expand-md ">
      <a class="navbar-brand" href="index.php"><img src="img/logo.png" class="img1" alt=""></a>

      <div class="navbar-collapse justify-content-end" >
        <ul class="navbar-nav">

          <?php
                //Check if user is loging or not
                if (!isset($_SESSION["username"])) {
                ?>
          <li class="nav-item p-2">
            <button type="button" class="navbtn btn btn-secondary" onclick="window.location.href='aboutus/index.html'">About Us</button>
            
          </li>
          
          <li class="nav-item p-2">
              <button type="button" class="navbtn btn btn-secondary" onclick="window.location.href='../contact2/index.php'">Contact Us</button>
          </li>
                <?php
                } else {
                ?>
                              <li class="nav-item p-2">
            <button type="button" class="navbtn btn btn-secondary" onclick="window.location.href='aboutus/index.html'">About Us</button>
            
          </li>
          
          <li class="nav-item p-2">
              <button type="button" class="navbtn btn btn-secondary" onclick="window.location.href='contact2/index.php'">Contact Us</button>
          </li>
                    <div class="nav-vl"></div>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">
                            Logout
                        </a>
                    </li>
                <?php
                }
                ?>
      </ul>
      </div>
    </nav>
  </div>
  <!--BODY-->
  <div class="containerr">
  <div class="left_image" href="index.html"><img src="img/Group 100.png" class="img100" alt=""></div>
  <div class="righ_side">
<form id="search-form" action="api/hosp_search.php" method="GET">
<div class="heading">
  <h1> Health Card</h1>
</div>

  <div><input type="text" name='username' class="search1" id='city' placeholder="Search for patient information"></div>
  <br></br>
  <div><button type="submit" class="search2 ">SEARCH</button></div>
</div>
  
</div>
</form>


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