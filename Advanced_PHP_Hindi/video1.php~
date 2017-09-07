<!-- Type Hinting 1234 -->

<?php


interface test
{
    public function doSomething();
}

class ABC implements test
{
    public function doSomething()
    {
        echo 'Doing Something';
    }
}

//file
class XYZ
{
    public function doingSomething()
    {
        echo "Do something else";
    }

    public function __construct(ABC $abc)
    {
        $this->abc = $abc;
    }
}

//we should give the interface name as TYPE now
function test(XYZ $abc)
{
    $abc->doingSomething();
}

$abc = new XYZ();

//we can only pass an object in the function
test($abc);

 ?>
