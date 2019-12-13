<?php 
  session_start(); 
  require('db.php');
   
  if (!isset($_SESSION['reg_no'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
$reg_no = $_SESSION['reg_no'];
//echo $reg_no;
//$reg_no = $_POST['reg_no'];
//$reg_no = '2001';


$sql = "SELECT * FROM register WHERE reg_no = '$reg_no'";
    
$query = mysqli_query($conn, $sql);
$query2 = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($query2))
    {
      $name = $row['name'];
    }
    //echo $name;
if (!$query) {
  die ('SQL Error: ' . mysqli_error($conn));
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: "Lato", sans-serif;
}

.parallax {
    /* The image used */
    background-image: url(images/book3.jpg) ;
   
    /*filter: alpha(opacity=0.3);
    *//* Set a specific height */
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
</style>
</head>
<body>
<div class="parallax">
<div class="topnav">

  <a class="active" href="login.php">Home</a>
  <a href="aboutme.php">About</a>
  <a class="right" href="index.php?logout='1'">Logout</a>
  <a class="right" href="editprofile.php">Edit Profile</a>
</div>

<div style="padding-left:180px">

  <table style="width:100%;"><td bgcolor="#A9A9A9" color="#bcf7cb"><h3><b><marquee>WELCOME <?php echo $name; ?></marquee></b></h3></td></table>

</div>
<br><br>
<div class="sidenav">
	<a><center>
  <img src="2.2.png" alt="User" style="width:125px" "height:200px">
  </a>
   <font size="5" color="red"><?php echo $name ?></font>

  
  </center>
	<br><br><br>
	<a href="profilecopy.php">Profile</a>
  <a href="booklistcopy.php">BOOK LIST</a>
  <a href="ownbookcopy.php">Total book</a>
  <a href="bookinfoCopy.php">Upload</a>
  <a href="sentrequest.php">Sent Request</a>
  <a href="receiverequest.php">Received Request</a>
</div>

<div  style="padding-left:260px; padding-right:100px">
<div style="color:black ;border-radius: 20px; padding: 0px 0px 0px 0px;background-color:white;opacity: 0.8; ">
<div style="padding-center:0px; padding-left:50px; color: MidnightBlue; font-size: 20px; text-shadow: -1px 0 black, 0 1px OrangeRed, 1px 0 gold, 0 -1px red;">
  <h2>Your Personal Details. </h2>
  </div></div>
  <!-- new edition
   -->
   <div style="color:black ;border-radius: 20px; padding: 70px 0px 70px 70px;background-color:white;opacity: 0.8; ">
   
    <div style="padding-center:0px; padding-left:100px; color: MidnightBlue; font-size: 20px; text-shadow: -1px 0 black, 0 1px OrangeRed, 1px 0 gold, 0 -1px red;">
  
<table style="width:100%;  color: MidnightBlue; font-size: 20px; text-shadow: -1px 0 black, 0 1px OrangeRed, 1px 0 gold, 0 -1px red;">
   <?php
    while ($row = mysqli_fetch_array($query))
    {
      
  echo '<tr><td ><h3><b>Registration Number</b></h2></td><td ><h3><b>Branch</b></h3></td>
  <tr><td >'.$row['reg_no'].'</td><td >'.$row['branch'].'</td>
  <tr><td ><h3><b>Name</b></h3></td><td ><h3><b>Semester</b></h3></td>
  <tr><td >'.$row['name'].'</td><td >'.$row['sem'].'</td>
  <tr><td ><h3><b>Mobile Number</b></h3></td><td ><h3><b>Email</b></h3></td>
  <tr><td >'.$row['mob'].'</td><td >'.$row['email'].'</td>
  <tr><td ><h3><b>Hostel</b></h3></td><td ><h3><b>Room Number</b></h3></td>
  <tr><td >'.$row['hostel'].'</td><td >'.$row['room'].'</td>';

      }
?>

</table>
</div></div>
<div  style="padding-left:10px; color:green">
   <br><br>
   <footer class="footer">
      <div class="text-center text-muted">
        <p><center>devloped By Mishresh 2018&copy;All rights reserved.</center></p>
      </div>
    </footer>
	 </div>
</body>
</html> 
