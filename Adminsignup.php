<?php
include_once("databaseconnection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adminsignup</title>
 <link rel="stylesheet" href="css/signup.css">
</head>
<body>
<div><p><li><a href="mainpage.php">HOME</a></li></p></div>
    <form action="adminsign.php" method="post" class="container">
    <fieldset>
    <legend><h2>Admin Registration</h2></legend>
    <label for="name">First name</label><br>
    <input type="text" placeholder="Enter your first name" name="fname" required minimum-length="3" pattern="[a-zA-Z]{3,}" title="Must be more than three letters"><br>
    <label for="name">Second name</label><br>
    <input type="text" placeholder="Enter your second name" name="sname" required minimum-length="3" pattern="[a-zA-Z]{3,}" title="Must be more than three letters"><br>
    <label for="Gender">Gender:</label>
    <select name="gender" id="Gender" required><br> 
    <option value="Female">Female</option>
    <option value="Female">Male</option>
    </select><br>
    <label>Date of birth:</label>
    <input type="date" id="date" name="date" required max="2004-06-14"><br><br>
    <label for="email">Email</label><br>
    <input type="email" id="email" placeholder="Enter Email" name="email" required  patten="^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}$" title="Please enter a valid email address"><br>
    <label for="password"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="password" required  minimum-length="6" pattern="^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=\S+$).{6,}$" title="form a strong password with atleast six characters"><br>
    <br>

    <button type="submit" id="submit" class="btn">Register</button><span>
      
</fieldset>               
  </form>
</body>
</html>
