<?php

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

$imageURL = 'uploads/'.$user["file_name"];
?>
<div class="left_panel"> <br>
                    <div > <img src="<?= $imageURL; ?>" class="circle1" /></div>
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
       
                </table>
            </div>
            <div class="edit_button">
                    <a href="patient_form.php" class="edit_text">Edit</a>
</div>
        </div>