<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Patient | Sign In</title>
  <link rel="stylesheet" href="css/patient_signin.css">
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/common.css">

  <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />

</head>
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
  </div>
  <div id="loading"></div>-->
  <?php
    include "includes/header.php";
    ?>
  <!--BODY-->
  <div class="page">
    <img src="img/patsignin.png" alt="patsignin" class="imgg">
    <div class="login-box">
      <h3>Welcome back!</h3>
      <p>Please login to your account.</p>
      <form id="patient-login-form" class="form" role="form" method="post" action="api/patient_login_submit.php">
        <div class="box">
          <input type="text" placeholder="Username" name="username">
          <input type="password" placeholder="Password" name="password">
          <button type="submit">Login</button>
          <p><b>Don't have an existing account?</b><a href="patient_signup.php" style="color:#000000"> Sign up</a></p>
        </div>
      </form>
    </div>  
    <div class="para">
      <p>Take Care of yours family's <b style="color: #1B35BA;">Health</b></p> 
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

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/common.js"></script>
</body>
</html>