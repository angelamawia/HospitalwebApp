<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/contact.css"> 
</head>
<body>

<h1><center>Your health matters to us:</center></h1>
<p>Anytime you need us, we are here for you, send contact us! </p>
<div class="container">
<div style="text-align:center">
    
  </div>
  <div class="row">
    <div class="column">
      <img src="images/doct.jpg" style="width:100%">
    </div>
    <div class="column">
      <form action="postcontactus.php" method="POST">
        <label for="firstname">First Name:</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name">
        <label for="lastname">Last Name:</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name">
        <label for="date">Date:</label>
        <input type="date" id="date" name="adate" placeholder="Today date "><br>
        <label for="subject">Subject:</label>
        <textarea id="subject" name="subject" placeholder="what is the emergency.." style="height:100px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>
</body>
</html>
