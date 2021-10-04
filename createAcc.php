<?php 

include "connection.php";

// values extracted from the form using http post method inserted into the following variables

$fname = $_POST["firstName"];
$lname = $_POST["lastName"];
$email = $_POST["emailAddress"];
$uni = $_POST["university"];
$pass = $_POST["password"];
$verstatus = 1;

// data insertion sql stmt
$insertsql = "INSERT INTO students(st_fname,st_lname,st_email,st_university,st_password,st_verstatus)
VALUES(:st_fname, :st_lname, :st_email, :st_university, :st_password, :st_verstatus)";

$stmt = $con->prepare($insertsql);
$stmt->execute(["st_fname" => $fname, "st_lname" => $lname, "st_email" => $email, "st_university" => $uni, "st_password" => $pass, "st_verstatus" => $verstatus]);

// redirect to the login page

header("location: https://support2internationalstudents.000webhostapp.com/SignIn.html");
?>