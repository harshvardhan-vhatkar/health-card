<?php
session_start();
$uname=$_SESSION['username'];
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

<?php

// fetch files
$sql = "select filename from tbl_files where username='$uname'";
$result = mysqli_query($conn, $sql);
?>

<div class="container">
    <div class="row">
        <div class="col-xs-8 col-xs-offset-2 well">
        <div class="rep_up">
        
        </div>
    </div>
    
    
</div>

<div class="right_details">
<h3>Reports and X-Rays</h3>
<hr class="hori">
<div class= "main_butt">
</div>
<div>
<form action="uploads.php" method="post" enctype="multipart/form-data">
            <legend>Select File to Upload</legend>
            <div class="form-group">
                <input type="file" class="choose_rep" name="file1" />
            </div>
            <div class="form-group">
                <input type="submit" class="submit_rep" name="submit" value="Upload" class="btn btn-info"/>
            </div>
            <?php if(isset($_GET['st'])) { ?>
                <div class="alert alert-danger text-center">
                
                </div>
            <?php } ?>
        </form> 
    </div>
    
</div>
<div class="bott_right">
    <h5>Attached Documents:</h5> 
    <div class="attac_docs">
    <div class="row">
            </div>
        <div class="col-xs-8 col-xs-offset-2">
        
            <table class="table table-striped table-hover">
                <thead>
                  
                </thead>
                <tbody>
                <?php
                $i = 1;

                while($row = mysqli_fetch_array($result)) { ?>
                <tr class="text_docs">
                   <td><?php echo $i++; ?></td>
                    <td><?php echo $row['filename']; ?></td>
                    <td><a href="uploads/<?php echo $row['filename']; ?>" target="_blank">View</a></td>
                    <td><a href="uploads/<?php echo $row['filename']; ?>" download>Download</td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
                </div>
        </div>
    </div>
             
      
    </div>

</div>
<input type="submit" class="okay" value ="OK">    

</body>
</html>