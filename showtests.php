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
            background-color:#f3f3f3;
        }
        th {
            background-color:f3f3f3;
            color:blue;
        }
        tr:nth-child(even) {
                background-color: #f2f2f2
        }   
    </style> </head>
           <body style="background-color:#f3f3f3";><header>
            <h1>DOCTOR'S  DASHBOARD</h1> <br>
             <h2>Pregnancy Tests Results Records </h2> </header>
<?php
 include_once("databaseconnection.php");
$mysqli = new mysqli($servername, $username, $password, $dbname); 
 
$query = "SELECT * FROM testtb";

echo'<table border ="1" cellspacing="0" cellpadding="2">
  <tr>
    <th>ID </th>
    <th>Full Name</th>
    <th>Visit</th>
    <th>Blood pressure</th>
    <th>Blood sugar</th>
    <th>Body Temparature</th>
    <th>Foetal heart</th>
    <th>Doctor prescription</th>
    
  </tr>';
  if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $id=$row["patient_id"];
        $fname = $row["fname"];
        $visit = $row["visit"];
        $Bloodpressure = $row["Bloodpressure"];
        $Bsugar = $row["Bsugar"];
        $BTemp = $row["BTemp"]; 
        $Foetalheartrate= $row["Foetalheartrate"];
        $prescription = $row["prescription"];
         
    echo '<tr> 
        <td>'.$id.'</td>
        <td>'.$fname.'</td> 
        <td>'.$visit.'</td> 
        <td>'.$Bloodpressure.'</td> 
        <td>'.$Bsugar.'</td> 
        <td>'.$BTemp.'</td> 
        <td>'.$Foetalheartrate.'</td> 
        <td>'.$prescription.'</td> 
      </tr>';
  }
  $result->free();
}

?>   
  

</span>
</body>
</html>
  