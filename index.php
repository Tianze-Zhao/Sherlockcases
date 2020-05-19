<form action='<?php echo $_SERVER['PHP_SELF']?>' method='post'>
  <label for='icon'>Please upload your favourite icon:</label>
  <input type='file' name='icon' id='icon'>
  <input type='submit' value='submit'>
</form>

<?php
$target = 'icon' . $_FILES['icon']['name'];
move_uploaded_file($_FILES['icon']['tmp_name'],$target);

 ?>
