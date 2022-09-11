<?php session_start();
//if(empty($_SESSION['id'])):
    //header('Location:adminlogin.php');
//ndif;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            adminlogin
        </title>
        <link rel="stylesheet" href="css/p1.css">
        <link rel="stylesheet" href="css/login1.css">
    </head>
    <body style="images/nurse.jpg">
        <header><h1 style="color:blue";>Pregnancy Monitoring System<h1>
       <h2 style="color:blue";>Admin Login</h2></span> </div>
            </header>
           <div>
                 
                <form action="aLprocess.php" method="POST" class="container">
                   <center>
                <div>
                  <label for="email"><b>Email</b></label>
                  <input type="email" placeholder="Enter Email" name="email" required patten="[a-zA-Z]{3,}*@[a-zA-Z]{3,}*.[a-zA-Z]{2,}*" title="Please enter a valid email address">
                  </div>
                  <div>
                  <label for="psw"><b>Password</b></label>
                  <input type="password" id="email" placeholder="Enter Password" name="password" required minimum-length="6" pattern="^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=\S+$).{6,}$" title="form a strong password with atleast six characters">
                  </div>
                  <button type="submit" id="submit" class="btn">Login</button>
                  <p>Have no account? <a href="Adminsignup.php">Sign up</a></p>
                </div>
                  </center>
                </form>
                         
    </body>
</html>


