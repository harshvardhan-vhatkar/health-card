<?php
require("../includes/database_connect.php");

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$password = sha1($password);

$sql = "SELECT * FROM patient_signup WHERE email='$email'";
$result = mysqli_query($conn, $sql);
if (!$result) {
    $response = array("success" => false, "message" => "Something went wrong!");
    echo json_encode($response);
    return;
}

$row_count = mysqli_num_rows($result);
if ($row_count != 0) {
    $response = array("success" => false, "message" => "This email id is already registered with us!");
    echo json_encode($response);
    return;
}

$sql = "INSERT INTO patient_signup (email, password, username) VALUES ('$email', '$password', '$username')";
$result = mysqli_query($conn, $sql);
$sql1 = "INSERT INTO last_app (user) VALUES ('$username')";
$result1=mysqli_query($conn,$sql1);
$sql2 = "INSERT INTO fam_med_history (user) VALUES ('$username')";
$result2=mysqli_query($conn,$sql2);
$sql3 = "INSERT INTO insurance (user) VALUES ('$username')";
$result3=mysqli_query($conn,$sql3);
$sql4 = "INSERT INTO medication (user) VALUES ('$username')";
$result4=mysqli_query($conn,$sql4);
$sql5 = "INSERT INTO reports (user) VALUES ('$username')";
$result5=mysqli_query($conn,$sql5);
if (!$result) {
    $response = array("success" => false, "message" => "Something went wrong!");
    echo json_encode($response);
    return;
}

$response = array("success" => true, "message" => "Your account has been created successfully!");
echo json_encode($response);
mysqli_close($conn);
