<?php

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
if(isset($_POST['search'])!="")
 { 
     $key = (isset($_POST['search']) ? $_POST['search'] : '');
    $_SESSION['key']=$key;
    header('location:search.php');
}
 
  $conn->close();
echo
'<!DOCTYPE html>
<html>
<title>Project</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="w3-theme-teal.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">

<body>


<!-- Side Navigation -->

<!-- Header -->

<header class="w3-container  w3-theme w3-padding" id="myHeader">
  
  <div class="w3-left">
  <h1>TITLE OF PROJECT</h1>
    
  </div>
  
    <div class="w3-right">';  
    if(isset($_SESSION['id'])) {
        $id=$_SESSION['id'];
        }
    echo'<i class="w3-padding w3-xlarge fa fa-user">'.$id.'</i>';
      echo 
      '<a href="index.php" class="w3-btn w3-light-grey w3-border-red w3-round-large">Log Out</a>';
    
    
echo
'</div></header>';
 ?>
    

<!-- Modal -->

<div class="w3-container">
<hr>
<div class="w3-bar  w3-theme  ">
    <a href="home.php" class="w3-bar-item w3-button w3-  w3-padding-16">Home</a>
    <a href="profile.php" class="w3-bar-item w3-button w3-padding-16">Profile</a>
    
  <div class="w3-dropdown-hover">
    <button class="w3-button w3-padding-16">
      Rank List <i class="fa fa-caret-down"></i>
    </button>
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
       
        <a href="Individual.php" class="w3-bar-item w3-button">Individual</a>
      <a href="team.php" class="w3-bar-item w3-button">Team</a>
      
    
    </div>
    
  </div>
    <a href="schedule.php" class="w3-bar-item w3-button w3-padding-16">Schedule</a>
    <a href="mentor_list.php" class="w3-bar-item w3-button w3-padding-16">Mentor List</a>
    
</div>
<br>
<div class="w3-left">
    
    <form action="" method="Post">
       
        <input class="w3-input w3-border w3-border-teal w3-round-xlarge " name="search" type="text" placeholder="Search">
     
     
    
    </form>
      </div>


<!-- Script for Sidebar, Tabs, Accordions, Progress bars and slideshows -->
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


