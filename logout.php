<?php 
  session_start(); 

  if (!isset($_SESSION['reg_no'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['reg_no']);
  	header("location: login.php");
  }
?>  <!-- logged in user information -->
    <?php  if (isset($_SESSION['reg_no'])) : ?>
    	
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
		
</body>
</html>