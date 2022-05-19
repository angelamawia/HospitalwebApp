<?php session_start();
if(empty($_SESSION['id'])):
    header('Location:mainpage.php');
endif;
?>
<!DOCTYPE html>
<html>
<body>
    <div style="width:150px;margin:auto;height:500px;margin-top:300px">

    <?php
     include('databaseconnection.php');
     session_destroy();

     echo '<meta http-equiv="refresh" content="2;url=mainpage.php">';
     echo '<progress max=100><strong>Progress: 60% done.</strong></progress><br>';
     echo '<span class="itext">Logging out please wait!...</span>';

    ?>
    </div>

</body>
</html>
          