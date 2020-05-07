<?php
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];

$server = "(localdb)\MSSQLLocalDB";
$username = '';
$database = "email_list";
$password = '';
    
//Connecting to database
$connection = mysqli_connect($server,$username,$password,$database) or die('Error connecting to database server');

echo "Database connected.\n";
//The insert query
$query = "INSERT INTO email_list (first_name, last_name, email) VALUES ('$first_name','$last_name','$email')";
  
echo "Query written.\n";
//Executing query
mysqli_query($connection, $query) or die('Error querying database');

//Final feedback of success
echo 'Customer added.';
    
mysqli_close($connection);

?>