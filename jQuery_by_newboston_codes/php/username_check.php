<?php

require 'init.php';

if(isset($_POST['username']))
{
    $username = $_POST['username'];
    // echo $username;
    if(!empty($username))
    {
        $query = "SELECT `user_id` FROM `users` WHERE `name`=:username";

        $result = $conn->prepare($query); //helps avoid sql injection
        $result->bindParam(':username', $username, PDO::PARAM_STR); //putting parameters in place of actual data
        $result->execute();

        // echo $result->execute();
        $num_of_rows = $result->rowCount(); //this will count the rows affected in the last execution of the query
        //which are returned after executing the sql statement

        if($num_of_rows ==1)
        {
            echo "Sorry the username is taken";
        }
        else if($num_of_rows == 0)
        {
            echo "The username is available";
        }
        // var_dump($num_of_rows);

    }
}

?>
