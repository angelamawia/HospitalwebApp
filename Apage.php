<?php
include_once("databaseconnection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
 <link rel="stylesheet" href="css/Apage.css">
            </head>
           <body>
            <header> 
             ADMINISTRATOR'S  DASHBOARD</header>
                <div class="left_container">
				<p>Navigation </p>
				<ul>
					<li><a href="display.php">Patients Records</a></li>
					<!--<li><a href="Addpatient.php">Add New Patients</a></li>
                   <li><a href="pregnantwosiup.php">Manage patient profile</a></li>
					<li><a href="Doctorsignup.php">Manage doctor profile</a></li>-->
                    <li><a href="appointments.php">View Appointments</a></li>
                    <li><a href="dsearch.php">Search Patient</a></li>
                    <li><a href="adminlogout.php">Logout</a></li>
				</ul> 
			</div> 
            <div class="container">
            <img id="center" src="images/doct.jpg">
            <P class="bottom-right"><h1>Visit us today</h1>
            <P>It's not just about treatment,is about profensional care for families</P>
            </div>
             <br><br>
            
            <div>
        <center>
			<p><i>Copyright. Pregnancy Monitoring System. All Rights Reserved 2022</i></p> <p> Reg. No: P15/139974/2020			
			<span>Name: Angela M. Charles`</p></span>
		</center>

    </div>
    </body>
</html>
   