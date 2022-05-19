<?php 
$fname=$_POST['fname'];
$sname=$_POST['sname'];
$age=$_POST['age'];
$date=$_POST['date'];
$nextvisit=$_POST['nextvisit'];
$pregnancy=$_POST['pregnancy'];
$allergy=$_POST['allergy']; 
$health=$_POST['health'];
$duedate=$_POST['duedate'];

//connecting to database
$conn = new mysqli ('localhost', 'root', '', 'clinicdb');
//Check server connection
if ($conn->connect_error){
	die ('connection failed'.$conn->connect_error);
}else {
    $sql =$conn->prepare("insert into patientd(fname, sname, age, date, nextvisit, pregnancy, allergy, health, duedate) values(?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $sql->bind_param("sssssssss",$fname, $sname, $age, $date, $nextvisit, $pregnancy, $allergy, $health, $duedate);
    $sql->execute();
    echo "Registration successful ","  <span><a href='Apage.php'>Back</a></span>";
    $sql->close();
    $conn->close();
}
?>
 
