<?php
session_start();
   
    if(isset($_SESSION['id'])) {
        $id=$_SESSION['id'];
        }
    if($id=='admin')
    {
        include("header_admin.php");
    }
    else
    {
        include("header.php");
    }
    
  
   
   $servername = "127.0.0.1";
   $username = "root";
   $password = "";
    $value;
// Create connection
$conn = new mysqli($servername, $username, $password,"project");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
   $query= "SELECT * From schedule WHERE date>= CURDATE() ORDER BY date  limit 1  ";
   $result = $conn->query($query);
  // session_start();
 echo
'<hr>
<br>
<br>

<div class="w3-card-4" style="width:50%">

<header class="w3-container w3-teal">
  <h3>Upcoming Contest </h3>
</header>

<div class="w3-container">
 <p>Contest details</p>';
 
 
 
$row = $result->fetch_assoc(); 
 echo
  "<p>Weblink::<a href='{$row["weblink"]}'>".$row["weblink"]."</a></p>
    <p>Date::".$row["date"]."</p>
      <p>Time::".$row["time"]."</p>";

         
 echo
 ' <hr>
  
 
</div>


<a href="schedule.php" class="w3-button w3-block w3-dark-grey">+ all contest schedule</a>

</div>
<br>
<div class="w3-card-4" style="width:50%">

<header class="w3-container w3-teal">
  <h3>IMPORTANT NEWS </h3>
</header>

<div class="w3-container">
  <p>NEWS</p>
  <hr>
  
  <p>NEWS DEATILS</p>
</div>

<button class="w3-button w3-block w3-dark-grey">+All News</button>

</div>
<br>
<br>';
 $conn->close();
 ?>
   


<!-- Footer -->


