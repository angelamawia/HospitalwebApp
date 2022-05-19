<!DOCTYPE html>
<html lang="en">
<head>
<title>Patient form</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="patientform.css">
</head>
<body>
    <?php
    // define variables and set to empty values
    $fname = $sname = $age = $date = $pregnancy = $allergy = $twins = $health = $alcohol = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $fname = test_input($_POST["fname"]);
      $sname = test_input($_POST["sname"]);
      $age = test_input($_POST["age"]);
      $date = test_input($_POST["date"]);
      $pregnancy = test_input($_POST["pregnancy"]);
      $allergy = test_input($_POST["allergy"]);
      $twins = test_input($_POST["twins"]);
      $health = test_input($_POST["health"]);
      $alcohol = test_input($_POST["alcohol"]);
      
    }
    
    function check_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    ?>
    <form action="patientformpost.php" method="post" class="container">-->
    <form method="post"class="container" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <h1>Please fill this form</h1>
    <label for="name">First name</label><br>
    <input type="text" placeholder="Enter your first name" name="fname" required><br>
    <label for="name">Second name</label><br>
    <input type="text" placeholder="Enter your second name" name="sname" required><br>
    <label for="age">Age:</label>
    <input type="number" id="age" placeholder="Enter your age" name="age" required><br>
    <label>Date of last menstrual period:</label>
    <input type="date" id="date" name="date" required><br>
    <label>This is your pregnancy number?:</label>
    <input type="number" id="number" placeholder="Indicate the number of previous pregnancies if any" name="pregnancy" required><br>
    <label>Any medical allergies:</label>
    <input type="text" id="allergy" placeholder="Enter any allergy you have" name="allergy" required><br>
    <label>Any history of twins in your family?:</label>
    <input type="text" id="twns" placeholder="specify if in your family there is twins history" name="twins" required><br>
    <label>Any health problems?:</label>
    <input type="text" id="health" placeholder="specify if your under any medication currently" name="health" required><br>
    <label>Do you smoke or drink alcohol?:</label>
    <input type="text" id="alcohol" placeholder="specify if you smoke or drink alcohol" name="alcohol" required><br>
   
    <button type="submit" id="submit" class="btn">Submit</button><span>
    <button type="close" class="btn"><a href="Ppage.html">Close</a> </button>
    </span>
</form>
<?php
echo "<h2>Your report:</h2>";
echo "<br>";
echo "<p>Name: ".$fname."</p>&nbsp";
echo $sname ;
//echo $sname ;
echo "<br>";
echo "<p> Age:" .$age. " years</p>";
echo "<br>";
echo "<p>Last MP: ".$date."</P>"; 
echo "<br>";
echo "<P>Previous pregnancies: ".$pregnancy."</p>";
echo "<br>";
echo  "<p>Medical Alergies: ".$allergy."</p>";
echo "<br>";
echo "<p>Twins history in the family: ".$twins."</p>";
echo "<br>";
echo  "<p>Current health problems: ".$twins."</p>" ;
echo "<br>";
echo "<p>Smoke or alcohol history: ".$health."</p>";
echo "<br>";

?>

</body>
</html>