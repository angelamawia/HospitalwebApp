<?php
include_once("databaseconnection.php");
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
           <body style="background-color:powderblue";> 
            <header> 
            <div><p><li><a href="mainpage.php">HOME</a></li></p></div>
              <h2>DOCTOR'S  DASHBOARD</h2></header>
                <div class="left_container">
				<p>Navigation </p>
				<ul>
 					<li><a href="testsform.php">Add Tests Results</a></li>
					<li><a href="showtests.php">View Tests Done</a></li>
                    <li><a href="docappointments.php">Appointments</a></li>
					<li><a href="doctorpatients.php">View Patients</a></li>
                    <li><a href="psearch.php">Search Patient</a><li>
                    <li><a href="Dlogout.php">logout</a></li>
				</ul>
			</div> 
           <img id= "center" src="images/care.jpg">
            <h2 style="color:blue;" text-family="Arial";>Welcome to Medicare where 
            the health of every pregnant mother matters the most</h2>
            <div>
        <center>
			<p><i>Copyright. Pregnancy Monitoring System. All Rights Reserved 2022</i></p> <p> Reg. No: P15/139974/2020			
			<span>Name: Charles Angela Mawia</p></span>
		</center>

    </div>
    </body>
</html>
   