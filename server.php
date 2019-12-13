<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$reg_no    = "";
$mobile     = "";
$hostel   = "";
$room = "";
$branch = "";
$sem = "";
$errors = array();
$errorsregister = array();
$book_name = "";
$writer = "";
$return_type="";
$cost="";

// for book error
$errors2=array();
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'bookmanagement');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $reg_no = mysqli_real_escape_string($db, $_POST['reg_no']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
   $branch = mysqli_real_escape_string($db, $_POST['branch']); 
  $sem = mysqli_real_escape_string($db, $_POST['sem']);
  $mobile = mysqli_real_escape_string($db, $_POST['mobile']);
  $hostel = mysqli_real_escape_string($db, $_POST['hostel']);
  $room = mysqli_real_escape_string($db, $_POST['room']);
   $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

 
  if ($password_1 != $password_2) {
	array_push($errorsregister, "The two passwords do not match");
  }


  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM register WHERE reg_no='$reg_no' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result); // fetch data 
  
  if ($user) { // if user exists
    if ($user['reg_no'] === $reg_no) {
      array_push($errorsregister, "reg no. already exists");
    }

    if ($user['email'] === $email) {
      array_push($errorsregister, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errorsregister) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database
    $query = "INSERT INTO register(reg_no, name, branch, sem, mob, email, hostel, room, password) VALUES ('$reg_no','$username','$branch','$sem','$mobile','$email','$hostel','$room','$password_1')";
  	mysqli_query($db, $query);
  	$_SESSION['reg_no'] = $reg_no;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: booklistcopy.php');
  }
}

// BOOK Registration...


if (isset($_POST['book_reg'])) {
  // receive all input values from the form
  $reg_no = $_SESSION['reg_no'];
  $branch = mysqli_real_escape_string($db, $_POST['branch']);
  $sem = mysqli_real_escape_string($db, $_POST['sem']);
   $book_name = mysqli_real_escape_string($db, $_POST['book_name']); 
  $writer = mysqli_real_escape_string($db, $_POST['writer']);
   $return_type =$_POST['return_type'];
  $cost = mysqli_real_escape_string($db, $_POST['cost']);
   $date = mysqli_real_escape_string($db, $_POST['date']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  
  // Finally, register user if there are no errors in the form
    $query = "INSERT INTO book( reg, branch, sem, book_name, writer, return_type, cost, date) VALUES ('$reg_no','$branch','$sem','$book_name'
,'$writer','$return_type','$cost','$date')";
    mysqli_query($db, $query);
    $_SESSION['reg_no'] = $reg_no;
    $_SESSION['success'] = "Book data inserted";
    header('location: ownbookcopy.php');
}

// BOOK list...


if (isset($_POST['book_list'])) {
  // receive all input values from the form
  $reg_no = $_SESSION['reg_no'];
 $query = "SELECT * FROM book";
    mysqli_query($db, $query);
  }
// ... 

// OWNER BOOK LIST  
// LOGIN USER
if (isset($_POST['login_user'])) {
  $reg_no = mysqli_real_escape_string($db, $_POST['reg_no']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($reg_no)) {
    array_push($errors, "reg no. is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = ($password);
    $query = "SELECT * FROM register WHERE reg_no='$reg_no' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['reg_no'] = $reg_no;
      $_SESSION['success'] = "You are now logged in";
      header('location: booklistcopy.php');
    }else {
            array_push($errors, "Wrong username/password combination");
            
    }
  }
}

?>