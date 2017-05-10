<!-- private Encapsulation -->

<?php
class TV
{
    private $model;
    public $volume;

    function volumeUp()
    {
        $this->volume++;
    }

    function volumeDown()
    {
        $this->volume--;
    }

    public function getModel()
    {
        return $this->model;
    }

    function __construct($m,$v)
    {
        $this->model = $m;
        $this->volume = $v;
    }
}

class plasma extends TV
{
    function getModel()
    {
        return $this->model;
        // even this won't be able to access the private variable
    }
}


$tv = new TV('zzz',2);
// echo $tv->model;  this will give an error without function

echo $tv->getModel();

// This will still give an error because private variable not accessible in child class
// $tv_one = new plasma('kkk',4);
// echo $tv_one->getModel();
?>
