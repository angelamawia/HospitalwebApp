<?php   
$fname=$_POST['fname'];
$sname=$_POST['sname'];
$gender=$_POST['gender'];
$date=$_POST['date'];
$email=$_POST['email'];
$password=$_POST['password'];
//connecting to database

$conn= new mysqli ('localhost', 'root', '', 'clinicdb');
//Check server connection
if ($conn->connect_error){
	die ('connection failed'.$conn->connect_error);
}else {
    $sql =$conn->prepare("insert into Dregister(fname, sname, gender, date, email, password) values(?, ?, ?, ?, ?, ?)");
    $sql->bind_param("ssssss",$fname, $sname, $gender, $date, $email, $password);
    $sql->execute();
    echo"Registration successful";
    $sql->close();
    $conn->close();
}
?>