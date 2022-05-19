<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/Ppage.css">
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
           
            
              <center><h1>Pregnancy Tests Results</h1></center> 
             <!--<h2>Pregnant Mothers' Tests Results </h2> -->
            </header>
             <div class="container">
                 <form action="" method="POST">
                     <input type="text" name="id" placeholder="Enter your patient_id"/>
                     <input type="submit" name="search" value="SEARCH BY ID">
                    </form>
                    <table border ="1" cellspacing="0" cellpadding="2">
  <tr>
   
    <th>First Name</th>
    <th>Visit</th>
    <th>Blood Pressure</th>
    <th>Blood Sugar</th>
    <th>Body Temperature</th>
    <th>Foetal heart rate</th>
    <th>Prescription </th>
  </tr><br>
<?php
$connection = mysqli_connect('localhost','root', '');
$db = mysqli_select_db($connection,'clinicdb');
   
if(isset($_POST['search']))
{
    $id = $_POST['id'];

    $query = "select * from testtb where patient_id='$id' ";
    $query_run = mysqli_query($connection,$query);

    while($row = mysqli_fetch_array($query_run))
    {
        ?>
          <tr>
              <td><?php echo $row['fname']; ?></td>
              <td><?php echo $row['visit']; ?></td>
              <td><?php echo $row['Bloodpressure']; ?></td>
              <td><?php echo $row['Bsugar']; ?></td>
              <td><?php echo $row['BTemp']; ?></td>
              <td><?php echo $row['Foetalheartrate']; ?></td>
              <td><?php echo $row['prescription']; ?></td>
          </tr>
        <?php
    }
}
?>
</table>
 