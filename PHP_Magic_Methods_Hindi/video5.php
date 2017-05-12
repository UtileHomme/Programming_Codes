<!-- Get function -->

<?php
class ABC
{
    private $array = ['abc'=>"ABC variable",'xyz'=>"XYZ variable"];

    public function __get($name)
    {
        if(array_key_exists($name, $this->array))
        {
            return $this->array($name);
        }
        else
        {
            return "Trying to access non-existing variable: $name";
        }
    }
}

$abc = new ABC;

//this is how we access get method
$abc->abc;

 ?>
