<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/Dpage.css">
  <link rel="stylesheet" href="css/patientsearch.css">
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
            background-color:#f2f2f2;
            color:blue;
        }
        tr:nth-child(even) {
                background-color: #f3f3f3
        }   
    </style> </head>
           <body style="background-color:#f3f3f3";><header>
           
            
              <center><h1>DOCTOR'S  DASHBOARD</h1></center> <br>
             <h2>Pregnant Mothers' Records </h2> </header>
             <div class="container">
                 <form action="" method="POST">
                     <input type="text" name="id" placeholder="Enter your patient_id"/>
                     <input type="submit" name="search" value="SEARCH BY ID">
                    </form>
                    <table border ="1" cellspacing="0" cellpadding="2">
  <tr>
   
    <th>First Name</th>
    <th>Second Name</th>
    <th>Age</th>
    <th>Date</th>
    <th>Nextvisit</th>
    <th>Pregnancy</th>
    <th>Allergy </th>
    <th>Health </th>
    <th>Duedate </th>
  </tr><br>
<?php
$connection = mysqli_connect('localhost','root', '');
$db = mysqli_select_db($connection,'clinicdb');
   
if(isset($_POST['search']))
{
    $id = $_POST['id'];

    $query = "select * from patientd where patient_id='$id' ";
    $query_run = mysqli_query($connection,$query);

    while($row = mysqli_fetch_array($query_run))
    {
        ?>
          <tr>
              <td><?php echo $row['fname']; ?></td>
              <td><?php echo $row['sname']; ?></td>
              <td><?php echo $row['age']; ?></td>
              <td><?php echo $row['date']; ?></td>
              <td><?php echo $row['nextvisit']; ?></td>
              <td><?php echo $row['pregnancy']; ?></td>
              <td><?php echo $row['allergy']; ?></td>
              <td><?php echo $row['health']; ?></td>
              <td><?php echo $row['duedate']; ?></td>
          </tr>
        <?php
    }
}
?>
</table>
 