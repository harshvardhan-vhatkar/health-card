<?php
session_start();
require("../includes/database_connect.php");

$user=$_SESSION['username'];
$doc_name = $_POST['doc_name'];
 $spec = $_POST['spec'];
 $reason=$_POST['reason'];
$medicine=$_POST['medicine'];
$dosage=$_POST['dosage'];
$duration=$_POST['duration'];
$visit_date=$_POST['visit_date'];


 $sql = "SELECT * FROM last_app WHERE user='$user'";
 $result = mysqli_query($conn, $sql);
if (!$result) {
    $response = array("success" => false, "message" => "Something went wrong!");
    echo json_encode($response);
    return;
}


$sql = "UPDATE last_app SET doc_name = '$doc_name', speciality='$spec', reason='$reason',medicine='$medicine', dosage='$dosage',duration='$duration',visit_date='$visit_date' WHERE user = '$user'";
$result = mysqli_query($conn, $sql);
if (!$result) {
    $response = array("success" => false, "message" => "Something went wrong!");
    echo json_encode($response);
    return;
}


header("location:../last_App.php");
//$response = array("success" => true, "message" => "Login successful!");
//echo json_encode($response);
mysqli_close($conn);
?>