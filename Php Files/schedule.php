<?php
session_start();
echo'<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>';
   
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

// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$from='2016-01-17';
$to='2018-01-17';

if(isset($_POST['from'])!="")
 { 
     $from = (isset($_POST['from']) ? $_POST['from'] : '');
     
     $to = (isset($_POST['to']) ? $_POST['to'] : '');
     
     //query
 }


echo'<br><br><div class="w3-padding">
    <form action="" method="post">
<p>From:<input type="text" class="datepicker" id="from" name="from">
To:<input type="text" class="datepicker" id="to" name="to">
<input type="submit" value="Submit" id ="submit"></p></form></div>';

$query= "SELECT * From schedule WHERE date BETWEEN '$from' AND '$to'";
            

$all_property=array();

$result = $conn->query($query);
if($result->num_rows>0){
 
 echo  
'<div class="w3-container">
  <h2>Contest schedule</h2>
  

  <table class="w3-table-all">
    <thead>
      <tr class="w3-teal">
        <th>WEB LINK</th>
        <th>CONTEST NAME</th>
        <th>DATE</th>
        <th>TIME</th>
         </tr>
    </thead>';
 while($row = $result->fetch_assoc())
{
   
   echo 
   "<tr>
      <td><a href='{$row["weblink"]}'>".$row["weblink"]."</a></td>
      <td>".$row["name"]."</td>
      <td>".$row["date"]."</td>
      <td>".$row["time"]."</td>
    </tr>"
   ;
 

}

echo

  '</table>';

if($id=='admin')  {
 echo
'<a href="add_schedule.php" class="w3-button w3-block w3-dark-grey">+ Add contest schedule</a>';
}
else
{
echo
'</div>';
}
}
else
{
    echo "No Result Found";
}
$conn->close();

 ?>

<script>
    
 $(function() {
     $(".datepicker").datepicker({dateFormat:'yy-mm-dd'});
   });
  
  </script>

