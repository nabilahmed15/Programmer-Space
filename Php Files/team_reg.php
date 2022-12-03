<?php
//session_start();
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
if(isset($_POST['id1'])!="")
{
    $team=(isset($_POST['name'])? $_POST['name'] : '');
    $id1=(isset($_POST['id1'])? $_POST['id1'] : '');
    $id2=(isset($_POST['id2'])? $_POST['id2'] : '');
    $id3=(isset($_POST['id3'])? $_POST['id3'] : '');
    
    $password=(isset($_POST['psw']) ? $_POST['psw'] : '');
    //$email=(isset($_POST['email'])? $_POST['email'] : '');
    $sql = "INSERT INTO team_info (team_name, member_1_id, member_2_id, member_3_id)
    VALUES ('$team', '$id1','$id2','$id3')";
    $result=$conn->query($sql);
    $sql1 = ("INSERT INTO login (user_id, password)
    VALUES ('$team', '$password')");
    $result1=$conn->query($sql1);
}

$conn->close();

?>
<!DOCTYPE html>
<html>
<title>Project</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<body>
    <div style="width: 600px; margin: 100px auto 0 auto;">
    <div class=" w3-panel w3-topbar w3-bottombar w3-border w3-border-grey  w3-round-xlarge">
 <div class="w3-container">
     <header class="w3-container  w3-teal" >
     <h2>Team Registration Form</h2> 
     </header>
     <form action="" method="post">
        <div class="w3-section">
          <label><b>Team Name</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text"  placeholder="Enter Username" name="name" required>
          <label><b>Password</b></label>
          <input class="w3-input w3-border" type="password"  placeholder="Enter Password" name="psw" required>
          <label><b>Member1 Name</b></label>  
         <input class="w3-input w3-border w3-margin-bottom" type="text"  placeholder="Enter Member 1 Name" name="name1">
          <label><b>Member1 ID</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text"  placeholder="Enter Member 1 ID" name="id1" required> 
          <label><b>Member1 Email</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text"  placeholder="Enter Member 1 mail" name="email" > 
          <label><b>Member2 Name</b></label>  
         <input class="w3-input w3-border w3-margin-bottom" type="text"  placeholder="Enter Member 2 Name" name="name2" >
          <label><b>Member2 ID</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Member 2 ID" name="id2" required> 
         <label><b>Member3 Name</b></label>  
         <input class="w3-input w3-border w3-margin-bottom" type="text"  placeholder="Enter Member 3 Name" name="name3" >
          <label><b>Member3 ID</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text"  placeholder="Enter Member 3 ID" name="id3" required> 
         <label><b>VjudgeID</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text"  placeholder="Enter VjudgeID" name="vjudge" >
           <label><b>Hust ID</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text"  placeholder="Enter Hust ID" name="Hust" >
           <label><b>HackerRank id</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text"  placeholder="Enter HackerRank id" name="hacker" >
          
          <br>
         <div class="w3-center">
                
          <input class="w3-btn w3-green" type="submit" value="Submit">
          
          </div>
        </div>
     </form>
</div>
 </div>
 </div>
     
 
 
     

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

</body>
</html>
