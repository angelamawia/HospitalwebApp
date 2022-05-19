<?php session_start();
 include_once ("databaseconnection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Page</title>
 <link rel="stylesheet" href="css/Dpage.css">
            </head>
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
            background-color:powderblue;
            color:white;
        }
        tr:nth-child(even) {
                background-color: #f1f1f1
        }        
    </style>
           <body><header><h2>Patients Records </h2> </header> 
           
            <div class="content">
                    
                    <table>
                        <tr>
                            <th>Patient ID</th>
                            <th>First Name</th>
                            <th>Second Name</th>
                            <th>Age</th>
                            <th>Date</th>
                            <th>next_visit</th>
                            <th>pregnancy</th>
                            <th>allergy</th>
                            <th>health</th>
                            <th>due_date </th>
                             
                        </tr>
                        <?php
                            $sql = "SELECT 'patient_id', 'fname', 'sname', 'age', 'date', 'nextvisit', 'pregnancy','allergy','health','duedate' FROM 'patientd';";
                            $result = $conn->query($sql);
                            $resultCheck = mysqli_num_rows($result);
                            if($resultCheck > 0){
                                while($row = mysqli_fetch_assoc($result)){
                                    echo "<tr><td>".$row['patientid']."</td><td>".$row['fname']."</td>
                                            <td>".$row['sname']."</td><td>".$row['age']."</td>
                                            <td>".$row['date']."</td><td>".$row['nextvisit']."</td>
                                            <td>".$row['pregnancy']."</td><td>".$row['allergy']."</td>
                                            <td>".$row['health']."</td><td>".$row['duedate']."</td>
                                            </tr>";
                                }
                                echo "</table>";
                                }
                                else{
                                 echo "0 results";
                              }
                         ?>