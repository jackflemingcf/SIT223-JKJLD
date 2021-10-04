<?php 

include "connection.php";

// values ectracted from form and assigned to the variables below
$uemail = $_POST["emailAddress"];
$upass = $_POST["password"];

// sql stmt for checking if a record exists with such credentials
$find = "SELECT st_ID FROM students WHERE st_email = :st_email && st_password = :st_password";
$sqlstmt = $con->prepare($find);
$sqlstmt->execute(["st_email" => $uemail, "st_password" => $upass]);
$check = $sqlstmt->fetch();

$result = 0;

if($check){
    $result = $check->st_ID;
}else{
    $result = 0;
}
// login logic
if($result){
    header("location: https://support2internationalstudents.000webhostapp.com/Profile.html");
    exit();
}elseif($result == 0){
    header("location: https://support2internationalstudents.000webhostapp.com/SignIn.html");
    exit();
}
?>