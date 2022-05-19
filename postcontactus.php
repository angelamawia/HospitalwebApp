<?php   
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$adate=$_POST['adate'];
$subject=$_POST['subject'];

//connecting to database

$conn= new mysqli ('localhost', 'root', '', 'clinicdb');
//Check server connection
if ($conn->connect_error){
	die ('connection failed'.$conn->connect_error);
}else {
    $sql =$conn->prepare("insert into contacttb (firstname, lastname, adate, subject) values(?, ?, ?, ?)");
    $sql->bind_param("ssss",$firstname, $lastname, $adate, $subject);
    $sql->execute();
    echo"<p style='color:blue';>Thank you for contacting Medicare Antinatal care we will get back to you shortely!</p>";
    $sql->close();
    $conn->close();
}
?>



