<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?><center>
  	  <p><b><font size="2" color="red"><?php echo "*". $error ?></font></b></p></center>
  	  
  	<?php endforeach ?>
  </div>

<?php  endif ?>