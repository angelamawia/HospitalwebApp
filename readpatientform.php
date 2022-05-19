<!DOCTYPE html>
<html>
<head>
<title>Read Data</title>
<!--<meta content="noindex, nofollow" name="robots">-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
 
<h2>Read Patient Health Details</h2>
 <?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("clinicdb", $connection); // Selecting Database
//MySQL Query to read data
$query = mysql_query("select * from patientd", $connection);
while ($row = mysql_fetch_array($query)) {
echo "<b><a href="readpatientform.php;id={$row['patientid']}">{$row['fname']}</a></b>";
echo "<br>";
}
?>
</div>
<?php
if (isset($_GET['id'])) {
$id = $_GET['id'];
$query1 = mysql_query("select * from patientd where patientid=$id", $connection);
while ($row1 = mysql_fetch_array($query1)) {
?>
<div class="form">
<h2>---Details---</h2>
<!-- Displaying Data Read From Database -->
<span>First name:</span> <?php echo $row1['fname']; ?>
<span>Age:</span> <?php echo $row1['age']; ?>
<span>Date of last mentral period:</span> <?php echo $row1['date']; ?>
<span>Previours pregnancies:</span> <?php echo $row1['pregnancy']; ?>
<span>Allergy:</span> <?php echo $row1['allergy']; ?>
<span>Twins:</span> <?php echo $row1['twins']; ?>
<span>Health problem:</span> <?php echo $row1['health']; ?>
<span>Smoke or alcohol:</span> <?php echo $row1['alcohol']; ?>
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
mysql_close($connection); // Closing Connection with Server
?>
</body>
</html>