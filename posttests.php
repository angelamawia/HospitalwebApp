<?php 
$fname=$_POST['fname'];
$visit=$_POST['visit'];
$Bloodpressure=$_POST['Bloodpressure'];
$Bsugar=$_POST['Bsugar'];
$BTemp=$_POST['BTemp'];
$Foetalheartrate=$_POST['Foetalheartrate'];
$prescription=$_POST['prescription']; 


//connecting to database
$conn = new mysqli ('localhost', 'root', '', 'clinicdb');
//Check server connection
if ($conn->connect_error){
	die ('connection failed'.$conn->connect_error);
}else {
    $sql =$conn->prepare("insert into testtb(fname, visit, Bloodpressure, Bsugar, BTemp, Foetalheartrate, prescription) values(?, ?, ?, ?, ?, ?, ?)");
    $sql->bind_param("sssssss",$fname, $visit, $Bloodpressure, $Bsugar, $BTemp, $Foetalheartrate, $prescription);
    $sql->execute();
    echo "Registration successful ","  <span><a href='Dpage.php'>Back</a></span>";
    $sql->close();
    $conn->close();
}
?>