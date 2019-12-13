<?php 
  session_start(); 
  require('db.php');
   
  
?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: "Lato", sans-serif;
}
.parallax {
    /* The image used */
    background-image: url(images/book21.jpg) ;

    /* Set a specific height */
    min-height: 500px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;

}
img {
  border-radius: 60%;
}

{
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  margin-left: 180px;
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: grey;
  color: white;
}

.sidenav {
    height: 100%;
    width: 180px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    padding-top: 20px;
}

.sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 25px;
    color: #40CEEA;
    display: block;
}

.sidenav a:hover {
    color: #ADF179;
}

.main {
    margin-left: 180px; /* Same as the width of the sidenav */
    font-size: 28px; /* Increased text to enable scrolling */
    padding: 0px 10px;
}

.topnav .right {float: right;}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
    .topnav li.right,
}
.button {
  display: inline-block;
  padding: 05px 10px;
  font-size: 20px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: black;
  background-color: #85C1E9;
  border: none;
  border-radius: 10px;
  box-shadow: 0 4px #999;
}

.button:hover {background-color: #D0D3D4}

.button:active {
  background-color: #7FFF00  ;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.tbox {
border:2px solid green;
background:PowderBlue;
width:200px;
border-radius:25px;
-moz-border-radius:25px; 
-moz-box-shadow:    1px 1px 1px #ccc;
-webkit-box-shadow: 1px 1px 1px 1px #ccc;
 box-shadow:         1px 2px 2px 2px #ccc;
 height:50;
 padding-left: 10px;
}
.c1{
  margin-left:150px;
}
.c2{
  margin-left:250px;
}
.c3{
  margin-left:250px;
}
.c4{
  margin-left:350px;
}
* {
    box-sizing: border-box;
}
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}


</style>
</head>
<body>
<div class="parallax">
<div class="topnav">

  <a class="active" href="?login.php">Home</a>
  <a href="aboutme.php">About</a>
</div>

<div style="padding-left:180px">

  <table style="width:100%;"><td bgcolor="#A9A9A9" color="#bcf7cb"><h3><b><marquee>WELCOME to MCA Family </marquee></b></h3></td></table>

</div>
<br><br>
<div class="sidenav">
  <a><center>
  <img src="2.2.png" alt="User" style="width:125px" "height:200px">
  </a>
   <font size="5" color="red"><?php echo "WELCOME" ?></font>

  
  </center>
  <br><br><br>
  <a href="profilecopy.php">Profile</a>
  <a href="booklistcopy.php">BOOK LIST</a>
  <a href="ownbookcopy.php">Total book</a>
  <a href="bookinfoCopy.php">Upload</a>
  <a href="sentrequest.php">Sent Request</a>
  <a href="receiverequest.php">Received Request</a>
</div>





<div  style="padding-left:250px; padding-right:100px">
<div style="color:black ;border-radius: 20px; padding: 0px 0px 0px 0px;background-color:white;opacity: 0.8; ">
<div style=" padding-left:50px; color: MidnightBlue; font-size: 20px; text-shadow: -1px 0 black, 0 1px OrangeRed, 1px 0 gold, 0 -1px red;">
  <h2>Responsive "Meet The Team" Section </h2>
  </div></div>
  <!-- new edition
   -->
   <div style="color:black ;border-radius: 20px; padding: 70px 0px 70px 70px;background-color:white;opacity: 0.8; ">
   
    <div style=" padding-left:50px;padding-right:100px; color: MidnightBlue; font-size: 20px; text-shadow: -1px 0 black, 0 1px OrangeRed, 1px 0 gold, 0 -1px red;">
  
 

<br>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="management/gaurav.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Gaurav Mishra</h2>
        <p class="title">Web Designer</p>
        <p>mishresh95@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="management/akshay.png" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Akshay Rajani</h2>
        <p class="title">Backend</p>
        <p>ranjani@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  
  <div class="row" style="margin-left:100px;">
  <div class="column">
    <div class="card" >
      <img src="management/deeksha.png" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Deeksha Shukla</h2>
        <p class="title">Frontend</p>
        <p>deeksha@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>


  <div class="column" style="margin-left:100px;">
    <div class="card">
    <img src="management/shiwani.png" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Shiwani Sharma</h2>
        <p class="title">Frontend</p>
        <p>shiwani@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>



  
</div>
</div></div>



   <div  style="padding-left:0px; color:green">
   <br><br>
   <footer class="footer">
      <div class="text-center text-muted">
    <center>
    <h4>Follow Us</h4>
  <a class="w3-button w3-large w3-teal" href="https://www.facebook.com/mishresh.kartavya" title="Facebook"><i class="fa fa-facebook"></i></a>
  <a class="w3-button w3-large w3-teal" href="https://twitter.com/Gauravm47769352" title="Twitter"><i class="fa fa-twitter"></i></a>
  <a class="w3-button w3-large w3-teal" href="https://plus.google.com/" title="Google +"><i class="fa fa-google-plus"></i></a>
  <a class="w3-button w3-large w3-teal" href="https://www.instagram.com/gauravmishra5945/" title="Google +"><i class="fa fa-instagram"></i></a>
  <a class="w3-button w3-large w3-teal w3-hide-small" href="https://www.linkedin.com/in/gaurav-mishra-234302169/" title="Linkedin"><i class="fa fa-linkedin"></i></a>
        <p>devloped By Mishresh 2018&copy;All rights reserved.</center></p>
      </div>
    </footer>
   </div></div></div>
     </div>
   </div>
</body>
</html> 
