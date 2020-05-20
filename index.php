<form action='<?php echo $_SERVER['PHP_SELF']?>' method='post'>
  <label for='icon'>Please upload your favourite icon:</label>
  <input type='file' name='icon' id='icon'>
  <image src='icon/<?php echo $file_name?>'>
    <p><?php echo $file_name?></p>
  <input type='submit' value='submit'>
</form>

<?php
$file_name = 'absd'.$_FILES['icon']['name'];
$target = 'icon/' . $file_name;
move_uploaded_file($_FILES['icon']['tmp_name'],$target);

 ?>
