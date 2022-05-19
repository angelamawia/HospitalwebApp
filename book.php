<?php session_start();
include('databaseconnection.php');
 
if (isset($_POST['submit'])) {

    if (isset($_POST['doctors']) && !empty($_POST['date']) && !empty($_POST['time']) && !empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['message'])) {
        $statement = $db->prepare('INSERT INTO appointments (doctor,app_date,app_time,patient_name,phone,msg) VALUES (doctors,adate,atime,aname,phonenumber,message)');

        $is_done = $statement->execute([
            'firstname' => $_POST['fname'],
            'lastname' => $_POST['sname'],
            'app_date' => $_POST['adate'],
            'patient_name' => $_POST['scheduleday'],
            'app_time' => $_POST['startttime'],
            'patient_name' => $_POST['scheduleday'],
            
        ]);

        if ($is_done) {
           
            echo "<script type='text/javascript'>alert('Your appointment is taken!');
            document.location='appointform.php'</script>";
        }
    } else {
        echo "<p class='error'>Please fill out all fields!</p>";
    }
}
?>