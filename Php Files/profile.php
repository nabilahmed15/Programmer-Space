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
$flag=0;

// Create connection
$conn = new mysqli($servername, $username, $password,"project");
if(isset($_SESSION['id'])) {
$id=$_SESSION['id'];
}
$query= "SELECT * From  individual_info where uiu_id='$id'";
$result = $conn->query($query);
if($result->num_rows>0){
   
echo  
'<br>
<br>
<div class="w3-panel w3-border w3-round-large" style="width:50%">';
while($row = $result->fetch_assoc())
{

echo
    '<div class="w3-row w3-section">                 
  <div class="w3-col" style="width:70px"><h4>Name:</h4 ></div>
  <div class="w3-rest">';//name
echo
  "<h4>".$row["name"]."</h4>";
echo      
'</div>
</div>';  //end name
echo
    '<div class="w3-row w3-section">                 
  <div class="w3-col" style="width:70px"><h4>UIU_ID:</h4 ></div>

    <div class="w3-rest">';//uiu id
echo
     "<h4>".$row["uiu_id"]."</h4><br>";
echo      
'</div>
</div>';  //end uiu id

echo
    '<div class="w3-row w3-section">                 
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
  <div class="w3-col" style="width:60px"><h4>email:</h4 ></div>
    <div class="w3-rest">';//email
echo
   "<h4>".$row["mail"]."</h4><br>"; 
echo      
'</div>
</div>';  //end email
echo
    '<div class="w3-row w3-section">                 
  <div class="w3-col" style="width:40px"><i class="w3-xxlarge fa fa-phone"></i></div>
  <div class="w3-col" style="width:70px"><h4>phone:</h4 ></div>
    <div class="w3-rest">';//email
echo
   "<h4>".$row["phone"]."</h4><br>"; 
echo      
'</div>
</div>';  //end phone
}
echo
'</div>';//end border
}
else
{
    $flag=1;
   $query1= "SELECT * From  team_info where team_name='$id'";
   $result1 = $conn->query($query1); 
   echo  
'<br>
<br>
<div class="w3-panel w3-border w3-round-large" style="width:50%">';
while($row1 = $result1->fetch_assoc())
{

echo
    '<div class="w3-row w3-section">                 
  <div class="w3-col" style="width:110px"><h4>TeamName:</h4 ></div>
  <div class="w3-rest">';//name
echo
  "<h4>".$row1["team_name"]."</h4>";
echo      
'</div>
</div>';  //end name
echo
    '<div class="w3-row w3-section">                 
  <div class="w3-col" style="width:90px"><h4>Member1:</h4 ></div>

    <div class="w3-rest">';//uiu id
echo
     "<h4>".$row1["member_1_id"]."</h4><br>";
echo      
'</div>
</div>';  //end uiu id

echo
    '<div class="w3-row w3-section">                 
  <div class="w3-col" style="width:90px"><h4>Member2:</h4 ></div>
    <div class="w3-rest">';//email
echo
   "<h4>".$row1["member_2_id"]."</h4><br>"; 
echo      
'</div>
</div>';  //end email
echo
    '<div class="w3-row w3-section">                 
  
  <div class="w3-col" style="width:90px"><h4>Member3:</h4 ></div>
    <div class="w3-rest">';//email
echo
   "<h4>".$row1["member_3_id"]."</h4><br>"; 
echo      
'</div>
</div>';  //end phone
}
echo
'</div>';//end border
}
if($flag==0)
{
if(isset($_POST['weblink'])!="")
{
$weblink = (isset($_POST['weblink']) ? $_POST['weblink'] : '');
$user=(isset($_POST['user']) ? $_POST['user'] : '');
//$contest_id=(isset($_POST['contest_id']) ? $_POST['contest_id'] : '');
$point = (isset($_POST['point']) ? $_POST['point'] : '');
$query1="UPDATE onsite_individual
SET onsite_individual.rating = '$point'
WHERE (
    	onsite_individual.perticipant_id = '$id' 
    	AND (onsite_individual.user_id = '$user' AND onsite_individual.weblink = '$weblink') )";

$result1=$conn->query($query1);
}
if(isset($_POST['weblink1'])!="")
{
$weblink1 = (isset($_POST['weblink1']) ? $_POST['weblink1'] : '');
$user1=(isset($_POST['user1']) ? $_POST['user1'] : '');
$contest_id1=(isset($_POST['contest_id1']) ? $_POST['contest_id1'] : '');

$point1 = (isset($_POST['point1']) ? $_POST['point1'] : '');
$query2="Select date,time from schedule where (schedule.weblink='$weblink1')";
$result2=$conn->query($query2);
if($result2->num_rows==1){
 while($row2 = $result2->fetch_assoc())
{ 
 $date=$row2['date'];
 $time=$row2['time'];
$query3="INSERT INTO  onsite_individual
        (weblink,date,time,rating,user_id,contest_id, perticipant_id) VALUES
        ('$weblink1','$date','$time','$point1','$user1','$contest_id1','$id')";
$result3=$conn->query($query3);
}

//date and time from schedule
}
  	

}
}
else if($flag==1)
{
    if(isset($_POST['weblink'])!="")
{
$weblink = (isset($_POST['weblink']) ? $_POST['weblink'] : '');
$user=(isset($_POST['user']) ? $_POST['user'] : '');
//$contest_id=(isset($_POST['contest_id']) ? $_POST['contest_id'] : '');
$point = (isset($_POST['point']) ? $_POST['point'] : '');
$query1="UPDATE onsite_team
SET onsite_team.rating = '$point'
WHERE (
    	onsite_team.perticipant_id = '$id' 
    	AND (onsite_team.user_id = '$user' AND onsite_team.weblink = '$weblink') )";

$result1=$conn->query($query1);
}
if(isset($_POST['weblink1'])!="")
{
$weblink1 = (isset($_POST['weblink1']) ? $_POST['weblink1'] : '');
$user1=(isset($_POST['user1']) ? $_POST['user1'] : '');
$contest_id1=(isset($_POST['contest_id1']) ? $_POST['contest_id1'] : '');

$point1 = (isset($_POST['point1']) ? $_POST['point1'] : '');
$query2="Select date,time from schedule where (schedule.weblink='$weblink1')";
$result2=$conn->query($query2);
if($result2->num_rows==1){
 while($row2 = $result2->fetch_assoc())
{ 
 $date=$row2['date'];
 $time=$row2['time'];
$query3="INSERT INTO  onsite_team
        (weblink,date,time,rating,user_id,contest_id, perticipant_id) VALUES
        ('$weblink1','$date','$time','$point1','$user1','$contest_id1','$id')";
$result3=$conn->query($query3);
}

//date and time from schedule
}
  	

}
}


echo  
'
<br>
<br>
<div class="w3-third w3-panel w3-border w3-round-large" style="width:50%"><br><br>

<h2>Insert Point</h2><br>';
echo
'    <form action="" method="Post">
    <div class="w3-row w3-section">
  <div class="w3-col" style="width:120px"><h4>Weblink</h4></div>
    <div class="w3-rest"style="width:250px">
      <input class="w3-input w3-border" name="weblink1" type="text" placeholder="weblink">
    </div>
</div>';
echo
'<div class="w3-row w3-section">
  <div class="w3-col" style="width:120px"><h4>User ID</h4></div>
    <div class="w3-rest"style="width:250px">
      <input class="w3-input w3-border" name="user1" type="text" placeholder="user id">
    </div>
</div>';
echo
'<div class="w3-row w3-section">
  <div class="w3-col" style="width:120px"><h4>Contest ID</h4></div>
    <div class="w3-rest"style="width:250px">
      <input class="w3-input w3-border" name="contest_id1" type="text" placeholder="user id">
    </div>
</div>';
echo
'<div class="w3-row w3-section">
  <div class="w3-col" style="width:120px"><h4>Point</h4></div>
    <div class="w3-rest"style="width:250px">
      <input class="w3-input w3-border" name="point1" type="text" placeholder="Point">
    </div>
</div>';
echo'<p class="w3-center">
<input class="w3-btn w3-teal" type="submit" value="SUBMIT"></p>
</form>
</div>';
echo  
'
<div class="w3-rest w3-panel  w3-border w3-round-large" style="width:50%"><br><br>';
echo
'<h2>Update Point</h2><br>';
echo
'    <form action="" method="Post">
    <div class="w3-row w3-section">
  <div class="w3-col" style="width:120px"><h4>Weblink</h4></div>
    <div class="w3-rest"style="width:250px">
      <input class="w3-input w3-border" name="weblink" type="text" placeholder="weblink">
    </div>
</div>';
echo
'<div class="w3-row w3-section">
  <div class="w3-col" style="width:120px"><h4>User ID</h4></div>
    <div class="w3-rest"style="width:250px">
      <input class="w3-input w3-border" name="user" type="text" placeholder="user id">
    </div>
</div>';
echo
'<div class="w3-row w3-section">
  <div class="w3-col" style="width:120px"><h4>Point</h4></div>
    <div class="w3-rest"style="width:250px">
      <input class="w3-input w3-border" name="point" type="text" placeholder="Point">
    </div>
</div>';
echo'<p class="w3-center">
<input class="w3-btn w3-teal" type="submit" value="SUBMIT"></p>
</form>
</div>';


$conn->close();
 ?>

<script>
// Side navigation
function w3_open() {
    var x = document.getElementById("mySidebar");
    x.style.width = "100%";
    x.style.fontSize = "40px";
    x.style.paddingTop = "10%";
    x.style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}

// Tabs
function openCity(evt, cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  var activebtn = document.getElementsByClassName("testbtn");
  for (i = 0; i < x.length; i++) {
      activebtn[i].className = activebtn[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-dark-grey";
}

var mybtn = document.getElementsByClassName("testbtn")[0];
mybtn.click();

// Accordions
function myAccFunc(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

// Slideshows
var slideIndex = 1;

function plusDivs(n) {
slideIndex = slideIndex + n;
showDivs(slideIndex);
}

function showDivs(n) {
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}

showDivs(1);

// Progress Bars
function move() {
  var elem = document.getElementById("myBar");   
  var width = 5;
  var id = setInterval(frame, 10);
  function frame() {
    if (width == 100) {
      clearInterval(id);
    } else {
      width++; 
      elem.style.width = width + '%'; 
      elem.innerHTML = width * 1  + '%';
    }
  }
}
</script>

