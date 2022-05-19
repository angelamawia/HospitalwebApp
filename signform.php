<?php
include_once("databaseconnection.php");
?>

<!DOCTYPE html>
<html>

   <head>
      <title> signform</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/patientform.css">
   </head>
	
   <body>
      <form action=".php" method="post" class="container">
         <h2>First Trimister Tests form</h2>
         <label for="name">First name</label><br>
         <input type="text" placeholder="patient first name" name="fname" required><br>
         <label for="name">Second name</label><br>
         <input type="text" placeholder="patient second name" name="sname" required><br>
         <label for="text">Fetal Heart Rate:</label>
         <input type="number" id="rate" placeholder="fetal heart rate" name="rate" required><br>
         <label>Urine Tests:</label>
         <input type="text" id="urine" name="urine" required><br>
         <label>Blood pressure:</label>
         <input type="number" id="number" placeholder="Blood pressure" name="Bp" required><br>
         <!--<label>Any medical allergies:</label>
         <input type="text" id="allergy" placeholder="Enter any allergy you have" name="allergy" required><br>
         <label>Any history of twins in your family?:</label>
         <input type="text" id="twns" placeholder="specify if in your family there is twins history" name="twins" required><br>
         <label>Any health problems?:</label>
         <input type="text" id="health" placeholder="specify if your under any medication currently" name="health" required><br>
         <label>Do you smoke or drink alcohol?:</label>
         <input type="text" id="alcohol" placeholder="specify if you smoke or drink alcohol" name="alcohol" required><br>-->
         <button type="submit" id="submit" class="btn">Submit</button><span>
         <button type="close" class="btn"><a href="Ppage.php">Close</a> </button>
         </span>
     </form>
      <form class="container">
         Date : <input type = "date" name = "date" /><br>
         Time: <input type = "time" name = "time" /><br>
         Details:<br />
         <textarea rows = "5" cols = "50" name = "details">
        Details...
         </textarea>
      </form>
   </body>
	
</html>