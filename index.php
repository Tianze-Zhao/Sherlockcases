<form enctype='multipart/form-data' action='<?php echo $_SERVER['PHP_SELF']?>' method='post'>
  <label for='icon'>Please upload your favourite icon:</label>
  <input type='file' name='icon' id='icon'>
  <image src='icon/'>
  <input type='submit' value='submit'>
</form>

<?php
$target = 'icon/' . $file_name;
move_uploaded_file($_FILES['icon']['tmp_name'],$target);

 ?>
