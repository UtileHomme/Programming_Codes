<?php

//reuse of library inside another library

class Logger
{
    public function log($message)
    {
        echo "Logging message: $message";
    }
}

//this class is dependent on Logger
class UserProfile
{
    //this is a object
    private $logger;

    public function createUser()
    {
        $this->logger->log('User created');
    }

    public function updateUser()
    {
        $this->logger->log('User updated');
    }

    public function deleteUser()
    {
        $this->logger->log('User deleted');
    }

    //we hve passed the old Class object here
    public function __construct($logger)
    {
        //sub-object of the Logger class is created here
        $this->logger = $logger;
    }
}

$logger = new Logger();
echo '<br />';
$profile = new UserProfile($logger);
$profile->updateUser();
?>
