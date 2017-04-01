<?php

require_once ('/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/core/database/connect.php');

function update_user($update_data, $conn)
{
    global $session_user_id;
    $session_user_id = intval($session_user_id);
    var_dump($session_user_id);
    $query = 'UPDATE `login_register` SET';
    $values = array();
    foreach($update_data as $name => &$value)
    {

        $query .=' `'.$name.'`=:'.$name.','; // the :$name part is the placeholder, e.g. :zip
        $values[':'.$name] = $value; // save the placeholder
    }
    // var_dump($values);
    $query = substr($query, 0, -1)." WHERE `user_id`=".intval($session_user_id);
    echo $query;
    $res = $conn->prepare($query);

    $res->bindParam(':userid',$session_user_id ,PDO::PARAM_STR);
    $a = $res->execute($values);
    var_dump($a);
    $num_of_rows = $res->rowCount();
    if($a)
    {
        return true;
    }
}


//for activating the account by setting it active field to one
function activate($email, $email_code,$conn)
{
    //query to update user active status

    $query1 = "SELECT `user_id` FROM `login_register` WHERE `email`=:email AND `email_code`=:email_code AND `active`=0";
    $res = $conn->prepare($query1);
    $res->bindParam(':email',$email,PDO::PARAM_STR);
    $res->bindParam(':email_code',$email_code,PDO::PARAM_STR);
    $res->execute();
    $num_of_rows = $res->rowCount();
    if($num_of_rows=1)
    {
        $query2 = "UPDATE `login_register` SET `active`=1 WHERE `email`=:email1";
        $res1 = $conn->prepare($query2);
        $res1->bindParam(':email1',$email,PDO::PARAM_STR);
        $res1->execute();
        $num_of_rows1 = $res1->rowCount();

        echo 'Successfully activated';
        return true;
    }
    else
    {
        return false;
    }
}

function change_password($user_id, $password,$conn)
{
    $user_id = intval($user_id);
    $password = sha1($password);

    $query = "UPDATE `login_register` SET `password`=:password WHERE `user_id`=$user_id ";
    $res = $conn->prepare($query);
    $res->bindParam(':password',$password,PDO::PARAM_STR);
    if($res->execute())
    {
        $num_of_rows = $res->rowCount();
        echo $num_of_rows.' have been updated';
    }
}

//for registering user
function register_user($register_data, $conn)
{
    $bind = ':'.implode(',:', array_keys($register_data));
    $query  = 'insert into `login_register` ('.implode(',', array_keys($register_data)).') '.
    'values ('.$bind.')';
    $res = $conn->prepare($query);

    $a = $res->execute(array_combine(explode(',',$bind), array_values($register_data)));
    email($register_data['email'], 'Active your account', " Hello ".$register_data['firstname']." \n \nYou need to the activate your account, so use the link below: \n \n
    http://localhost:8000/activate.php?&email=".$register_data['email']."&email_code=".$register_data['email_code']."\n \n---company's name");
}
//for checking how many users are active
function user_count($conn)
{
    $query = "SELECT `user_id` FROM `login_register` WHERE `active`=1";
    $res = $conn->prepare($query);
    if($res->execute())
    {
        $num_of_rows = $res->rowCount();
        return $num_of_rows;
    }
}

user_count($conn);

function user_data($user_id,$conn)
{
    $user_id = intval($user_id);
    $data = array();
    $func_num_args = func_num_args();   //returns the count of no. of parameters in the called function
    $func_get_args = func_get_args();  //returns an array of the parameters passed in the function

    if($func_num_args>1)
    {
        unset($func_get_args[0]);
        unset($func_get_args[1]);
        $fields = '`'.implode('`, `',$func_get_args).'`'.'<br />';          //this will store all the parameters in the form of a string

        $query = "SELECT `user_id`, `username`, `password`, `firstname`, `lastname`, `email` from `login_register` where `user_id`=$user_id";
        echo '<br />';
        $res = $conn->prepare($query);
        $res->bindParam(':fields',$fields,PDO::PARAM_STR);
        $a = $res->execute();

        if($res->execute())
        {
            $num_of_rows = $res->rowCount();

            if($num_of_rows==1)
            {
                $res->setFetchMode(PDO::FETCH_ASSOC);
                $data=$res->fetch();

            }

        }

    }
    return $data;
}




function logged_in()
{
    if(isset($_SESSION['user_id']))
    {
        return true;
    }
    else
    {
        return false;
    }
}

function user_exists($username,$conn)
{
    $query = "SELECT `user_id` FROM `login_register` WHERE `username`=:username ";
    $res = $conn->prepare($query);
    $res->bindParam(':username', $username, PDO::PARAM_STR);
    $res->execute();

    $num_of_rows = $res->rowCount();
    if($num_of_rows == 1)
    {
        return true;
    }
    else if($num_of_rows ==0)
    {
        return false;
    }
}

function email_exists($email,$conn)
{
    $query = "SELECT `user_id` FROM `login_register` WHERE `email`=:email ";
    $res = $conn->prepare($query);
    $res->bindParam(':email', $email, PDO::PARAM_STR);
    $a=$res->execute();
    $num_of_rows = $res->rowCount();
    if($num_of_rows == 1)
    {

        return true;
    }
    else if($num_of_rows ==0)
    {
        return false;
    }
}

function user_active($username,$conn)
{
    $query = "SELECT `user_id` FROM `login_register` WHERE `username`=:username and `active`=1";
    $res = $conn->prepare($query);
    $res->bindParam(':username', $username, PDO::PARAM_STR);
    $res->execute();

    $num_of_rows = $res->rowCount();
    if($num_of_rows == 1)
    {
        return true;
    }
    else if($num_of_rows ==0)
    {
        return false;
    }
}

function user_id_from_username($username,$conn)
{
    $query = "SELECT `user_id` FROM `login_register` WHERE `username`=:username";
    $res = $conn->prepare($query);
    $res->bindParam(':username', $username, PDO::PARAM_STR);
    $res->execute();
    $num_of_rows = $res->rowCount();
    echo '<br />';
    if($num_of_rows==1)
    {
        $user_id =  $res->fetchColumn();
        $user_id = intval($user_id);
        return $user_id;
    }
}


function login($username, $password,$conn)
{
    $password = sha1($password);
    $password = trim($password);
    $user_id = user_id_from_username($username,$conn);
    $query = "SELECT `user_id` FROM `login_register` WHERE `username`=:username AND `password`=:password ";
    $res = $conn->prepare($query);
    $res->bindParam(':username', $username, PDO::PARAM_STR);
    $res->bindParam(':password', $password, PDO::PARAM_STR);
    $res->execute();
    $num_of_rows = $res->rowCount();

    if($num_of_rows==1)
    {
        return $user_id;
    }
    else
    {
        return false;
    }
}


?>
