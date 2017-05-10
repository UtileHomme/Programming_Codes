<?php

class FileLogger implements LoggerInterface
{
    function log($message)
    {
        echo 'Logging message to file: '.$message;
    }
}

?>
