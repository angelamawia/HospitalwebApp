<!DOCTYPE html>
<html>
<head>
<?php
include_once("databaseconnection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
 <link rel="stylesheet" href="css/Dpage.css">
 <link rel="stylesheet" href="css/testsform.css">
            </head>
           <body><header>
            
            <h2>DOCTOR'S DASHBOARD </h2> </header> 
           
        <form action="posttests.php" method="post" class="container">
         <h2>Pregnancy Tests Form</h2>
         <label for="name">First Name</label><br>
         <input type="text" placeholder="patient first name" name="fname" required><br>
         <label for="name">Visit</label><br>
         <input type="number" id="number" placeholder="Visit week" name="visit" required><br>
         <label for="number">Blood pressure:</label>
         <input type="float" id="float" placeholder="BP" name="Bloodpressure" required><br>
         <label>Blood sugar:</label>
         <input type="number" id="date" name="Bsugar" required><br>
         <label>Body Temparature:</label>
         <input type="number" id="number" placeholder="Body temparature" name="BTemp" required><br>
         <label>Foetal heart rate:</label>
         <input type="text"  id="text"  placeholder="Foetal heart status" name="Foetalheartrate" required><br>
         <label>Description:</label>
         <input type="text"  id="text"  placeholder="Doctor's prescription" name="prescription" required><br>
         <button type="submit" id="submit" class="btn">Submit</button><span>
         <button type="close" class="btn"><a href="Dpage.php">Close</a> </button>