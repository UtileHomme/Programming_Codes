<?php

require 'init.php';

var_dump($_POST['action']);
var_dump($_POST['username']);
function user_joined($user_name, $conn)
{
    $user_name = htmlentities($user_name);

    $query = "INSERT INTO users(name) VALUES(:user_name)";

    $result = $conn->prepare($query); //helps avoid sql injection
    $result->bindParam(':username', $user_name, PDO::PARAM_STR); //putting parameters in place of actual data
    $result->execute();
}
//
// function user_left($user_name, $conn)
// {
//
// }
//
function user_list($conn)
{
    $user_list = array();
    $query = "SELECT `name` FROM `users` ";

    //helps avoid sql injection

    $result = $conn->prepare($query);
    $result->execute();

    $result->setFetchMode(PDO::FETCH_ASSOC);

    $a = $result->fetchAll();

    // var_dump($a);
    foreach($a as $row)
    {
    $user_list[] = $row['name'];
    }

    return $user_list;
}
//
// // first action is for joined, second action is for list
if(isset($_POST['user_name'] ,  $_POST['action']) || isset($_POST['action1']) )
{
    var_dump($_POST['user_name']);
    $user_name = $_POST['user_name'];
    $action = $_POST['action'];
$action = $_POST['action1'];
    if($action == 'joined')
    {
        user_joined($user_name, $conn);
    }
    else if($action == 'list')
    {
        //the first argument is the array returned from above
        foreach(user_list($conn) as $user)
        {
            echo $user.'<br />';
        }
    }

}

?>
