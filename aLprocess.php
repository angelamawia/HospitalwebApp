 
<?php session_start();

 include('databaseconnection.php');
 

if(isset($_POST['adminlogin']));
{
    $user_unsafe=$_POST['email'];
    $pass_unsafe=$_POST['password'];

    $user = mysqli_real_escape_string($conn,$user_unsafe);
    $pass = mysqli_real_escape_string($conn,$pass_unsafe);

    $query=mysqli_query($conn,"select * from aregister where email='$user' and password='$pass'")or die(mysqli_error($conn));

    $row=mysqli_fetch_array($query);

         $name=$row['email'];
         $counter=mysqli_num_rows($query);
         $id=$row['id'];

         if ($counter == 0)
         {
            echo "<script type='text/javascript'>alert('Invalid email or Password!');
            document.location='adminlogin.php'</script>";
         }
         else
         {
            $_SESSION['id']=$id;
            $_SESSION['email']=$name;

            echo "<script type='text/javascript'>document.location='Apage.php'</script>";
         }
       }
      ?>
          