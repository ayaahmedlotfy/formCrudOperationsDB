<?php
$password = "";
$servername = "localhost";
$username = "root";

// create db form after create connection without db name
// $conn->query("create database if not exists form");
// creat table student after create connection without db name
//$conn->query("create table student (id int not null AUTO_INCREMENT primary key,fname varchar(40),lname varchar(40),address varchar(40),gender varchar(40),email varchar(40),password varchar(40),mycountry varchar(40),department varchar(40))");


// Create connection
$conn = mysqli_connect($servername, $username, $password,"form");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$fname= $_GET["fname"];
$lname= $_GET["lname"];
$address= $_GET["address"];
$gender= $_GET["gender"];
$mail=$_GET["mail"];
$password=$_GET["password"];
$country=$_GET["mycountry"];
$department=$_GET["department"];
// add to db
$conn->query("insert into student set fname='$fname' , lname='$lname', address='$address', gender='$gender' , email='$mail' , password='$password' , mycountry='$country', department='$department'");


// Close connection
$conn->close();

// to redirect to db
header("Location:list.php");

?>