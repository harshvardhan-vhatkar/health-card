<?php
session_start();
require("../includes/database_connect.php");

$user=$_SESSION['username'];
$name_ins = $_POST['name_ins'];
 $ins_company = $_POST['ins_company'];
 $validity=$_POST['validity'];
$ins_id=$_POST['ins_id'];


 $sql = "SELECT * FROM insurance WHERE user='$user'";
 $result = mysqli_query($conn, $sql);
if (!$result) {
    $response = array("success" => false, "message" => "Something went wrong!");
    echo json_encode($response);
    return;
}



$sql = "UPDATE insurance SET name_ins = '$name_ins', ins_company='$ins_company', validity='$validity', ins_id='$ins_id' where user='$user'";
$result = mysqli_query($conn, $sql);
if (!$result) {
    $response = array("success" => false, "message" => "Something went wrong!");
    echo json_encode($response);
    return;
}







 header("location:../med insurance.php");

 mysqli_close($conn);
?>