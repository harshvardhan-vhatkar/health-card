<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome | Health Card</title>
  <link rel="stylesheet" href="css/index.css">
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/common.css">
  <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />

</head>
<body class="bodyy">


<?php
    include "includes/header.php";
    ?>

  <!--BODY-->
  <div class="col">
  <div class="cont row">


    <div class="image-container col-6 ">
      <img src="img/homepage.png" alt="homeimg">
    </div>


    <div class="home-btns col-6 align-self-center ">
        <div class="row "><a href="hosp_signup.php"><button type="button" class="hospbtn btn btn-light rounded-pill ">Are you a Medical Personnel?</button></a></div>
        <div class="row"><a href="patient_signup.php"><button type="button" class="hospbtn btn btn-light rounded-pill ">Are you a Patient?</button></a></div>
    </div>
  </div>

  <div class="image-container col-6" id="cont">
    <h1 class="headline">Virtual healthcare for you</h1>
    <p class="headline">Healthcard provides progressive, and affordable healthcare,     
      accessible on mobile and online for everyone</p>
      <br>
      <br>
      <br>
  </div>
</div>

<?php
    include "includes/footer.php";
    ?>

</body>
</html>