<?php
session_start();
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
if(isset($_POST['id'])!="")
{
$id = (isset($_POST['id']) ? $_POST['id'] : '');
$_SESSION['id'] = $id;
$pass= (isset($_POST['pass']) ? $_POST['pass'] : '');
if($id=='admin'&&$pass=='123')
{
    header('location:home.php');
}
else
{
$sql = ("SELECT user_id,password FROM login where( user_id='$id' AND password='$pass' )");
$result = $conn->query($sql);
if ($result->num_rows == 1) {
    header('location:home.php');
}
else 
{
    header("Location:error.php");
   // $error="     Yor Login Id Or PassWord is invalid   ";
}
}
}
$conn->close();

?>
<!DOCTYPE html>
<html>
<title>Project</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<body>
 
 

<div style="width: 500px; margin: 100px auto 0 auto;">
  <div class="w3-panel w3-topbar w3-bottombar w3-border w3-border-teal w3-round">
       <header class="w3-container w3-teal">
            <h3 class="w3-center">LOGIN</h3>
          </header>
       
       <form action="" method="Post">
             
          <p> <input class="w3-input" type="text" name = "id" style="width:90%" required>
            <label class="w3-margin-left"> User ID</label></p>
           
           <p><input class="w3-input" type="password" name = "pass" style="width:90%" required>
            <label class="w3-margin-left"> Password</label></p>
          <br>
            <div class="w3-center">
                
          <input class="w3-btn w3-teal" type="submit" value="SignIn">
          
          <p>don't have an account?</p>
          <div class="w3-center">
              <a href="select.php" class="w3-btn w3-teal ">Register</a>  
          <br>
          <br>
          </div>    
           </div>
     </form>
        
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
