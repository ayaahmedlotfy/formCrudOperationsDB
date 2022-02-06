<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    table, th, td {
  border: 1px solid black;
}
  </style>
</head>
<body>
<table>
        <tr>    
                <th>ID</th>
                <th>Fisrt Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <th>gender</th>
                <th>mail</th>
                <th>password</th>
                <th>mycountry</th>
                <th>department</th>


        </tr>
<?php
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
$data=$conn->query("select * from student");
while($row=$data->fetch_assoc()){
    echo"<tr>";
    foreach($row as $value){
    echo "<td>$value</td>";
}
// show , edit , delete student by id
echo "<td><a href='show.php?id={$row['id']}'>Show</a></td>";
echo "<td><a href='edit.php?id={$row['id']}'>Edit</a></td>";
echo "<td><a href='delete.php?id={$row['id']}'>Delete</a></td>";


    echo"</tr>";
}


// Close connection
$conn->close();
?>
</table>
</body>
</html>

