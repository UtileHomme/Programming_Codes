<!-- Static members -->

<?php

class abc
{
    //won't be related to an object anymore
    public static $data='test data';

    public static function xyz()
    {
        //to access the variable inside the function
        echo self::$data;
    }
}

//how to access anything static
abc::xyz();

?>
