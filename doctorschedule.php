<?php   
$fname=$_POST['fname'];
$sname=$_POST['sname'];
$adate=$_POST['adate'];
$scheduleday=$_POST['scheduleday'];
$starttime=$_POST['starttime'];
$comment=$_POST['comment'];
//connecting to database

$conn= new mysqli ('localhost', 'root', '', 'clinicdb');
//Check server connection
if ($conn->connect_error){
	die ('connection failed'.$conn->connect_error);
}else {
    $sql =$conn->prepare("insert into appointments(fname, sname, adate, scheduleday, starttime, comment) values(?, ?, ?, ?, ?, ?)");
    $sql->bind_param("ssssss",$fname, $sname, $adate, $scheduleday, $starttime, $comment);
    $sql->execute();
    echo"Your appointment is taken!";
    $sql->close();
    $conn->close();
}
?>