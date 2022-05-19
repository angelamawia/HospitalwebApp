<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "testform-db";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$email=trim($_POST['email']);
$password=trim($_POST['apassword']);
//now insert the received values into database using defined variables
$sqli ="INSERT INTO womentb(email,apassword) VALUES ('$email','$password')";
if ($conn->query($sqli) === TRUE) {
    echo "account created successfully";
} else {
    echo "Error: " . $sqli . "<br>" . $conn->error;
}
$conn->close();

?>