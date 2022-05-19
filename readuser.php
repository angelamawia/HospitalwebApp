<!DOCTYPE html>
<html>
<head>
<title>Read Data From Database Using PHP - Demo Preview</title>
<meta content="noindex, nofollow" name="robots">
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="maindiv">
<div class="divA">
<div class="title">
<h2>Search user</h2>
</div>
<div class="divB">
<div class="divD">
<p>Click On Menu</p>
<?php
include("databaseconnection.php");
//$db = mysql_select_db("clinicdb", $conn); // Selecting Database
//MySQL Query to read data
$query = mysql_query("select * from testtb", $conn);
while ($row = mysql_fetch_array($query)) {
echo $id=$row["patient_id"];
$fname = $row["fname"];
$visit = $row["visit"];
$Bloodpressure = $row["Bloodpressure"];
$Bsugar = $row["Bsugar"];
$BTemp = $row["BTemp"]; 
$Foetalheartrate= $row["Foetalheartrate"];
$prescription = $row["prescription"];
}
?>
</div>
<?php
if (isset($_GET['id'])) {
$id = $_GET['id'];
$query1 = mysql_query("select * from testtb where patient_id=$id", $conn);
while ($row1 = mysql_fetch_array($query1)) {
?>
<div class="form">
<h2>---Your Results ---</h2>
 
<span>Name:</span> <?php echo $row1['fname']; ?>
<span>Visit:</span> <?php echo $row1['visit']; ?>
<span>Blood pressure:</span> <?php echo $row1['Bloodpressure']; ?>
<span>Blood sugar:</span> <?php echo $row1['Bsugar']; ?>
<span>Body Temperature:</span> <?php echo $row1['BTemp']; ?>
<span>Foetal heart rate status:</span> <?php echo $row1['Foetalheartrate']; ?>
<span>Doctor Prescription:</span> <?php echo $row1['prescription']; ?>

</div>
<?php
}
}
?>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div>
<?php
mysql_close($conn); // Closing Connection with Server
?>
</body>
</html>