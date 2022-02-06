<?php
// id of student which will delete
$id=$_GET["id"];

$password = "";
$servername = "localhost";
$username = "root";

// Create connection
$conn = mysqli_connect($servername, $username, $password,"form");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$data=$conn->query("delete from student where id=$id");



// Close connection
$conn->close();

// to redirect to db
header("Location:list.php");
?>


