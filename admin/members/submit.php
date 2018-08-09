<?php
require("../includes/connection.php"); 

$fname = $_GET['fname'];
$mname = $_GET['mname'];
$sname = $_GET['sname'];
$gender = $_GET['gender'];
$email = $_GET['email'];
$phoneno = $_GET['phoneno'];
$pswd = sha1($phoneno);
//echo "$fname $mname $sname, $gender, $email, $phoneno";

$sql = "INSERT INTO users(firstname, middlename, surname, gender, email, phoneno, password) VALUES ('$fname','$mname','$sname','$gender','$email','$phoneno','$pswd')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();