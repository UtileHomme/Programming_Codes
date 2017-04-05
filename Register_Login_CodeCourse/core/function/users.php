<?php

include '/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/core/database/connect.php';

function change_profile_image($user_id, $filetemp, $fileext, $conn)
{
    //10 character code for filename
    $filepath = 'images/profile/'.substr(sha1(time()),0,10).'.'.$fileext;
    move_uploaded_file($filetemp, $filepath);

    $query = "UPDATE `login_register` SET `profile`='".$filepath."' WHERE `user_id`=".(int)$user_id;
    $res = $conn->prepare($query);
    $a = $res->execute();
}


//admin mailing something to users
function mail_users($subject, $body, $conn)
{
    $query= "SELECT `firstname`, `email` FROM `login_register` WHERE `allow_email`=1";
    $res = $conn->prepare($query);
    $a = $res->execute();
    if($a)
    {
        $res->setFetchMode(PDO::FETCH_ASSOC);
        while($row=$res->fetch())
        {
            email($row['email'],$subject,"Hello ".$row['firstname']."\n\n".$body);
        }
    }
}


//for checking if the type =1 , admin access else not
function has_access($user_id,$type,$conn)
{
    $user_id = intval($user_id);

    $type = intval($type);

    $query = "SELECT `user_id` FROM `login_register` WHERE `user_id`=$user_id AND `type`=1";

    $res = $conn->prepare($query);
    // $res->bindParam(':userid',$user_id,PDO::PARAM_STR);

    $a = $res->execute();

    $num_of_rows = $res->rowCount();
    if($num_of_rows==1)
    {

        return true;
    }
    else
    {
        return false;

    }
}

//recover the account of the user via email
function recover($mode,$email,$conn)
{
    $user_data = user_data(user_id_from_email($email,$conn),$conn,'firstname','username');

    if($mode=='username')
    {
        email($email,'Your username', " Hello ".$user_data['firstname'].",\n\n Your username is: ".$user_data['username']." \n\n -- Created by Jatin Sharma");
    }
    else if($mode=='password')
    {
        //hash the password and extract first 8 characters
        $generated_password = substr(sha1(rand(999,999999)),0,8);
        //change the password
        change_password($user_data['user_id'], $generated_password,$conn);

        //set the password_recover field to 1 so that they can go and reset their password
        update_user($user_data['user_id'], array('password_recover'=>'1'),$conn);
        email($email,'Your password recovery', " Hello ".$user_data['firstname'].",\n\n Your new password: ".$generated_password." \n\n -- Created by Jatin Sharma");
        //the changed password will be hashed and stored in the db... the password sent to email will be used for one time login
    }
}


//to update the details of the user once he/she is logged in
function update_user($user_id, $update_data, $conn)
{
    $query = 'UPDATE `login_register` SET';
    $values = array();
    foreach($update_data as $name => &$value)
    {

        $query .=' `'.$name.'`=:'.$name.','; // the :$name part is the placeholder, e.g. :zip
        $values[':'.$name] = $value; // save the placeholder
    }
    // var_dump($values);
    $query = substr($query, 0, -1)." WHERE `user_id`=".intval($user_id);
    echo $query;
    $res = $conn->prepare($query);

    //$res->bindParam(':userid',$session_user_id ,PDO::PARAM_STR);
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
    if($num_of_rows==1)
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

    $query = "UPDATE `login_register` SET `password`=:password,`password_recover`=0 WHERE `user_id`=$user_id ";
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

        $query = "SELECT `user_id`, `username`, `password`, `firstname`, `lastname`, `email`,`email_code`,`active`,`password_recover`,`type`,`allow_email`,`profile` from `login_register` where `user_id`=$user_id";
        echo '<br />';
        $res = $conn->prepare($query);
    //    $res->bindParam(':fields',$fields,PDO::PARAM_STR);
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

function user_id_from_email($email,$conn)
{
    $query = "SELECT `user_id` FROM `login_register` WHERE `email`=:email";
    $res = $conn->prepare($query);
    $res->bindParam(':email', $email, PDO::PARAM_STR);
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
