<!-- Destructor function -->

<?php

class ABC
{
    public $data = "data variable in abc class<br />";

    public function __construct($data)
    {
        echo "$data<br />";
    }

    public function __destruct()
    {
        echo "Echoing from destructor";
    }
}

$abc = new ABC('test data');

echo $abc->data;



 ?>
