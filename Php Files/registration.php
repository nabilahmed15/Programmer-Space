

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

if(isset($_POST['name'])!="" && isset($_POST['id'])!="")
{
    //echo'enter';
    $name=(isset($_POST['name']) ? $_POST['name'] : '');
    $uiu_id=(isset($_POST['id'])? $_POST['id'] : '');
    $password=(isset($_POST['pass']) ? $_POST['pass'] : '');
    $email=(isset($_POST['email'])? $_POST['email'] : '');
    $phone=(isset($_POST['phone'])? $_POST['phone'] : '');
     $uva=(isset($_POST['uva'])? $_POST['uva'] : '');
    $codeforces=(isset($_POST['codeforces'])? $_POST['codeforces'] : '');
     $hust=(isset($_POST['hust'])? $_POST['hust'] : '');
    $hacker=(isset($_POST['hacker'])? $_POST['hacker'] : '');
    
        $weblinks=array ("https://uva.onlinejudge.org/","codeforces.com","https://www.hackerrank.com/","https://vjudge.net/");
    
         $handles=array ($uva,$codeforces,$hust,$hacker);
    // echo"$name";
    //  echo"$email";
    //  echo"$phone";
    //   echo"$uiu_id";
      
    $arrlength = count($weblinks);
    $sql = ("INSERT INTO individual_info (name,uiu_id, mail,phone)
    VALUES ('$name', '$uiu_id', '$email','$phone')");
    $result=$conn->query($sql);
      $sql1 = ("INSERT INTO login (user_id, password)
    VALUES ('$uiu_id', '$password')");
    $result=$conn->query($sql1);
    for ($x = 0; $x < $arrlength; $x++) {
   // echo "The number is: $x <br>";
    $sql = ("INSERT INTO oj_individual (weblink,user_id,perticipant_id )
    VALUES ('$weblinks[$x]', '$handles[$x]','$uiu_id')");
    $result=$conn->query($sql);
    }
    
}  

   // header('location:index.php');



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
   <div class=" w3-panel w3-topbar w3-bottombar w3-border w3-border-grey  w3-round">
    <header class="w3-container  w3-teal" >
            <h3 class="w3-center">Registration Form</h3>
          </header>  
 
   
           <form action="" method="post">
             
          <p> <input class="w3-input" type="text" name = "name" style="width:90%" required>
            <label class="w3-margin-left"> Name </label></p>
           
           <p><input class="w3-input" type="text" name = "id" style="width:90%" required>
            <label class="w3-margin-left"> UIU Id </label></p>
           <p> <input class="w3-input" type="password" name = "pass" style="width:90%" required>
            <label class="w3-margin-left"> Password </label></p>
           <p><input class="w3-input" type="text" name = "email" style="width:90%" required>
            <label class="w3-margin-left"> Email </label></p>
           <p><input class="w3-input" type="text" name = "phone" style="width:90%">
            <label class="w3-margin-left"> Phone </label></p>
           <p><input class="w3-input" type="text" name = "uva" style="width:90%" required>
            <label class="w3-margin-left"> UVa User Id </label></p>
             <p><input class="w3-input" type="text" name = "codeforces" style="width:90%" required>
            <label class="w3-margin-left"> Codeforces User Id  </label></p>
              <p><input class="w3-input" type="text" name = "hust" style="width:90%" required>
            <label class="w3-margin-left"> HUST VJUDGE User ID </label></p>
               <p><input class="w3-input" type="text" name = "hacker" style="width:90%" required>
            <label class="w3-margin-left"> HackerRank User Id </label></p>
             <!--  <p><input class="w3-input" type="text" name = "chef" style="width:90%" >
            <label class="w3-margin-left"> CodeChef User Id </label></p>-->
          <br>
            <div class="w3-center">
                
          <input class="w3-btn w3-green" type="submit" value="Submit">
          
          </div>
   </div>
         </fieldset>
     </form>
 
     
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
