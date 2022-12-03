<?php


session_start();
   if(isset($_SESSION['id'])) {
        $id=$_SESSION['id'];
        }
    if($id=='admin')
    {
        include("header_admin.php");
         echo
   '<a href="add_mentor.php" class="w3-right w3-teal w3-bar-item w3-button w3-round-xxlarge w3-padding-16">Assign Mentor Or Coach</a>';
 
    }
    else
    {
        include("header.php");
    }
   $conn = new mysqli($servername, $username, $password,"project");

// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
   
  
     $query1="SELECT name,designation,mail FROM faculty order by name ";
      $result1 = $conn->query($query1);
       $all_property1 = array(); 
           
      echo' <div class="w3-container">
  <p>';
  if($result1->num_rows>0){
    
    
    while($property1 = mysqli_fetch_field($result1))
    {
        //echo'<h3 class="w3-border w3-border-grey w3-round-xlarge w3-padding ">' .$property->name.'</h3>'; //for attribute name
        array_push($all_property1, $property1->name);
        
    } 
  }
  while ($row1= mysqli_fetch_array($result1)) {
    echo'<div class="w3-border w3-border-grey w3-round-xlarge w3-padding ">';
    foreach ($all_property1 as $item) {
        echo '<h3>' . $row1[$item] . '</h3>'; //get items using property value
    }
  echo'</div><br>';
}
  
  echo'
  </p>

</div>';
  $conn->close();
   
   ?>
 
