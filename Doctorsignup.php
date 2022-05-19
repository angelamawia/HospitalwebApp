<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
 <link rel="stylesheet" href="css/signup.css">
</head>
<body>
     <!--<h2>Sign Up Form-->
    <form action="Dsignup.php" method="post" class="container">
    <label for="name">First name</label><br>
    <input type="text" placeholder="Enter your first name" name="fname" required><br>
    <label for="name">Second name</label><br>
    <input type="text" placeholder="Enter your second name" name="sname" required><br>
    <label for="Gender">Gender:</label>
    <select name="gender" id="Gender" required><br>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
      </select><br>
      <label>Date of birth:</label>
      <input type="date" id="date" name="date"><br><br>
    <label for="email">Email</label><br>
    <input type="text" placeholder="Enter Email" name="email" required><br>
    <label for="password"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="password" required><br>
    <br>

    <button type="submit" id="submit" class="btn">Register</button>
                    
  </form>
</body>
</html>
