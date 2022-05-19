<?php session_start();
//include_once('databaseconnection.php');
//if(empty($_SESSION['id'])):
   // header('Location:Ppage.php');
//endif;
?>
<!DOCTYPE html>
<html>
    <head><title>bookappoint</title>
      <link rel="stylesheet"  href="css/bookappoint.css">
    </head>
    <body>
      <header><h2>Book Appointment</h2></header>
    <form action="book.php" method="post" class="bookappoint">
      <div> 
         <label>Doctor:</label><br>
         <input type="text" name="doctors" /><br>
       </div>
       <div> 
         <label>Appointment date:</label><br>
         <input type="date" name="adate"  /><br>
       </div>
       <div> 
         <label>Appointment time:</label><br>
         <input type="time" name="atime"  /><br>
       </div>
       <div> 
         <label> Patient Name:</label><br>
         <input type="text" name="aname"  /><br>
       </div>
       <div> 
         <label>Phone Number:</label><br>
         <input type="number" name="phonenumber"  /><br>
       </div>
      <div>
      <label>Message: </label><br>
      <textarea name="message" rows="5" cols="40"></textarea><br>
     </div><br>
     <div>
       <button type="submit" name="submit">Book Now</button>
      </div>
   
    </body>
</html>