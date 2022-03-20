<?php
session_start();
require "includes/database_connect.php";

$uname = $_SESSION['username'];

$sql_1 = "SELECT * FROM patient_signup WHERE username = '$uname'";
$result_1 = mysqli_query($conn, $sql_1);
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Patient</title>
    <link rel="stylesheet" href="css/main_homepage.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="css/common.css">
    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
</head>
<body style="background-color:#E9D3FF">
<?php
    include "includes/header.php";
    ?>
    <div class="main_div">
       
    <div class="left_panel"> <br>
                    <div class="circle1"></div>
            <div class="heading1">
                <h2 class="bold"><?= $user['name'] ?></h2>
                <br>
                <h4 class="sbold"><?= $user['email'] ?></h4>
            </div>
            <div class="hello">
                <table class="left_main">
                <tr >
                    <td >Gender</td>
                </tr>
                    <tr> 
                    <td>
                        <div class="details">
                        <?= $user['gender'] ?>
                    <hr>
                    </div></td>       
                    </tr>
            
                    <tr>
                    <td>Birthday</td>
                    </tr>
                    <tr> <td><div class="details">
                    <?= $user['dob'] ?>
                    <hr>
                    </div></td>
                </tr>
            
            
                <tr>
                    <td >Phone No</td>
                </tr>
                <tr> <td><div class="details">
                <?= $user['phone'] ?>
                        <hr>
                    </div></td>
                    </tr>
            
                <tr>
                    <td>Address</td>
                    <tr> <td><div class="details">
                    <?= $user['address'] ?>
                        <hr>
                        </div></td>
                    </tr>
                </tr>
            
                <tr>
                    <td>Blood Group</td>
                    <tr> <td><div class="details">
                    <?= $user['bgrp'] ?>
                        <hr>
                        </div></td>
                    </tr>
                </tr>
            
                <tr>
                    <td>Emergency Contact</td>
                    <tr> <td><div class="details">
                    <?= $user['ephone'] ?>
                        <hr>
                        </div></td>
                    </tr>
                </tr> 
                <tr>
                    <a href="patient_form.php">Edit</a>
                </tr>
                </table>
            </div>
        </div>
        <div class="right_panel">
            <div class="r1">
            <a href="pages/last_App.php">
            <div class="bx1">
                <img src="img/ic1.png" alt="" class="im1">
                <br>
                <div class="cont1">
                <b>Last Visit to a Doctor</b>
                <p style="color:gray">Information related to last doctor’s appointment and reason for the visit.</p>
                </div>
            </div>
            </a>
            <a href="pages/current_medication.php">
            <div class="bx1">
                <img src="img/ic2.png" alt="" class="im1">
                <br>
                <div class="cont1">
                <b>Current Medication</b>
                <p style="color:gray">Detailed desciption of current medication, their dosage and frequency.</p>
                </div>
            </div>
            </a>
            <a href="pages/reports.php">
            <div class="bx1">
                <img src="img/ic3.png" alt="" class="im1">
                <br>
                <div class="cont1">
                <b>Medical Report</b>
                <p style="color:gray">Various medical reports like blood tests, x-rays and other test reports are stored here.</p>
                </div>
            </div>
            </a>
            </div>
            <div class="r1">
            <a href="pages/fam_med_hist.php">
            <div class="bx1">
                <img src="img/ic4.png" alt="" class="im1">
                <br>
                <div class="cont1">
                <b> Family History</b>
                <p style="color:gray">Information about disorders from direct blood relatives.</p>
                </div>
            </div>
            </a>
            <a href="pages/med insurance.php">
            <div class="bx1">
                <img src="img/ic5.png" alt="" class="im1">
                <br>
                <div class="cont1">
                <b>Insurance</b>
                <p style="color:gray">Details about health insurance of the patient.</p>
                </div>
            </div>
</a>
<a href="records.php">
            <div class="bx1">
                <img src="img/ic6.png" alt="" class="im1">
                <br>
                <div class="cont1">
                <b>Records</b>
                <p style="color:gray">Records of various medical details about the patient.</p>
                </div>
            </div>
</a>
            </div>

        </div>


    </div>
    
</body>
</html>