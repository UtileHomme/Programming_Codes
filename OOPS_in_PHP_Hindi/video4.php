<!-- Abstract classes -->

<?php


abstract class ABC
{
    public abstract function xyz();
}

class DEF extends ABC
{
    public function xyz()
    {
        echo 'Hello world';
    }
}


 ?>
