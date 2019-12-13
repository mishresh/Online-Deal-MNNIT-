<?php
 session_start(); 
  require('db.php');
  if (!isset($_SESSION['reg_no'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }

$reg_no = $_SESSION['reg_no'];
  $sql = "SELECT * FROM register WHERE reg_no = '$reg_no'";
$query2 = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($query2))
    {
      $name = $row['name'];
    }
    // for receiving the data from another page..
if (!$conn) {
  die ('Failed to connect to MySQL: ' . mysqli_connect_error());  
}

//$sql = "SELECT * FROM book WHERE reg = '$reg_no'";
$sql = "SELECT book.book_id as book_book_id,book.book_name as book_book_name,book.writer as book_writer,
book.cost as book_cost,
register.name as register_name,register.email as register_email,
register.mob as register_mob,register.hostel as register_hostel,
register.room as register_room, notification.request_date as notification_request_date,request_status 
from register,book,notification
where book.book_id = notification.book_id and notification.to_reg_no=register.reg_no and to_reg_no = '$reg_no'" ;   
$query = mysqli_query($conn, $sql);

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
    background-image: url(images/book6.jpg) ;
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

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}

table.blueTable {
  border: 1px solid #309BA4;
  background-color: #E2EBEE;
  width: 100%;
  text-align: left;
  border-collapse: collapse;
}
table.blueTable td, table.blueTable th {
  border: 2px solid #AAAAAA;
  padding: 3px 7px;
}
table.blueTable tbody td {
  font-size: 12px;
  color: #404D4D;
}
table.blueTable tr:nth-child(even) {
  background: #EEF5F2;
}
table.blueTable thead {
  background: #BFBFBF;
  background: -moz-linear-gradient(top, #cfcfcf 0%, #c5c5c5 66%, #BFBFBF 100%);
  background: -webkit-linear-gradient(top, #cfcfcf 0%, #c5c5c5 66%, #BFBFBF 100%);
  background: linear-gradient(to bottom, #cfcfcf 0%, #c5c5c5 66%, #BFBFBF 100%);
}
table.blueTable thead th {
  font-size: 15px;
  font-weight: bold;
  color: #402424;
  text-align: center;
  border-left: 2px solid #BFBFBF;
}
table.blueTable thead th:first-child {
  border-left: none;
}

table.blueTable tfoot td {
  font-size: 16px;
}
table.blueTable tfoot .links {
  text-align: right;
}
table.blueTable tfoot .links a{
  display: inline-block;
  background: #1C6EA4;
  color: #FFFFFF;
  padding: 2px 8px;
  border-radius: 5px;
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
  font-size: 10px;
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

</style>
</head>
<body>
<div class="parallax">
<div class="topnav">

 <a class="active" href="login.php">Home</a>
  <a href="aboutme.php">About</a>
  <a class="right" href="index.php?logout='1'">Logout</a>
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
  <a href="receiverequest.php">Receive Request</a>
</div>

<div  style="padding-left:260px; padding-right:100px">
<div style="color:black ;border-radius: 20px; padding: 0px 0px 0px 0px;background-color:white;opacity: 0.8; ">
<div style="padding-center:50px; padding-left:50px; color: MidnightBlue; font-size: 20px; text-shadow: -1px 0 black, 0 1px OrangeRed, 1px 0 gold, 0 -1px red;">
  <h2>Total Recived Request...</h2>
  </div></div>
  <!-- new edition
   -->
   <div style="color:black ;border-radius: 20px; padding: 50px 100px 50px 40px;background-color:white;opacity: 0.8; ">
   
    <div style="padding-center:0px; padding-left:0px;padding-right:60px; color: Black ; font-size: 20px; ">

<table class="blueTable">
<thead>
<tr>
<th>S.No.</th>
<th>Book ID</th>
<th>Book Name.</th>
<th>Book Writer</th>
<th>Cost</th>
<th>User Name</th>
<th>User Email</th>
<th>Mobile No.</th>
<th>Hostel Name</th>
<th>Room No.</th>
<th>Notification Date</th>
<th>Status</th>
<th>Take Action</th>
</tr>
</thead>

<tbody>
    <?php
    $no   = 1;
    $total  = 0;
    $a = 1;
    while ($row = mysqli_fetch_array($query))
    {
      
      echo '<tr>
          <td>'.$no.'</td>
          <td id="'.$a.'">'.$row['book_book_id'].'</td>
          <td>'.$row['book_book_name'].'</td>
          <td>'.$row['book_writer'].'</td>
          <td>'.$row['book_cost'].'</td>
          <td>'.$row['register_name'].'</td>
          <td>'.$row['register_email'].'</td>
          <td>'.$row['register_mob'].'</td>
          <td>'.$row['register_hostel'].'</td>
          <td>'.$row['register_room'].'</td>
         <td>'. date('F d, Y', strtotime($row['notification_request_date'])) . '</td>
         <td>'.$row['request_status'].'</td>
          <td><form action="deletebook.php" method="POST"><input style="display:none" type="text" name="passval" value="'.$row['book_book_id'].'"><center><input button class="button button2" type="submit" value="DELETE" name="'.$a.'"></center></form></td>
        </tr>';
      
      $no++;
    }?>
    </tbody> 
  
</table>
</div></div></div>
     
   
  <div  style="padding-left:180px; color:green">
   <br><br>
   <footer class="footer">
      <div class="text-center text-muted">
        <p><center>devloped By Mishresh 2018&copy;All rights reserved.</center></p>
      </div>
    </footer>
   
</body>
</html> 
