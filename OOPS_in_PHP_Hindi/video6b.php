<?php

class abc
{
    public static $count;

    public static function getCount()
    {
        echo 'No of objects are ';
        return self::$count;
    }

    public function __construct()
    {
        self::$count++;
    }
}

$a = new abc();
$b = new abc();
$c = new abc();

echo abc::getCount();

class xyz extends abc
{
    public static function getCount()
    {
        parent::getCount();    
    }
}

 ?>
