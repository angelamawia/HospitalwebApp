<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dagersign</title>
</head>
<body><h2>Symptoms to watch out for after confirmed pregnant</h2>
    <?php
     echo"<ol>
     <li>Severe nausea and vomiting, dehydration, a persistent rapid heartbeat</li>
     <li>Vaginal spotting or bleeding</li>
     <li>Severe headache, or blurred vision</li>
     <li>Fever over 100 F and chills, backache, or blood in your urine</li>
     <li>After the baby begins to move, you feel less or no movement for more than 2 hours</li>
     <li>Freckles and moles on your body,that is growing,itching or bleeding</li>
 </ol>";
    $sympa = "Severe nausea and vomiting, dehydration, a persistent rapid heartbeat ";
    $sympb = "Vaginal spotting or bleeding";
    $sympc = "Severe headache, or blurred vision";
    $sympd = "Fever over 100 F and chills, backache, or blood in your urine";
    $sympe = "After the baby begins to move, you feel less or no movement for more than 2 hours";
    $sympf = "Freckles and moles on your body,that is growing,itching or bleeding";
    $symptom=

   $sympa = $sympb = $sympc = $sympd =$sympe = $sympf = "";
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $sympa = test_input($_POST["sympa"]);
      $sympb = test_input($_POST["sympb"]);
      $sympc = test_input($_POST["sympc"]);
      $sympd = test_input($_POST["sympd"]);
      $sympe = test_input($_POST["sympe"]);
      $sympd = test_input($_POST["sympf"]);
    
    
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
}
   ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
   <p>If you experience any of the above,enter any of the symptoms in the box and search</p> 
  Symptom: <input type="text" name="symptom"><br>
 
  <input type="button" name="$search" value="search">
  <br><br>
  <?php
       if (empty($_POST["sympa"])) {
       echo"Diagnosis is clinical: by measurement of ","
             urine ketones, serum electrolytes, and renal function ","
             Advice:see the doctor as soon as possible for these tests to be done.";
      } else {
        if($n == $sympa) {
            echo "Diagnosis is clinical: by measurement of ","
             urine ketones, serum electrolytes, and renal function ","
             Advice:see the doctor as soon as possible for these tests to be done.";
         } elseif($n == $sympb){
            echo "This could mean your having a miscarriage or ","
            serious placental complication ","
            Advice:Monitor Bleeding by wearing a pad","
            Prevent Further Bleeding by not inserting anything in the vagina","
            Get Help by calling a doctor";
         } elseif($n == $sympc){
            echo " This could indicate preeclampsia ","
            Advice:Get plenty of rest","
            Drink plenty of water","
            Take a warm bath to release muscle tension","
            Seek medical advice";
        }elseif($n == $sympd){
            echo "";
        }
    }

 ?>
</body>
</html>