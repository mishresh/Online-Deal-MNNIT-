<?php 
  session_start(); 
  require('db.php');
   
  if (!isset($_SESSION['reg_no'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
//$reg_no = $_POST['reg_no'];
$query = mysqli_query($conn,"SELECT * FROM register WHERE reg_no = '2001'");
$row = mysqli_fetch_array($query);

if(isset($_REQUEST["submit"]))
{
  $name=$_REQUEST["name"];
  $branch=$_REQUEST["branch"];
$sem = $_REQUEST['sem'];
$mobile = $_REQUEST['mobile'];
$hostel = $_REQUEST['hostel'];
$room = $_REQUEST['room'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

mysqli_query($conn,"update register set name='$name',branch='$branch',sem='$sem',mob='$mobile',room='$room',email='$email',password='$password' where reg_no = 2001;");
//mysqli_query($conn,"update register set name='$name' where reg_no = 2001;");

header('location: index.php');

 /*  $reg_no = mysqli_real_escape_string($_REQUEST['reg_no']);
  $username = mysqli_real_escape_string($_REQUEST['name']);
   $branch = mysqli_real_escape_string($_REQUEST['branch']); 
  $sem = mysqli_real_escape_string($_REQUEST['sem']);
  $mobile = mysqli_real_escape_string($_REQUEST['mob']);
  $hostel = mysqli_real_escape_string($_REQUEST['hostel']);
  $room = mysqli_real_escape_string($_REQUEST['room']);
   $email = mysqli_real_escape_string($_REQUEST['email']);
  $password_1 = mysqli_real_escape_string($_REQUEST['password_1']);
  $password_2 = mysqli_real_escape_string($_REQUEST['password_2']);
  */
}
  
?>

<form>

      
 <div class="input-group">
      <label>name</label>
      <input type="text" name="name" value="<?php echo $row["name"]; ?> "   >
    </div>
   <div class="input-group">
      <label>branch</label>
      <input type="text" name="branch" value="<?php echo $row["branch"]; ?>" required>
    </div>
    <div class="input-group">
      <label>semester</label>
      <input type="text" name="sem" value="<?php echo $row["sem"]; ?>" required>
     </div>
     <div class="input-group">
      <label>mobile</label>
      <input type="text" name="mobile" pattern="[0-9]{10}" value="<?php echo $row["mob"]; ?>" title="10 digits only" required>
    </div>
    <div class="input-group">
      <label>email</label>
      <input type="email" name="email" value="<?php echo $row["email"]; ?>" required>
    </div>
    <div class="input-group">
      <label>hostel</label>
      <input type="text" name="hostel" value="<?php echo $row["hostel"]; ?>" required>
    </div>
    <div class="input-group">
      <label>room</label>
      <input type="text" name="room" value="<?php echo $row["room"]; ?>" required>
    </div> 
    <label>password</label>
      <input type="text" name="password" value="<?php echo $row["password"]; ?>" required>
    </div> 
    <input type="submit" value="submit" name="submit">
      </form>
    