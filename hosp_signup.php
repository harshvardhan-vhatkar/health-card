<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hospital | Sign Up</title>
  <link rel="stylesheet" href="css/hosp_signup.css">
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/common.css">

  <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />

</head>
<body class="bodyy">

<?php
    include "includes/header.php";
    ?>

  <!--BODY-->

  <div class="header-container" >
    <div class="wrapper" >
    <header>
      <div class="hero-content">
        <div >
        <h1 >Create Account</h1>
        <form id="hospital-signup-form" class="form" role="form" method="post" action="api/hospital_signup_submit.php">
        <div class="form-group">
          <div class="dv input-group">
              <span class="input-group-addon">
                <i style="padding-top:12px" class="dv2 fa fa-user"></i>
              </span>
              <input type="text" style="border: 0px; outline:none !important" class="dv1 form-control" name="username" placeholder="Username" required="required">
            </div>
      </div>
      <div class="form-group">
          <div class="pv input-group">
              <span class="input-group-addon">
                <i style="padding-top:12px" class="pv2 fa fa-paper-plane"></i>
              </span>
              <input type="email" style="border: 0px" class="pv1 form-control" name="email" placeholder="Email Address" required="required">
          </div>
      </div>
      <div class="form-group">
          <div class="sv input-group">
              <span class="input-group-addon">
                <i style="padding-top:12px" class="sv2 fa fa-lock"></i>
              </span>
              <input type="text" style="border: 0px" class="sv1 form-control" name="password" placeholder="Password" required="required">
          </div>
      </div>
      <div class="form-group">
          <div class="rv input-group">
              <span class="input-group-addon">
                  <i style="padding-top:12px" class="rv2 fa fa-lock"></i>
              </span>
              <input type="text" style="border: 0px" class="rv1 form-control" name="confirm_password" placeholder="Confirm Password" required="required">
          </div>
      </div>
      <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block btn-lg">Sign Up</button>
      </div>
    </form>
    <div class="text-center">Already have an account? <a href="hosp_signin.php">Login here</a>.</div>


  </div>
  <div class="hero-image">
      <img src="img/hosp_sign_bg.png" alt="" width="485px" height="550px">
  </div>

</header>
</div>
  </div>
  <div class="photo-bgg" >
    <img src="img/Vector 1.png" style="background: #E9D3FF;" alt="" width="1879px" height="200px" >
  </div>
 </div>



 <?php
    include "includes/footer.php";
    ?>


    
</div>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/common1.js"></script>
</body>
</html>