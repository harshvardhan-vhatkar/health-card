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
       
    <?php
    include "includes/left_panel.php";
    ?>
        <div class="right_panel">
            <div class="r1">
            <a href="last_App.php">
            <div class="bx1">
                <img src="img/ic1.png" alt="" class="im1">
                <br>
                <div class="cont1">
                <b>Last Visit to a Doctor</b>
                <p style="color:gray">Information related to last doctor’s appointment and reason for the visit.</p>
                </div>
            </div>
            </a>
            <a href="current_medication.php">
            <div class="bx1">
                <img src="img/ic2.png" alt="" class="im1">
                <br>
                <div class="cont1">
                <b>Current Medication</b>
                <p style="color:gray">Detailed desciption of current medication, their dosage and frequency.</p>
                </div>
            </div>
            </a>
            <a href="reports.php">
            <div class="bx1">
                <img src="img/ic3.png" alt="" class="im1">+
                <br>
                <div class="cont1">
                <b>Medical Report</b>
                <p style="color:gray">Various medical reports like blood tests, x-rays and other test reports are stored here.</p>
                </div>
            </div>
            </a>
            </div>
            <div class="r1">
            <a href="fam_med_hist.php">
            <div class="bx1">
                <img src="img/ic4.png" alt="" class="im1">
                <br>
                <div class="cont1">
                <b> Family History</b>
                <p style="color:gray">Information about disorders from direct blood relatives.</p>
                </div>
            </div>
            </a>
            <a href="med insurance.php">
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