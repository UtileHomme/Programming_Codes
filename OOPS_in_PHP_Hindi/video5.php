<!-- Interfaces -->

<?php

// Interface can not have variable declarations
// we can only have public methods

interface abc
{
    public function test();
    public function xyz();
}

interface xyz
{
    public function xyza();
}

class def implements abc
{
    public function test()
    {
        echo "we are testing";
    }

    public function xyz()
    {
        echo 'xyz is cool';
    }
}

class mno implements xyz,abc
{
    public function test()
    {
        echo "we are testing";
    }

    public function xyz()
    {
        echo 'xyz is cool';
    }

    public function xyza()
    {
        echo 'xzya is cool';
    }
}




 ?>
