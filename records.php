<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">

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
            background-color: blue;
            color: white;
        }
        tr:nth-child(even) {
                background-color: #f1f1f1
        }        
    </style>

    <title>Document</title>
</head>
<body>	
<div class="container">
		<div class="upper_container">
			<!-- <img src="flowers.PNG" alt="flowers here"> -->
		</div>
		<div class="lower_container">
		<ul class="site_menu">
					<li><a href="index.html">Home</a></li>
					<li><a href="form.php">Registration</a></li>
					<li><a href="records.php">Records</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="#">FAQ</a></li>
		</ul>		
			<div class="left_container">
				<p>Navigation</p>
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="form.php">Registration</a></li>
					<li><a href="records.php">Records</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="#">FAQ</a></li>
				</ul>
			</div>
			<div class="right_container">
				<div class="heading">
					<h2>Afya Clinic Patient List</h2>
				</div>
				<div class="content">
                    <h2>Patients Appointments</h2>
                    <table>
                        <tr>
                            <th>Patient ID</th>
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Surname</th>
                            <th>Date of Birth</th>
                            <th>Gender</th>
                            <th>County</th>
                        </tr>
                        <?php
                            $sql = "SELECT `Patient_ID`, `First_Name`, `Middle_Name`, `Surname`, `Date_of_Birth`, `Gender`, `County` FROM `patients`;";
                            $result = $conn->query($sql);
                            $resultCheck = mysqli_num_rows($result);
                            if($resultCheck > 0){
                                while($row = mysqli_fetch_assoc($result)){
                                    echo "<tr><td>".$row['Patient_ID']."</td><td>".$row['First_Name']."</td>
                                            <td>".$row['Middle_Name']."</td><td>".$row['Surname']."</td>
                                            <td>".$row['Date_of_Birth']."</td><td>".$row['Gender']."</td>
                                            <td>".$row['County']."</td></tr>";
                                }
                                echo "</table>";
                            }else{
                                echo "0 results";
                            }
                        ?>
                    </table><br><br>

                    <h2>Next of Kin Table</h2>
                    <table>
                        <tr>
                            <th>Patient ID</th>
                            <th>First Name</th>
                            <th>Surname</th>
                            <th>Relationship</th>
                        </tr>
                        <?php
                            $sql2 = "SELECT `Patient_ID`, `First_Name`, `Surname`, `Relationship` FROM `next_of_kin`;";
                            $result2 = $conn->query($sql2);
                            $resultCheck2 = mysqli_num_rows($result2);
                            if($resultCheck > 0){
                                while($row = mysqli_fetch_assoc($result2)){
                                    echo "<tr><td>".$row['Patient_ID']."</td><td>".$row['First_Name']."</td>
                                            <td>".$row['Surname']."</td><td>".$row['Relationship']."</td>";
                                }
                                echo "</table>";
                            }else{
                                echo "0 results";
                            }
                            $conn -> close();
                        ?>
                    </table>
				</div>
			</div>
		</div>
	</div>

    <div class="footer">
		<center>
			<p><i>Copyright. Afya Clinic Assistant. All Rights Reserved 2021</i> | Reg. No: P15/137594/2019</p>			
			<p>Name: Mugo Patrick Ngururi</p>
		</center>

	</div>
</body>
</html>