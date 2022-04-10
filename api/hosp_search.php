<?php
require "../includes/database_connect.php";
$username = $_GET["username"];

$sql_1 = "SELECT * FROM patient_signup WHERE username = '$username'";
$result_1 = mysqli_query($conn, $sql_1);
if (!$result_1) {
    echo "This patient is not registered yet!";
    return;
}


$user = mysqli_fetch_assoc($result_1);
if (!$user) {
    echo "This patient is not registered yet!";
    return;
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $user['name']?> | Records</title>
    <link rel="stylesheet" href="../css/records.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/common.css">
</head>

<body id="bodyy">


<div class="header hed">
        <nav class="navbar navbar-expand-md navbar-light">
            <h1 class="h11"> Records</h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </div>
<br>
    <div class="ccard ">
        <div class="cheader">LAST APPOINTMENT INFORMATION</div>

        
                <div class=" tr1 row justify-content-around align-items-center">
                    <div class="col-1 ">Name of Doctor</div>
                    <div class="col-1">Speciality</div>
 
                    <div class="col-1">Reason of Visit</div>
                    <div class="col-1">Medication Assigned</div>
                    <div class="col-1">Dosage</div>
                    <div class="col-1">Duration</div>
                    <div class="col-1">Date of Visit</div>
                </div>
                <?php 
                $sql_4 = "SELECT * FROM last_app WHERE user = '$username'";
                $result_1 = mysqli_query($conn, $sql_4);
                $user = mysqli_fetch_assoc($result_1);
                ?>
                <div class=" tr2 row justify-content-around align-items-center">
                    <div class="col-1"><?php echo $user['doc_name']; ?> </div>
                    <div class="col-1"><?php echo $user['speciality'] ?></div>
                    <div class="col-1"><?php echo $user['reason']; ?></div>
                    <div class="col-1"><?php echo $user['medicine']; ?></div>
                    <div class="col-1"><?php echo $user['dosage']; ?></div>
                    <div class="col-1"><?php echo $user['duration']; ?></div>
                    <div class="col-1"><?php echo $user['visit_date']; ?></div>
                   
                </div>
                <a class="ic1" href=""><i class="fas fa-pencil-alt"></i>
                </a>
                <a class="ic2" href=""><i class="fas fa-trash"></i>
                </a>
                <br>

    </div>
    <div class="hrr"></div>
    <div class="ccard ">
        <div class="cheader">CURRENT MEDICATION</div>

        
                <div class=" tr1 row justify-content-around align-items-center">
                    <div class="col-1 ">Name of Medication</div>
                    <div class="col-auto">Dosage and Frequency</div>
                    <div class="col-1">Date when Assigned</div>
                    <div class="col-auto">Doctor who prescribed</div>
                    <div class="col-1">Medication Assigned</div>
                    <div class="col-auto">Reason Prescribed For</div>
                    <div class="col-1">Any Known Allergies</div>
              
                </div>

                <div class=" tr2 row justify-content-around align-items-center">
                    <div class="col-1">DOLO650</div>
                    <div class="col-1">Before Lunch & Dinner</div>
                    <div class="col-1">31/12/2021</div>
                    <div class="col-1">Dr.Singh</div>
                    <div class="col-1">Diphenhydramine(Benadryl)</div>
                    <div class="col-1">Common Cold</div>
                    <div class="col-1">Peanuts</div>
            
                </div>
                <a class="ic1" href=""><i class="fas fa-pencil-alt"></i>
                </a>
                <a class="ic2" href=""><i class="fas fa-trash"></i>
                </a>
                <br>

    </div>
    <div class="hrr"></div>
    <div class="ccard ">
        <div class="cheader">FAMILY MEDICAL HISTORY</div>

        
                <div class=" tr1 row justify-content-around align-items-center">
                    <div class="col-1 ">Health Conditions</div>
                    <div class="col-1">YES</div>
                    <div class="col-1">NO</div>
                    <div class="col-1">Don't Know</div>
                    <div class="col-1">Other Conditions
                    </div>

                </div>
                <?php 
                $sql_5 = "SELECT * FROM fam_med_history WHERE user = '$username'";
                $result_2= mysqli_query($conn, $sql_5);
                $user1 = mysqli_fetch_assoc($result_2);
                ?>
                <div class=" tr2 row justify-content-around align-items-center">
                    <div class="col-1">Autism</div>
                    <div class="col-1"><?php echo $user1['autism']=="YES" ? "YES" : "-"; ?> 
                      </div>
                    <div class="col-1"><?php echo $user1['autism']=="NO" ? "NO" : "-"; ?></div>
                    <div class="col-1"><?php echo $user1['autism']=="DONTKNOW" ? "Don't Know" : "-"; ?></div>
                    <div class="col-1">-</div>

                   
                </div>
                <a class="ic1" href=""><i class="fas fa-pencil-alt"></i>
                </a>
                <a class="ic2" href=""><i class="fas fa-trash"></i>
                </a>
                <br>

    </div>
    <div class="hrr"></div>
    <div class="ccard ">
        <div class="cheader">REPORT AND X-RAYS</div>

        
                <div class=" tr1 row justify-content-around align-items-center">
                    <div class="col-2 ">Uploaded Medical Reports</div>
                    <div class="col-1">Uploaded X-rays</div>

                </div>
                <div class=" tr2 row justify-content-around align-items-center">
                    <div class="col-2">Blood Report ,  Thyroid Report,   Thyroid Report</div>
                    <div class="col-1">Hand X-Ray</div>

                   
                </div>
                <a class="ic1" href=""><i class="fas fa-pencil-alt"></i>
                </a>
                <a class="ic2" href=""><i class="fas fa-trash"></i>
                </a>
                <br>

    </div>
    <div class="hrr"></div>
    <div class="ccard ">
        <div class="cheader">MEDICAL INSURANCE DETAILS</div>

        
                <div class=" tr1 row justify-content-around align-items-center">
                    <div class="col-2 ">Name of Insurance</div>
                    <div class="col-2">Insurance Company</div>
                    <div class="col-2">Validity of Insurance</div>
                    <div class="col-2">Insurance ID</div>
                    <div class="col-2">Attached Copy</div>

                </div>
                <?php 
                $sql_10 = "SELECT * FROM insurance WHERE user = '$username'";
                $result_10= mysqli_query($conn, $sql_10);
                $user2 = mysqli_fetch_assoc($result_10);
                ?>
                <div class=" tr2 row justify-content-around align-items-center">
                    <div class="col-2"><?php echo $user2['name_ins']; ?></div>
                    <div class="col-2"><?php echo $user2['ins_company']; ?></div>
                    <div class="col-2"><?php echo $user2['validity']; ?></div>
                    <div class="col-2"><?php echo $user2['ins_id']; ?></div>

                    <div class="col-2"><a href="../uploads/<?php echo $user2['ins_copy']; ?>" target="_blank">View</a></div>

                   
                </div>
                <a class="ic1" href=""><i class="fas fa-pencil-alt"></i>
                </a>
                <a class="ic2" href=""><i class="fas fa-trash"></i>
                </a>
                <br>

    </div>

</body>

</html>
