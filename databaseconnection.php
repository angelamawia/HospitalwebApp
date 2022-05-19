<?php
 $servername='localhost';
 $username='root';
 $password='';
 $dbname = 'clinicdb';
 $conn = mysqli_connect('localhost','root','','clinicdb');

 if(!$conn){
    die('Could not Connect MySql Server:' .mysqli_error());
   }
    ?>