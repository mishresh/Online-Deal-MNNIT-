<?php
 session_start(); 
  require('db.php');
  if (!isset($_SESSION['reg_no'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }

$reg_no = $_SESSION['reg_no'];
$book_id = $_POST['passval'];
if (!$conn) {
  die ('Failed to connect to MySQL: ' . mysqli_connect_error());  
}

$sql = "DELETE 
    FROM book WHERE book_id = '$book_id'";
    
$query = mysqli_query($conn, $sql);

if (!$query) {
  die ('SQL Error: ' . mysqli_error($conn));
}
 header('location: receiverequest.php');
?>