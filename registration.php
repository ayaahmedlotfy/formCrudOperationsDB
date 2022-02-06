
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
    <form name="myForm"  action="mysql.php" target="_blank" method="GET">
      <fieldset>
        <legend>Personal Information</legend>

        <label for="fname">First Name :</label>
        <input
          type="text"
          name="fname"
          id="fname"
          placeholder=" Enter Your First Name"
          maxlength="11"

        /><br /><br />

        <label for="lname">Last Name :</label>
        <input
          type="text"
          name="lname"
          id="lname"
          placeholder=" Enter Your Last Name"

        /><br /><br />

        <label for="address">Address :</label>
        <input
          type="text"
          name="address"
          id="address"
          placeholder=" Enter Your address"
        /><br /><br />

        <label>Gender :</label>
        <input type="radio" id="male" name="gender" value="male" />
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female" checked />
        <label for="female">Female</label><br /><br />


        <label for="mail">Username :</label>
        <input
          type="email"
          name="mail"
          id="mail"
          placeholder=" YourEmail@gmail.com"
        /><br /><br />

        <label for="password">password :</label>
        <input
          type="password"
          name="password"
          id="password"
          placeholder=" Enter Your Password"
        /><br /><br />


        <label for="country">Country:</label>
        <input list="country" name="mycountry" />
        <datalist id="country">
          <option value="Egypt"></option>
          <option value="Kuwait"></option>
          <option value="Saudi Arabia"></option>
        ><br />
        <br />
      </fieldset>
      <br />
      <br />
      <fieldset>
        <label for="department"> Department :</label>
        <select name="department" id="department">
          <option value="hidden" hidden>Choose your Department</option>
          <option value="Software">Software</option>
          <option value="Network">Network</option>
          <option value="Bioinformatics">Bioinformatics</option>
          <option value="Artificial Inteligence">Artificial Inteligence</option>
        </select>
        <br />
        <br />

      </fieldset>
      <br />
      <br />
      <input type="submit" name="submit" value="Add Student" />
      <input type="reset" name="reset" value="Reset" />

  </body>
</html>
