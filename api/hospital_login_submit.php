<?php
session_start();
require("../includes/database_connect.php");

$username = $_POST['username'];
$password = $_POST['password'];
$password = sha1($password);

$sql = "SELECT * FROM hosp_signup WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);
if (!$result) {
    $response = array("success" => false, "message" => "Something went wrong!");
    echo json_encode($response);
    return;
}

$row_count = mysqli_num_rows($result);
if ($row_count == 0) {
    $response = array("success" => false, "message" => "Login failed! Invalid email or password.");
    echo json_encode($response);
    return;
}

$row = mysqli_fetch_assoc($result);
$_SESSION['username'] = $row['username'];
//$_SESSION['full_name'] = $row['full_name'];
//$_SESSION['email'] = $row['email'];
header("location:../hosp_dashb.php");
//$response = array("success" => true, "message" => "Login successful!");
//echo json_encode($response);
mysqli_close($conn);
?>