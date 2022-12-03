<?php
   session_start();
   echo'<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  ';
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
//echo $from;
//echo $to;
if(isset($_POST['from'])!="")
 { 
     $from = (isset($_POST['from']) ? $_POST['from'] : '');
     
     $to = (isset($_POST['to']) ? $_POST['to'] : '');
     //echo $from;
     //echo $to;
     //query
 }


echo'<br><br><div class="w3-padding">
    <form action="" method="post">
<p>From:<input type="text" class="datepicker" id="from" name="from">
To:<input type="text" class="datepicker" id="to" name="to">
<input type="submit" value="Submit" id ="submit"></p></form></div>';



$sql = ("SELECT  user_id,SUM(onsite_individual.rating),AVG(onsite_individual.rating),count(user_id),contest_id,rating FROM onsite_individual  
	WHERE (
	onsite_individual.date BETWEEN '$from' AND '$to'
	)
	
    GROUP BY onsite_individual.user_id
    Order By SUM(onsite_individual.rating) DESC;");
$sql1=("Select contest_id from onsite_individual WHERE (
	onsite_individual.date BETWEEN '$from' AND '$to'
	) group by contest_id");
$sql2=("Select contest_id,rating,user_id from onsite_individual WHERE (
	onsite_individual.date BETWEEN '$from' AND '$to'
	)");
 
$result = $conn->query($sql);
$result1=$conn->query($sql1);

echo '
   
<div class="w3-responsive">
<table class="w3-table-all"><tr>
<th>
<h2>Individual</h2></th></tr><tr>';
    echo'<th>UserId</th>';
    echo'<th>Attended Contest</th>';
    echo'<th>Rating</th>';
     echo'<th>Average</th>';
     $count=0;
      while($row1 = $result1->fetch_assoc())
    {
     //$row1= $result1->fetch_assoc()
         echo"<th>Contest". $row1['contest_id']. "</th>";
         $arr=array( $row1['contest_id']);
         $count++;
     
    }
    echo '</tr>';
if($result->num_rows>0){
    
    
  while($row = $result->fetch_assoc())
{
        echo"<td>". $row['user_id']. "</td>";
        echo"<td>". $row['count(user_id)']. "</td>";
        echo"<td>". $row['SUM(onsite_individual.rating)']. "</td>";
        echo"<td>". $row['AVG(onsite_individual.rating)']. "</td>";
        $result2=$conn->query($sql2);
         while($row2 = $result2->fetch_assoc())
        {
        if($row['user_id']==$row2['user_id'])
        {
            echo"<td>". $row2['rating']. "</td>";
        }
        }
   
        echo '</tr>';
         echo'<br>';
}    
    
        
    }
    echo
  '</table>
</div>
<br>
<br>
' ; 


$conn->close();


?>

<script>
    
 $(function() {
     $(".datepicker").datepicker({dateFormat:'yy-mm-dd'});
   });
  
  </script>








<!-- Footer -->


<!-- Script for Sidebar, Tabs, Accordions, Progress bars and slideshows -->
