<?php
//Connect to email_list table
$server = "localhost";
$database = "u673269877_db";
$username = 'u673269877_yilin';
$password = 'yilin940911';
    
$conn = mysqli_connect($server,$username,$password,$database) or die('Error connecting to database server');

echo "Database connected.\n";

//Read all personal details

$qry = "SELECT * FROM email_list";
$result = mysqli_query($conn,$qry);

//Send customized emails

$from = 'yilin@sherlockcases.com';
$subject = $_POST['subject'];
$content = $_POST['content'];

    echo $subject;
    echo $content;
while($row = mysqli_fetch_array($result)){
    $to = $row['email'];

    mail($to,$subject,$content,'From:'.$from) or die("error");
    echo 'Email sent to: ' . $to . '<br/>';
    
};


//Close connection
mysqli_close($connection);

?>