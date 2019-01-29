<?php

// https://www.youtube.com/watch?v=_D8kIciGVoE

//this class might being used at multiple places
class Logger
{
    public function log($message)
    {
        echo "Loggin message {$message}";
    }
}

// $logger = new Logger();

// $logger->log("This is a message");

class UserProfile
{

    private $logger;

    // Type hinting
    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }
    public function createUser()
    {
        //we are reusing the another class function using the object of that class
        //instead of creating same definition of that function
        $this->logger->log("user created");
    }

    public function deleteUser()
    {
        $this->logger->log("user deleted");
    }


}

$logger =  new Logger();

$profile = new UserProfile($logger);

$profile->createUser();
