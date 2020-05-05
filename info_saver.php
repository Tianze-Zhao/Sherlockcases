<html>
    <body>
        <p> haha </p>
<?php
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];

$link = "localhost";
$username = "u673269877_yilin";
$database = "u673269877_db";
$password = "yilin940911";
    
//Connecting to database
$connection = mysqli_connect($link,$username,$password,$database) or die('Error connecting to database server');

        echo "Database connected";
//The insert query
$query = "INSERT INTO email_list (first_name,last_name,email) " . "VALUES('$first_name','$last_name','$email')";
  
        echo "Query written.";
//Executing query
mysqli_query($connection, $query) or die('Error querying database');

//Final feedback of success
echo 'Customer added.';
    
mysqli_close($connection);

?>
    </body>
    </html>