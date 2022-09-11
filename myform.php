<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=>, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="myform.css">
</head>
<body>
  <div>
    <header>PREGNANCY REGISTRATION FORM</header>
     </div>
       <div id="container">
     <form action="register.py" method="post">
        <label>Patientid:</label>
        <input type="text" id="id" name="Patientid"><br>
        <label>First Name: </label>
        <input type="text" id="fname" name="fname"><br>
        <label>second Name: </label>
        <input type="text" id="sname" name="sname"><br> 
        <label>Phone: </label>
        <input type="number" id="Tel" name="phonenumber"><br>
        <label>Date:</label>
        <input type="date" id="date" name="lmpdate"><br> 
        <label>Location:</label>
        <input type="text" id="location" name="location"><br>
        <br><br>
        <input type="submit" value="Submit"/>
        <span> <input type="button" id="clear" value="Clear"></span>
        </form>
       </div>
    
</body>
</html> 

