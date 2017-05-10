<?php

class House
{
    public static $size = 2500;

    public static function getSize()
    {
        return self::$size;
    }

    public static function setSize($size)
    {
        self::$size = $size;
    }
}

echo House::getSize();
House::setSize(1200);
echo '<br />';
echo House::getSize();

 ?>
