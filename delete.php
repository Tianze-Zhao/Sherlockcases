
        <p>Please select the email addresses to delete from the email list and click Remove</p>

        <form method='post' action="<?php echo $_SERVER['PHP_SELF']; ?>">

    <?php
        //Connect database
        $server = "localhost";
        $database = "u673269877_db";
        $username = 'u673269877_yilin';
        $password = 'yilin940911';
        $connection = mysqli_connect($server,$username,$password,$database) or die('Error connecting to database server');
        echo "Database connected.<br/>";

        //Delete selected ids
        if(isset($_POST['submit'])){
            foreach($_POST['todelete'] as $delete_id){
                $query = "DELETE FROM email_list WHERE id = $delete_id";
                mysqli_query($connection,$query) or die("Error querying database");
            }
            echo "Customer deleted.<br/>";

        }

        //Display form
        $query = "SELECT * FROM email_list";
        $result = mysqli_query($connection,$query);
        while($row = mysqli_fetch_array($result)){
            echo '<input type="checkbox" value="'.$row['id'].'" name="todelete[]" />';
            echo $row['first_name'];
            echo ' '.$row['last_name'];
            echo ' '.$row['email'];
            echo '<br/>';
        }
        mysqli_close($connection);

    ?>
        <input type='submit' name = 'submit' value='Remove'/>
        </form>
