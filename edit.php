
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


   <style>
        h2{background-color: rgb(88, 88, 146);        padding: 30px;}
        fieldset{
          
          background-color: rgb(209, 209, 224);
          color: rgb(65, 62, 62);

        }
    
        body{background-color: rgb(167, 167, 190); }
      </style>
  </head>
  <body>
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



// Close connection
$conn->close();

?>

    <form name="myForm"  action="update.php" target="_blank" method="GET">
      <fieldset>
        <legend>Personal Information</legend>
        <input
          type="hidden"
          name="id"
          value="<?= $studentInfo['id']?>"/>

        <label for="fname">First Name :</label>
        <input
          type="text"
          name="fname"
          id="fname"
          placeholder=" Enter Your First Name"
          maxlength="11"
          value="<?= $studentInfo['fname']?>"

        /><br /><br />

        <label for="lname">Last Name :</label>
        <input
          type="text"
          name="lname"
          id="lname"
          placeholder=" Enter Your Last Name"
          value="<?= $studentInfo['lname']?>"
        /><br /><br />

        <label for="address">Address :</label>
        <input
          type="text"
          name="address"
          id="address"
          placeholder=" Enter Your address"
          value="<?= $studentInfo['address']?>"
        /><br /><br />

        <label>Gender :</label>
        <input type="radio" id="male" name="gender" value="male" <?php echo ($studentInfo['gender']=='male')?'checked':'' ?>/>
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female" <?php echo ($studentInfo['gender']=='female')?'checked':'' ?> />
        <label for="female">Female</label><br /><br />


        <label for="mail">Username :</label>
        <input
          type="email"
          name="mail"
          id="mail"
          placeholder=" YourEmail@gmail.com"
          value="<?= $studentInfo['email']?>"

        /><br /><br />

        <label for="password">password :</label>
        <input
          type="password"
          name="password"
          id="password"
          placeholder=" Enter Your Password"
          value="<?= $studentInfo['password']?>"
        /><br /><br />


        <label for="country">Country:</label>
        <input list="country" name="mycountry"  value="<?= $studentInfo['mycountry']?>" />
        <datalist id="country" >
          <option value="Egypt" ></option>
          <option value="Kuwait"></option>
          <option value="Saudi Arabia"></option>
          </datalist
        ><br />
        <br />
      </fieldset>
      <br />
      <br />
      <fieldset>
        <label for="department"> Department :</label>
        <select name="department" id="department">
          <option value="Software"  <?php echo ($studentInfo['department']=='Software')?'selected':'' ?>>Software</option>
          <option value="Network"  <?php echo ($studentInfo['department']=='Network')?'selected':'' ?>>Network</option>
          <option value="Bioinformatics"   <?php echo ($studentInfo['department']=='Bioinformatics')?'selected':'' ?> >Bioinformatics</option>
          <option value="Artificial Inteligence"   <?php echo ($studentInfo['department']=='Artificial Inteligence')?'selected':'' ?> >Artificial Inteligence</option>
        </select>
        <br />
        <br />

        <br />
        <br />
      </fieldset>
      <br />
      <br />
      <input type="submit" name="submit" value="Edit Student" />
      <input type="reset" name="reset" value="Reset" />

  </body>
</html>
