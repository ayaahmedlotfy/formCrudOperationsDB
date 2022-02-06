<?php
// id od student which will delete
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

$data=$conn->query("select * from student where id=$id");
$studentInfo=$data->fetch_assoc();
echo"<ul>";
foreach($studentInfo as $key=>$value){
echo"<li>$key: $value</li>";
}
echo"</ul>";


// Close connection
$conn->close();
echo"<button><a href='list.php'>List All Student</a></button>";
?>


