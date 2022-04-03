<?php
session_start();
require("../includes/database_connect.php");

$user=$_SESSION['username'];
$smoking = $_POST['smoking'];
$alcohol= $_POST['alcohol'];
$drugs= $_POST['drugs'];
$bp= $_POST['bp'];
$autism= $_POST['autism'];
$birthdefects= $_POST['birthdefects'];
$bloodclots= $_POST['bloodclots'];
$diabetes= $_POST['diabetes'];


 $sql = "SELECT * FROM fam_med_history WHERE user='$user'";
 $result = mysqli_query($conn, $sql);
if (!$result) {
    $response = array("success" => false, "message" => "Something went wrong!");
    echo json_encode($response);
    return;
}


$sql = "UPDATE fam_med_history SET smoking = '$smoking', alcohol='$alcohol', drugs='$drugs', bp='$bp', autism='$autism', birthdefects='$birthdefects', bloodclots='$bloodclots', diabetes='$diabetes' WHERE user = '$user'";
$result = mysqli_query($conn, $sql);
if (!$result) {
    $response = array("success" => false, "message" => "Something went wrong!");
    echo json_encode($response);
    return;
}


header("location:../fam_med_hist.php");
//$response = array("success" => true, "message" => "Login successful!");
//echo json_encode($response);
mysqli_close($conn);
?>