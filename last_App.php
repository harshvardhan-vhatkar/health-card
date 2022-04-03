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

<?php 
$uname=$_SESSION['username'];

$sql_4 = "SELECT * FROM last_app WHERE user = '$uname'";

$result_1 = mysqli_query($conn, $sql_4);

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
    <div class="app_bod">
        
        <h2 class="heading5">Last Appointment Details</h2>
        <hr class="divider_in"></hr>
        <div class="appoint_div">
        <form id="last-app-form" class="form" role="form" method="post" action="api/last_app_submit.php">
        <table class="appoint">
          <tr>
      
            <td><h3>Name of Doctor</h3></td>
          <td><input type="text" class="inap" name="doc_name" id="doc_name" value="<?= $user['doc_name'] ?>"> </td>
                  </tr>
                  <tr>
                  <td><h3>Speciality</h3></td>
            <td><input type="text"class="inap" name="spec" id="spec" value="<?= $user['speciality'] ?>"></td>
                  </tr>
                  <tr>
                    <td><h3>Reason for visit</h3></td>
              <td><input type="text"class="inap" name="reason" id="reason" value="<?= $user['reason'] ?>"></td>
                    </tr>
                    <tr>
                      <td><h3>Medication Assigned</h3></td>
                <td><input type="text"class="inap" name="medicine" id="medicine" value="<?= $user['medicine'] ?>"></td>
                      </tr>
                      <tr>
                        <td><h3>Dosage</h3></td>
                       <td> <input type="text" class="inap" name="dosage" id="dosage" value="<?= $user['dosage'] ?>"></td>
                       <td><h3>Duration</h3></td>
                       <td><input type="text"class="inap" name="duration" id="duration" value="<?= $user['duration'] ?>"></td>
                       </tr>
                       <tr>
                        <td><h3>Date of Visit</h3></td>
                  <td><input type="text"class="inap" name="visit_date" id="visit_date" value="<?= $user['visit_date'] ?>"></td>
                        </tr>
        </table>

        </div>
        <input type="submit" class="okay" value ="OK">
        </form>
    </div> 

  </div>       
</body>
</html>