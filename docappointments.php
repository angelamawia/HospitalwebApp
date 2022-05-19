<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/Dpage.css">
  <style>
        table {
	        margin-left:auto;
            margin-right:auto;
            border-collapse: collapse;
            width: 100%;
            color: black;
            text-align: center;
            font-size: 20px;
        }
        th {
            background-color:#f2f2f2;;
            color:blue;
        }
        tr:nth-child(even) {
                background-color: #f3f3f3
        }   
    </style> </head>
           <body><header>
            
              <h1>DOCTOR'S  DASHBOARD</h1> <br>
             <h2>All Appointments </h2> </header>
<?php
 include_once("databaseconnection.php");
$mysqli = new mysqli($servername, $username, $password, $dbname); 
 
$query = "SELECT * FROM appointments";

echo'<table border ="1" cellspacing="0" cellpadding="2">
  <tr>
    <th>ID </th>
    <th>First Name</th>
    <th>Second Name</th>
    <th>Date</th>
    <th>Time of Appointment</th>
    <th>Is About</th>
    
  </tr>';
  if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $id=$row["id"];
        $fname = $row["fname"];
        $sname = $row["sname"];
        $adate = $row["adate"];
        $starttime = $row["starttime"]; 
        $comment = $row["comment"];
    echo '<tr> 
        <td>'.$id.'</td>
        <td>'.$fname.'</td> 
        <td>'.$sname.'</td> 
        <td>'.$adate.'</td> 
        <td>'.$starttime.'</td> 
        <td>'.$comment.'</td> 
    </tr>';
  }
  $result->free();
}
?>   
</span>
</body>
</html>
  
