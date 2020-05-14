

<?php

// By default form should be printed, unless submitted successfully
$print_form = true;

// Is it submitted?
if(isset($_POST['submit'])){

    // Connect to database
    $server = "localhost";
    $database = "u673269877_db";
    $username = 'u673269877_yilin';
    $password = 'yilin940911';
    $connection = mysqli_connect($server,$username,$password,$database) or die('Error connecting to database server');

    echo "Database connected.<br/>";

    //SELECT*FROM email_list

    $qry = "SELECT * FROM email_list";
    $result = mysqli_query($conn,$qry);

    //Edit customized emails

    $from = 'yilin@sherlockcases.com';
    $subject = $_POST['subject'];
    $content = $_POST['content'];
    
    //Send to everyone
    while($row = mysqli_fetch_array($result)){
        $to = $row['email'];

        mail($to,$subject,$content,'From:'.$from) or die("error");
        echo 'Email sent to: ' . $to . '<br/>';

    };

    //Close connection
    mysqli_close($connection);
    
    $print_form = false;
}


//Decide whether to print the form
if($print_form){
    
?>

<html>
    <head>
        <link href='style.css' type='text/css' rel='stylesheet' />
    </head>
    <body>
        <h1>Welcome to email sender!</h1>
        <form method='post' action='<?php echo $_SERVER['PHP_SELF']; ?>'>
            
            <label for='subject'>Subject of email:</label><br/>
            <input type = 'text' id = 'subject' name = 'subject'/><br/>
            
            <label for = 'content'>Body of email:</label><br/>
            <textarea id = 'content' name = 'content'></textarea><br/>
            
            <input type = 'submit' name = 'submit' value = 'Submit'/>
            
        </form>
    </body>
</html>

<?php
}
?>