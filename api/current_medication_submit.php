<?php
session_start();
require("../includes/database_connect.php");

$user=$_SESSION['username'];
$dosage_freq = $_POST['dosage_freq'];
 $date = $_POST['date'];
 $doctor=$_POST['doctor'];
$reason=$_POST['reason'];
$medication=$_POST['medication'];
 $sql = "SELECT * FROM medication WHERE user='$user'";
 $result = mysqli_query($conn, $sql);
if (!$result) {
    $response = array("success" => false, "message" => "Something went wrong!");
    echo json_encode($response);
    return;
}


$sql = "UPDATE medication SET medication = '$medication', dosage_freq='$dosage_freq', date='$date', doctor='$doctor', reason='$reason' WHERE user = '$user'";
$result = mysqli_query($conn, $sql);
if (!$result) {
    $response = array("success" => false, "message" => "Something went wrong!");
    echo json_encode($response);
    return;
}


header("location:../current_medication.php");
//$response = array("success" => true, "message" => "Login successful!");
//echo json_encode($response);
mysqli_close($conn);
?>