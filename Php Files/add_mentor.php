<?php


session_start();
   if(isset($_SESSION['id'])) {
        $id=$_SESSION['id'];
        }
    
        include("header_admin.php");
   
    
   $conn = new mysqli($servername, $username, $password,"project");

// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
   
 if(isset($_POST['id'])!="")
    {
        $uiu_id=(isset($_POST['uiu_id'])? $_POST['uiu_id'] : '');
       // echo $uiu_id;
        $id=(isset($_POST['id'])? $_POST['id'] : '');
        $sql1 = ("INSERT INTO mentor_of (student_id ,mentor_id)
         VALUES ('$uiu_id', '$id')");
         $result1=$conn->query($sql1);
    }
    
  if(isset($_POST['id2'])!="")
    {
        $team_name=(isset($_POST['team_name'])? $_POST['team_name'] : '');
       // echo $uiu_id;
        $id2=(isset($_POST['id2'])? $_POST['id2'] : '');
        $sql2 = ("INSERT INTO coach_of (team_name ,coach_id)
         VALUES ('$team_name', '$id2')");
         $result2=$conn->query($sql2);
    }


   
   
     $query1="SELECT uiu_id FROM individual_info ";
      $result1 = $conn->query($query1);
       //$all_property1 = array(); 
           
      echo' 
      <hr>  
      <div style="width: 500px; margin: 100px auto 0 auto;">
  <div class="w3-panel w3-topbar w3-bottombar w3-border w3-border-teal w3-round">
     <br>
   <h2>Assign Mentor </h2>
  <br>
  <form action="" method="post">
        <h3>Select Contestant Id</h3>
        <select class="w3-border w3-border-grey w3-round-xlarge w3-padding" id="uiu_id" name="uiu_id">
        <option value="">Contestant Id</option>';
        while($row = $result1->fetch_assoc())
        {
           echo
            '<option value='.$row['uiu_id'].'>'.$row['uiu_id'].'</option>';
            
                 
        }
        echo  
   '</select> 
        <br>
     <br>
   ';
        $query2="SELECT id FROM faculty ";
      $result2= $conn->query($query2);
       //$all_property1 = array(); 
        echo 
        '<h3>Select Faculty Id</h3>
            <select class=" w3-border w3-border-grey w3-round-xlarge w3-padding" id="id" name="id">
        <option value="">ID</option>';
        while($row2 = $result2->fetch_assoc())
        {
           echo
            '<option value='.$row2['id'].'>'.$row2['id'].'</option>';
            
                 
        }
      
  echo  
   '</select> 
       <br>
       <br>
       <input class="w3-btn w3-green" type="submit" value="Submit">
       </form>
       </div>
       </div>
   ';
  
  $query3="SELECT team_name FROM team_info ";
      $result3 = $conn->query($query3);
      // $all_property1 = array(); 
  
  
     echo' 
       
      <div style="width: 500px; margin: 100px auto 0 auto;">
  <div class="w3-panel w3-topbar w3-bottombar w3-border w3-border-teal w3-round">
     <br>
   <h2>Assign Coach </h2>
  <br>
  <form action="" method="post">
        <h3>Select Team Name</h3>
        <select class="w3-border w3-border-grey w3-round-xlarge w3-padding" id="team_name" name="team_name">
        <option value="">Team Name</option>';
        while($row3 = $result3->fetch_assoc())
        {
           echo
            '<option value='.$row3['team_name'].'>'.$row3['team_name'].'</option>';
            
                 
        }
        echo  
   '</select> 
        <br>
     <br>
   ';
        $query4="SELECT id FROM faculty ";
      $result4= $conn->query($query4);
       //$all_property1 = array(); 
        echo 
        '<h3>Select Faculty Id</h3>
            <select class=" w3-border w3-border-grey w3-round-xlarge w3-padding" id="id2" name="id2">
        <option value="">ID</option>';
        while($row4 = $result4->fetch_assoc())
        {
           echo
            '<option value='.$row4['id'].'>'.$row4['id'].'</option>';
            
                 
        }
      
  echo  
   '</select> 
       <br>
       <br>
       <input class="w3-btn w3-green" type="submit" value="Submit">
       </form>
       </div>
       </div>
   ';
  
  $conn->close();
   
   ?>
 
