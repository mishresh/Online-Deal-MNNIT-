<?php 
  session_start(); 
  require('db.php');
   
  if (!isset($_SESSION['reg_no'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
//$reg_no = $_SESSION['reg_no'];

$reg_no = $_POST['passval'];
//$reg_no = '2001';
$book_id = $_POST['passval2']; // for book id 
echo $book_id;
$sql = "SELECT *  FROM register WHERE reg_no = '$reg_no'";
    
$query = mysqli_query($conn, $sql);
if (!$query) {
  die ('SQL Error: ' . mysqli_error($conn));
}
 $sql3 = "SELECT * FROM register WHERE reg_no = '$reg_no'";
 $query23 = mysqli_query($conn, $sql3);
while ($row = mysqli_fetch_array($query23))
    {
      $name = $row['name'];
    }

$sql2 = "SELECT * from book where book_id = 134";
 $query2 = mysqli_query($conn,$sql2);
 while ($row = mysqli_fetch_array($query2))
    {
      
 
   $to_reg_no = $row['reg'];
   $book_id = $row["book_id"];
 $purchase_type = $row["return_type"];

      }

echo $purchase_type;
$sql3 = "INSERT INTO notification( from_reg_no, to_reg_no, book_id, purchase_type) values ($reg_no ,$to_reg_no,$book_id,$purchase_type)";
 $query3 =  mysqli_query($conn, $sql3);
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: "Lato", sans-serif;
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
    color: #818181;
    display: block;
}

.sidenav a:hover {
    color: #f1f1f1;
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
<body opacity: "0.8"; background="1.1.gif" >

<div class="topnav">

  <a class="active" href="#home">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
  <a class="right" href="index.php?logout='1'">Logout</a>
  <a class="right" href="editprofile.php">Edit Profile</a>
</div>

<div style="padding-left:180px">

  <table style="width:100%;"><td bgcolor="#A9A9A9" color="#bcf7cb"><h3><b><marquee>WELCOME <?php echo $name ?></marquee></b></h3></td></table>

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
  <a href="receiverequest.php">Receive Request</a>
</div>

<div  style="padding-left:200px">

  <!-- new edition
   -->
   <div style="padding-left:140px">
<table style="width:120%;">
   <?php
   $no   = 1;
    $total  = 0;
    while ($row = mysqli_fetch_array($query))
    {
      
  echo '<tr><td ><h3><b>Registration Number</b></h3></td><td ><h3><b>Name</b></h3></td>
  <tr><td >'.$row['reg_no'].'</td><td >'.$row['name'].'</td>
  <tr><td ><h3><b>Branch</b></h3></td><td ><h3><b>Semester</b></h3></td>
  <tr><td >'.$row['branch'].'</td><td >'.$row['sem'].'</td>
  <tr><td ><h3><b>Mobile Number</b></h3></td><td ><h3><b>Email</b></h3></td>
  <tr><td >'.$row['mob'].'</td><td >'.$row['email'].'</td>
  <tr><td ><h3><b>Hostel</b></h3></td><td ><h3><b>Room Number</b></h3></td>
  <tr><td >'.$row['hostel'].'</td><td >'.$row['room'].'</td>';

      }
?>

</table>
</div></div>
<div  style="padding-left:180px">
   <br><br>
   <footer class="footer">
      <div class="text-center text-muted">
        <p><center>&copy; Creative Mishresh. All rights reserved.</center></p>
      </div>
    </footer>
	 </div>
</body>
</html> 
