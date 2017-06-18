<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "event";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$rollno=$_POST["rollno"];
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$mobile=$_POST["mobile"];
$email=$_POST["email"];
$event=$_POST["event"];
$branch=$_POST["branch"];
$year=$_POST["year"];
$sql = "INSERT INTO student(rollno,fname,lname,branch,year,mobile,email,event) VALUES ('$rollno','$fname','$lname','$branch','$year','$mobile','$email','$event')";

if ($conn->query($sql) === TRUE) {
    // The output above is before the header() call
	header('Location: entry_success.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>