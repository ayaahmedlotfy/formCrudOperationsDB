<?php
// id od student which will delete
$id=$_GET["id"];
$fname= $_GET["fname"];
$lname= $_GET["lname"];
$address= $_GET["address"];
$gender= $_GET["gender"];
$mail=$_GET["mail"];
$password=$_GET["password"];
$country=$_GET["mycountry"];
$department=$_GET["department"];

$pass = "";
$servername = "localhost";
$username = "root";



// Create connection
$conn = mysqli_connect($servername, $username, $pass,"form");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$data=$conn->query("update student set fname='$fname' , lname='$lname', address='$address', gender='$gender' , email='$mail' , password='$password' , mycountry='$country', department='$department' where id=$id");


// Close connection
$conn->close();
header("Location:list.php");

?>


