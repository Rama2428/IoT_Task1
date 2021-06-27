<?php
if(isset($_POST['SAVE']))
{   include 'data1.php';
    $M1= $_POST['M1'];
    $M2= $_POST['M2'];
    $M3= $_POST['M3'];
    $M4= $_POST['M4'];
    $M5= $_POST['M5'];
    $M6= $_POST['M6'];
    $query= "INSERT INTO motors (motor1, motor2, motor3, motor4, motor5, motor6) VALUES ($M1, $M2, $M3, $M4, $M5, $M6)";
    $res= mysqli_query($con, $query);

      if(!$query)
      {
          echo mysqli_error();
      }
      else
      {
          echo "added successfully.";
      }
  }
  
    if(isset($_POST['on1'])){
        include 'data1.php';
        $query= "INSERT INTO motors (on1) VALUES ('1')";
        $res= mysqli_query($con, $query);

    }
?>
<DOCTYBE html>
<html>
    <head>
        <link rel="stylesheet" href="style1.css">
    </head>
<body>
    <form method="POST" action="motor.php">
    
            <input type="range" min="0" max="100" name="M1">
            <label>Motor 1</label><br>
        
        
            <input type="range" min="0" max="100" name="M2">
            <label>Motor 2</label><br> 
        
            <input type="range" min="0" max="100" name="M3">
            <label>Motor 3</label><br>
        
            <input type="range" min="0" max="100" name="M4">
            <label>Motor 4</label><br>
       
            <input type="range" min="0" max="100" name="M5">
            <label>Motor 5</label><br>
        
            <input type="range" min="0" max="100" name="M6">
            <label>Motor 6</label><br>

            <input type="submit" value= "SAVE" name="SAVE" class="buttons">
            <input type="submit" value= "ON" name="on1" class="buttons">  
    
    </form>
</body>
</html>
</DOCTYBE>