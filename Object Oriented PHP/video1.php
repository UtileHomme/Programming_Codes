<?php

// It allows one to have only instance of the class in the project

class db
{
    public static $instance;

    public static function getInstance()
    {
        //for creating only one instance of the class
        db::$instance = new db();

        return db::instance;
    }

    //make the constructor private
    private function __construct()
    {

    }

    public function getQuery()
    {
        return "SELECT * FROM some_table";
    }
}

$db = db::getInstance();

echo $db->getQuery();

// $db2 = new db();

// Not allowed in singletone

