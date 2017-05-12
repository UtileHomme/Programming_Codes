<!-- Method Chaining -->

<?php

    class ABC
    {
        public $value = '$value property of abc class';
    }

    class XYZ
    {
        public $abc;

        public function __construct()
        {
            $this->abc = new ABC;
        }
    }

//inside class XYZ a sub object abc is created,
$xyz = new XYZ;     //superobject
echo $xyz->abc->value;


?>
