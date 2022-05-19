 
<?php session_start();
//include_once('databaseconnection.php');
//if(empty($_SESSION['id'])):
   // header('Location:Ppage.php');
//endif;
 
include_once("databaseconnection.php");
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> bookappoint</title>
 <link rel="stylesheet" href="css/Ppage.css">
 <link rel="stylesheet" href="css/appointform.css">
            </head>
           <body style="background-color:f3f3f3"><header>
           <h1><center>PATIENT'S DASHBOARD</center> </h1> </header> 
           
        <form action="doctorschedule.php" method="post" class="container">
         <h2>Book Appointment</h2>
         <label for="name">First name</label><br>
         <input type="text" placeholder="patient first name" name="fname" required><br>
         <label for="name">Second name</label><br>
         <input type="text" placeholder="patient second name" name="sname" required><br>
         <label for="date">Date:</label>
         <input type="date" id="date" placeholder="today date" name="adate" required><br>
         <label>Schedule date:</label>
         <input type="date" id="date" name="scheduleday" required><br>
         <label>Start time:</label>
         <input type="time" id="time" placeholder="time" name="starttime" required><br>
         <label>comment:</label>
         <input type="text"  id="name"  placeholder="comment" name="comment" required><br>
         <button type="submit" id="submit" class="btn">Submit</button><span>
         <button type="close" class="btn"><a href="Ppage.php">Close</a> </button>