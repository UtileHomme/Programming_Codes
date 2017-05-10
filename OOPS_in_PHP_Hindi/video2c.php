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

class plasmaTV extends TV
{
    //this will override the above variable

    public $model = 'def';
    
    //this has overriden the parent class constructor
    function __construct()
    {
        $this->model='Kritika';
    }
}

$plazma = new plasmaTV;

echo $plazma->model;
?>
