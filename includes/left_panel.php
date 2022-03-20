<?php

require "includes/database_connect.php";

$username = $_SESSION['username'];

$sql_1 = "SELECT * FROM patient_signup WHERE username = $username";
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
<div class="left_panel"> <br>
                    <div class="circle1"></div>
            <div class="heading1">
                <h2 class="bold"><?= $user['name'] ?></h2>
                <br>
                <h4 class="sbold">Youremail@gmail.com</h4>
            </div>
            <div class="hello">
                <table class="left_main">
                <tr >
                    <td >Gender</td>
                </tr>
                    <tr> 
                    <td>
                        <div class="details">
                    Male
                    <hr>
                    </div></td>       
                    </tr>
            
                    <tr>
                    <td>Birthday</td>
                    </tr>
                    <tr> <td><div class="details">
                    24 Jul,2001
                    <hr>
                    </div></td>
                </tr>
            
            
                <tr>
                    <td >Phone No</td>
                </tr>
                <tr> <td><div class="details">
                    9090909090
                        <hr>
                    </div></td>
                    </tr>
            
                <tr>
                    <td>Address</td>
                    <tr> <td><div class="details">
                    Mumbai
                        <hr>
                        </div></td>
                    </tr>
                </tr>
            
                <tr>
                    <td>Blood Group</td>
                    <tr> <td><div class="details">
                    B positive
                        <hr>
                        </div></td>
                    </tr>
                </tr>
            
                <tr>
                    <td>Emergency Contact</td>
                    <tr> <td><div class="details">
                    9191919191
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