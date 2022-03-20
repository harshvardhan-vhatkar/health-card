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
  <link rel="stylesheet" href="css/med_insurance.css">

  <link rel="stylesheet" href="css/common.css">

  <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />

</head>
<body class="bod">

  <!--BODY-->

  <?php
    include "includes/left_panel.php";
    ?>

  
  <div class="right_panel2" >
<h2 class="heading5">Medical Insurance Details</h2>
<hr class="divider_in"></hr>
   
   
 <div class="insurance_details">
   <table>
     <tr>
       
<td><h3>Name of Insurance</h3></td>
<td><input type="text"class="in_in"></td>
     </tr>
<br>
<tr>
  <td><h3 class="wid">Insurance Company</h3></td>
<td><input type="text"class="in_in"></td>
</tr>
<br>
<tr>
<td><h3>Validity of Insurance</h3></td>
<td><input type="text"class="in_in"></td>
<br>
</tr>
<tr>
<td><h3>Insurance ID</h3></td>
<td><input type="text"class="in_in"></td>
<br>
</tr>
<tr>
<td><h3>Attached Copy</h3></td>
</tr>
</table>

<br>
 </div>
 <div class="attach">
   <input type="button" class="attach_text" value="Documents of Max Bupa Health Insurance_SHIVANGI">
   
 </div>
</div>
 
</div>s
<input type="submit" class="okay" value ="OK">    

</body>
</html>