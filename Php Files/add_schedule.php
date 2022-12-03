<?php
session_start();
echo'<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>';

 include("header_admin.php");
  $servername = "127.0.0.1";
$username = "root";
$password = "";
$value;
// Create connection
$conn = new mysqli($servername, $username, $password,"project");

// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['link'])!="")
{
    $link=(isset($_POST['link'])? $_POST['link'] : '');
    //echo $link;
    $date=(isset($_POST['date'])? $_POST['date'] : '');
    $time=(isset($_POST['time'])? $_POST['time'] : '');
    $name=(isset($_POST['name'])? $_POST['name'] : '');
     $sql = "INSERT INTO schedule (weblink, date, time,name)
    VALUES ('$link', '$date','$time','$name')";
      $result=$conn->query($sql);
     
}


echo
'<div class="w3-container">
 <h2>Add Contest Schedule</h2>  
     <form action="" method="post">
        <div class="w3-section">
          <label><b>Contest Weblink</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" style="width:30%" placeholder="Enter contest name" name="link" required>
          <label><b>Date</b></label>
          <input  type="text" class="w3-input w3-border datepicker" id="date"  style="width:30%" placeholder="Enter Date" name="date"  required>
          <label><b>Time</b></label>  
         <input class="w3-input w3-border w3-margin-bottom" type="text" style="width:30%" placeholder="Enter Time" name="time" required>
         <label><b>Contest Name</b></label>  
         <input class="w3-input w3-border w3-margin-bottom" type="text" style="width:30%" placeholder="Enter Name" name="name" >
         <br>
         <div class="w3-left">
                
          <input class="w3-btn w3-green" type="submit" value="Submit">
          
          </div>
          <br>
          <br>
</div>';
$conn->close();
?>

<script>
    
 $(function() {
     $(".datepicker").datepicker({dateFormat:'yy-mm-dd'});
   });
  
  </script>