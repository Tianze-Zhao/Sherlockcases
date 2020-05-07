<?php
//Connect to email_list table
$server = "localhost";
$username = "u673269877_yilin";
$database = "u673269877_db";
$password = "yilin940911";
    
$conn = mysqli_connect($server,$username,$password,$database) or die('Error connecting to database server');

echo "Database connected.\n";

//Read all personal details
$qry = "SELECT * FROM email_list";
$result = mysqli_query($conn,$qry);
while($row = mysqli_fetch_array($result)){
    if($row['first_name'] != '' && $row['last_name'] != '' && $row['email'] != '')
    echo $row['first_name'] . ' ' . $row['last_name'] . ' ' . $row['email'] . '<br/>';
}


//Send customized emails
$from = 'tom940911@gmail.com';
$subject = $POST_['subject'];
$content = $POST_['content'];

//Close connection
mysqli_close($connection);

?>