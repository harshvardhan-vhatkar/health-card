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

  <link rel="stylesheet" href="css/current_medication.css">
  <link rel="stylesheet" href="css/common.css">

  <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />

</head>
<body class="main">

<div class="final">
  <!--BODY-->
  <?php
    include "includes/left_panel.php";
    ?>
  




  <div class="right_panel" >
<h2 class="heading2">Current Medication</h2>
<hr class="divider"></hr>


<div class="rectangle3">
<table class="r">
  <tr class="meds">
    <td class="r">Name of Medication</td>
      <td class="r">Dosage and frequency</td>
      <td class="r">Date when assigned </td>
      <td class="r">Prescribed by Dr.</td>
      <td class="r">Reason Prescribed for</td>
     
      </tr>  


     

<tr class="r2">
      <td ><input type="text" class="med_details" value="Enter Medicine Name"></td>
      <td ><input type="text" class="med_details" value="Enter dosage and frequency"></td>
      <td ><input type="date" class="med_details1" value=""></td>
      <td ><input type="text" class="med_details" value="Name of Doctor"></td>
      <td ><input type="text"  class="med_details" value="Mention Reason"></td>
</tr>


<tr class="r2">
      <td ><input type="text" class="med_details" value="Enter Medicine Name"></td>
      <td ><input type="text" class="med_details" value="Enter dosage and frequency"></td>
      <td ><input type="date" class="med_details1" value=""></td>
      <td ><input type="text" class="med_details" value="Name of Doctor"></td>
      <td ><input type="text"  class="med_details" value="Mention Reason"></td>
</tr>
<tr class="r2">
      <td ><input type="text" class="med_details" value="Enter Medicine Name"></td>
      <td ><input type="text" class="med_details" value="Enter dosage and frequency"></td>
      <td ><input type="date" class="med_details1" value=""></td>
      <td ><input type="text" class="med_details" value="Name of Doctor"></td>
      <td ><input type="text"  class="med_details" value="Mention Reason"></td>
</tr>

      <td ><input type="text" class="med_details" value="Enter Medicine Name"></td>
      <td ><input type="text" class="med_details" value="Enter dosage and frequency"></td>
      <td ><input type="date" class="med_details1" value=""></td>
      <td ><input type="text" class="med_details" value="Name of Doctor"></td>
      <td ><input type="text"  class="med_details" value="Mention Reason"></td>
</tr>

      <td ><input type="text" class="med_details" value="Enter Medicine Name"></td>
      <td ><input type="text" class="med_details" value="Enter dosage and frequency"></td>
      <td ><input type="date" class="med_details1" value=""></td>
      <td ><input type="text" class="med_details" value="Name of Doctor"></td>
      <td ><input type="text"  class="med_details" value="Mention Reason"></td>
</tr>
</table>


</div>

<div class="bottom">
<h4 class="aller">Any Known Allergies:</h4>
<table class="allertypes">
  <tr class="pad">
    <td  class="pad"><input type="checkbox" name="first">Aspirin</td>
    <td class="pad"><input type="checkbox" name="first">Latex</td>
    <td class="pad"><input type="checkbox" name="first">Fruits</td>
  </tr>
    <tr class="pad">
    <td class="pad"><input type="checkbox" name="first">Shellfish</td>
    <td class="pad"><input type="checkbox" name="first">Essential Oils</td>
    <td class="pad"><input type="checkbox" name="first">Tree Nuts</td>
  </tr>
  <tr class="pad">
    <td class="pad"><input type="checkbox" name="first">Dairy</td>
    <td class="pad"><input type="checkbox" name="first">Pollen</td>
    <td class="pad"><input type="checkbox" name="first">Others</td>
  </tr>
</table>
</div>
<input type="submit" class="okay" value ="OK">
</div>
</div>
</div>


</body>
</html>