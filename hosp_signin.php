<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hospital | Sign In</title>
  <link rel="stylesheet" href="css/hosp_signin.css">
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/common.css">

  <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />

</head>
<?php
    include "includes/header.php";
    ?>
<body class="bodyy">
  <!--NAVBAR/HEADER
  <div class="header sticky-top">
    <nav class="navbar navbar-expand-md ">
      <a class="navbar-brand" href="index.html"><img src="img/logo.png" class="img1" alt="">
      </a>

      <div class="navbar-collapse justify-content-end" >
        <ul class="navbar-nav">
          <li class="nav-item p-2">
            <button type="button" class="navbtn btn btn-secondary">About Us</button>
            
          </li>
          
          <li class="nav-item p-2">
              <button type="button" class="navbtn btn btn-secondary">Contact Us</button>
          </li>
      </ul>
      </div>
    </nav>
  </div>-->

  <!--BODY-->
  <div class="page">
    <img src="img/hospsignin.png" alt="hospsignin" class="imgg">
     <div class="login-box">
       <h3>Welcome back!</h3>
       <p>Please login to your account.</p>
       <form id="hospital-login-form" class="form" role="form" method="post" action="api/hospital_login_submit.php">
        <div class="box">
          <input type="text" name="username" placeholder="Username">
          <input type="password" name="password" placeholder="Password">
          <button type="submit">Login</button>
          <p><b>Don't have an existing account?</b><a href="hosp_signup.php" style="color:#000000"> Sign up</a></p>
        </div>
       </form>
     </div>
    <div class="para">
     <p><b style="color: #1B35BA;">Healthcare</b> at your fingertips</p> 

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