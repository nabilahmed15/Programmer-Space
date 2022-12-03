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
   $conn = new mysqli($servername, $username, $password,"project");

// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
   
   if(isset($_SESSION['key'])) {
        $key=$_SESSION['key'];
        } 
        //individual
      $query= " SELECT * FROM individual_info WHERE (individual_info.name LIKE '%".$key."%' OR individual_info.uiu_id LIKE '%".$key."%')";
      $result = $conn->query($query);
      $all_property = array(); 
      
      echo' <div class="w3-container">
  <p>';
  if($result->num_rows>0){
    
    
    while($property = mysqli_fetch_field($result))
    {
        //echo'<h3 class="w3-border w3-border-grey w3-round-xlarge w3-padding ">' .$property->name.'</h3>'; //for attribute name
        array_push($all_property, $property->name);
        
    } 
  }
  while ($row = mysqli_fetch_array($result)) {
    echo'<div class="w3-border w3-border-grey w3-round-xlarge w3-padding ">';
    foreach ($all_property as $item) {
        echo '<h3>' . $row[$item] . '</h3>'; //get items using property value
    }
  echo'</div><br>';
}
  
  echo'
  </p>

</div>';
  //team
      $query1="SELECT * FROM team_info WHERE (team_info.team_name LIKE '%".$key."%')";
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
  //schedule
  $query3="SELECT * FROM schedule WHERE (schedule.weblink LIKE '%".$key."%')";
      $result3 = $conn->query($query3);
       $all_property3 = array(); 
           
      echo' <div class="w3-container">
  <p>';
  if($result3->num_rows>0){
    
    
    while($property3 = mysqli_fetch_field($result3))
    {
       // echo'<h3 class="w3-border w3-border-grey w3-round-xlarge w3-padding ">' .$property2->name.'</h3>'; //for attribute name
        array_push($all_property3, $property3->name);
        
    } 
  }
  while ($row3= mysqli_fetch_array($result3)) {
    echo'<div class="w3-border w3-border-grey w3-round-xlarge w3-padding ">';
    foreach ($all_property3 as $item) {
        echo '<h3>' . $row3[$item] . '</h3>'; //get items using property value
    }
  echo'</div><br>';
}
  
  echo'
  </p>

</div>';
 //mentor
    $query4="SELECT * FROM faculty WHERE (faculty.name LIKE '%".$key."%'  )";
      $result4 = $conn->query($query4);
       $all_property4 = array(); 
           
      echo' <div class="w3-container">
  <p>';
  if($result4->num_rows>0){
    
    
    while($property4 = mysqli_fetch_field($result4))
    {
       // echo'<h3 class="w3-border w3-border-grey w3-round-xlarge w3-padding ">' .$property2->name.'</h3>'; //for attribute name
        array_push($all_property4, $property4->name);
        
    } 
  }
  while ($row4= mysqli_fetch_array($result4)) {
    echo'<div class="w3-border w3-border-grey w3-round-xlarge w3-padding ">';
    foreach ($all_property4 as $item) {
        echo '<h3>' . $row4[$item] . '</h3>'; //get items using property value
    }
  echo'</div><br>';
}
  
  echo'
  </p>

</div>';
  
      
   $conn->close();
 ?>

