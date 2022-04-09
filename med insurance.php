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
   
<?php 
$uname=$_SESSION['username'];

$sql_4 = "SELECT * FROM insurance WHERE user = '$uname'";

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

 <div class="insurance_details">
   <table>
   <form id="insurance-form" class="form" role="form" method="post" action="api/insurance_submit.php">
     <tr>
       
<td><h3>Name of Insurance</h3></td>
<td><input type="text"class="in_in" name="name_ins" value="<?= $user['name_ins'] ?>"></td>
     </tr>
<br>
<tr>
  <td><h3 class="wid">Insurance Company</h3></td>
<td><input type="text" class="in_in" name="ins_company" value="<?= $user['ins_company'] ?>" ></td>
</tr>
<br>
<tr>
<td><h3>Validity of Insurance</h3></td>
<td><input type="text"class="in_in" name="validity" value="<?= $user['validity'] ?>"></td>
<br>
</tr>
<tr>
<td><h3>Insurance ID</h3></td>
<td><input type="text"class="in_in" name="ins_id" value="<?= $user['ins_id'] ?>"></td>
<br>
</tr>
<tr>





<td><h3>Attached Copy</h3></td>
</tr>
</table>

<br>
 </div>
 
</div>
 
</div>
<input type="submit" class="okay" value ="OK">    
</form>


<form id="insurance-form-doc" class="form" role="form" method="post" action="uploads1.php" enctype="multipart/form-data">
<div class="attach">

 <input type="file"  name="file" class="attach_text" >
 <input type="submit" class="okay" name="submit" value ="UPLOAD"> 

 </div>
 <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>File Name</th>
                        <th>View</th>
                        <th>Download</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $sql = "SELECT ins_copy FROM insurance WHERE user = '$uname'";
                $result = mysqli_query($conn, $sql);
                $i = 1;
                while($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['ins_copy']; ?></td>
                    <td><a href="uploads/<?php echo $row['ins_copy']; ?>" target="_blank">View</a></td>
                    <td><a href="uploads/<?php echo $row['ins_copy']; ?>" download>Download</td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
</form>
</body>
</html>