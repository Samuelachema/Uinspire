<?php
require("../includes/connection.php");

$memberid = $_GET['memberid'];
$membercheckvalue = $_GET['membercheckvalue'];
$lastid = $_GET['lastid'];
$meetingdate = $_GET['meetingdate'];

if($membercheckvalue==="true"){ $membercheckvalue=1; }else{ $membercheckvalue=0; }

$sql = "INSERT INTO attendance(reportsid, userid, present, meetingdate) VALUES ('$lastid','$memberid','$membercheckvalue','$meetingdate')";

echo $sql;

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();