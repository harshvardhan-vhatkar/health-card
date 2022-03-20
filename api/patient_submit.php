<?php
session_start();
require("../includes/database_connect.php");

$username=$_SESSION['username'];

$name = $_POST['name'];
$gender = $_POST['gender'];
$dob=$_POST['dob'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$bgrp=$_POST['bgrp'];
$ephone=$_POST['ephone'];


$sql = "SELECT * FROM patient_signup WHERE username='$username'";
$result = mysqli_query($conn, $sql);
if (!$result) {
    $response = array("success" => false, "message" => "Something went wrong!");
    echo json_encode($response);
    return;
}


$sql = "UPDATE patient_signup SET name = '$name',gender='$gender',dob='$dob',phone='$phone',address='$address',bgrp='$bgrp',ephone='$ephone' WHERE username = '$username'";
$result = mysqli_query($conn, $sql);
if (!$result) {
    $response = array("success" => false, "message" => "Something went wrong!");
    echo json_encode($response);
    return;
}



header("location:../patient_homepage.php");
//$response = array("success" => true, "message" => "Login successful!");
//echo json_encode($response);
mysqli_close($conn);
?>