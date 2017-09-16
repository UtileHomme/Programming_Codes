<?php

include 'init.php';

//this name has been sent from ajax8.js

// var_dump($_POST['name']);
if(isset($_POST['name']) && $_POST['email'])
{
    $user_id = intval($_SESSION['user_id']);
    // var_dump($user_id);
    $name = htmlentities($_POST['name']);
    $email = htmlentities($_POST['email']);

    // var_dump($name);
    $query =  "UPDATE `users` SET `name`=:name, `email`=:email WHERE `user_id`=:userid";

    $result = $conn->prepare($query);

    $result->bindParam(':name', $name, PDO::PARAM_STR);
    $result->bindParam(':email', $email, PDO::PARAM_STR);
    $result->bindParam(':userid', $user_id);

    $update = $result->execute();

    // $count = $result->rowCount();
    // var_dump($count);

    // var_dump($update);
    if($update==true)
    {
        echo 'Settings have been updated';
    }
    else if($update==false)
    {
        echo 'There was an error updating your settings';
    }

}
?>
