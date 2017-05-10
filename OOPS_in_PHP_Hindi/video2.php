<!-- Inheritance -->

<?php

class TV
{
    public $model;
    public $volume;

    function volumeUp()
    {
        $this->volume++;
    }

    function volumeDown()
    {
        $this->volume--;
    }

    function __construct($m,$v)
    {
        $this->model = $m;
        $this->volume = $v;
    }

}

$tv = new TV('Jatin',1);
echo $tv->model.' '.$tv->volume;

?>
