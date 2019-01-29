<?php

// https://www.youtube.com/watch?v=_D8kIciGVoE

//this class might being used at multiple places
class Logger
{
    public function log($message)
    {
        echo "Loggin message";
    }
}

// $logger = new Logger();

// $logger->log("This is a message");

class UserProfile
{
    public function createUser()
    {
        //we are reusing the another class function using the object of that class
        //instead of creating same definition of that function
        $logger = new Logger();
        $logger->log("user created");
    }

    public function deleteUser()
    {

    }
}

$profile = new UserProfile();

$profile->createUser();
