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
  <link rel="stylesheet" href="css/reports.css">

  <link rel="stylesheet" href="css/common.css">

  <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />

</head>
   <body class="bod">

<!--BODY-->
<div>

<?php
    include "includes/left_panel.php";
    ?> 
<div class="right_details">
<h3>Reports and X-Rays</h3>
<hr class="hori">
<div class= "main_butt">
</div>
<div class="buttons">
    <input type="button" class="butt" value="Upload medical reports">
    </div>
    <div class="buttons2">
    <input type="button" class="butt2" value="Upload X-Rays">
</div>
</div>
<div class="bott_right">
    <h5>Attached Documents:</h5>
    <div class="docs">
      <br>
      <br>
      <br>
      <br>
      <br>
      <h3 class="doc_text">Blood Report</h3>
      <h2 class="last_up">Updated on 17/01/2021 </h2>  
      <div class="docs2">
        <br>
        <br>
        <br>
        <br>
        <br>
        <h3 class="doc_text">Thyroid Report</h3>
        <h2 class="last_up">Updated on 26/04/2021 </h2>      
        <div class="docs3">
          <br>
          <br>
          <br>
          <br>
          <br>
          <h3 class="doc_text">Left palm X-Ray</h3>
          <h2 class="last_up">Updated on 12/10/2021 </h2>      
          <div class="docs4">
            <br>
            <br>
            <br>
            <br>
            <br>
            <h3 class="doc_text">TSH Test Report</h3>
            <h2 class="last_up">Updated on 11/12/2021 </h2> 
          
        
    </div>

</div>
<input type="submit" class="okay" value ="OK">    

</body>
</html>