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
  <title>Patient | Sign Up</title>
  <link rel="stylesheet" href="css/last_app.css">

  <link rel="stylesheet" href="css/common.css">

  <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />

</head>
<body class="bod">
  <div class="m_panel">
  <?php
    include "includes/left_panel.php";
    ?>
        
    <div class="app_bod">
        
        <h2 class="heading5">Last Appointment Details</h2>
        <hr class="divider_in"></hr>
        <div class="appoint_div">
        <table class="appoint">
          <tr>
      
            <td><h3>Name of Doctor</h3></td>
            <td><input type="text"class="inap"></td>
                  </tr>
                  <tr>
                  <td><h3>Speciality</h3></td>
            <td><input type="text"class="inap"></td>
                  </tr>
                  <tr>
                    <td><h3>Reason for visit</h3></td>
              <td><input type="text"class="inap"></td>
                    </tr>
                    <tr>
                      <td><h3>Medication Assigned</h3></td>
                <td><input type="text"class="inap"></td>
                      </tr>
                      <tr>
                        <td><h3>Dosage</h3></td>
                       <td> <input type="text" class="inap"></td>
                       <td><h3>Duration</h3></td>
                       <td><input type="text"class="inap"></td>
                       </tr>
                       <tr>
                        <td><h3>Date of Visit</h3></td>
                  <td><input type="text"class="inap"></td>
                        </tr>
        </table>
        </div>
        <input type="submit" class="okay" value ="OK">
    </div> 

  </div>       
</body>
</html>