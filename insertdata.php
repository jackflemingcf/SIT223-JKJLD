<?php

include "connection.php";

$name = $_POST["charityName"];
$address = $_POST["charityAddress"];
$postcode = $_POST["charityPostcode"];
$email = $_POST["emailAddress"];
$phoneno = $_POST["phoneNumber"];
$startdate = $_POST["startDate"];
$enddate = $_POST["endDate"];
$description = $_POST["description"];
$drivelocation = $_POST["charityEventLocation"];
$status = 1;


$insertsql = "INSERT INTO charity_org(ch_name,ch_address,ch_postcode,ch_email,ch_phoneno,ch_status,ch_drivelocation,ch_ddescription,ch_drivestartdate,ch_driveenddate) VALUES(:ch_name, :ch_address, :ch_postcode, :ch_email, :ch_phoneno, :ch_status, :ch_drivelocation, :ch_ddescription, :ch_drivestartdate, :ch_driveenddate)";

$insertstmt = $con->prepare($insertsql);
$insertstmt->execute(["ch_name" => $name, "ch_address" => $address, "ch_postcode" => $postcode, "ch_email" => $email, "ch_phoneno" => $phoneno, "ch_status" => $status,"ch_drivelocation" => $drivelocation, "ch_ddescription" => $description,
"ch_drivestartdate" => $startdate, "ch_driveenddate" => $enddate]);

header("location: https://support2internationalstudents.000webhostapp.com/charityForm.html");
?>