<?php
include_once("databaseconnection.php");
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Addpatient</title>
<link rel="stylesheet" href="css/patientform.css">
</head>
<body>
    
    <form action="patientformpost.php" method="post" class="container">
    <h2>Patient Registration Form</h2>
    <label for="name">First name</label><br>
    <input type="text" placeholder="Enter First name" name="fname" required><br>
    <label for="name">Second name</label><br>
    <input type="text" placeholder="Enter Second name" name="sname" required><br>
    <label for="age">Age:</label>
    <input type="number" id="age" placeholder="Enter your age" name="age" required><br>
    <label for="date">Date:</label>
    <input type="date" id="date" name="date" required><br>
    <label>Date of next visit:</label>
    <input type="date" id="date" name="nextvisit" required><br>
    <label>This is your pregnancy number?:</label>
    <input type="number" id="pregnancy" placeholder="Enter previous pregnancies if any" name="pregnancy" required><br>
    <label>Any medical allergies:</label>
    <input type="text" id="allergy" placeholder="Enter any allergy you have" name="allergy" required><br>
    <label>Any health problems?:</label>
    <input type="text" id="health" placeholder="specify if your under any medication currently" name="health" required><br>
    <label>Due date:</label>
    <input type="date" id="date" placeholder="Estimated due date" name="duedate" required><br>
    <button type="submit" id="submit" class="btn">Submit</button><span>
    <button type="close" class="btn"><a href="Apage.php">Close</a> </button>
    </span>
</form>
</body>
</html>