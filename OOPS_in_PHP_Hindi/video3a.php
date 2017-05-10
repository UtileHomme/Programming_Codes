<!-- Encapsulation -->

<?php
class TV
{
    protected $model;
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
        return $this->model='jatin';
        return $this->volume = 5;
        // now we can access
    }
}


$tv = new TV('zzz',2);
// echo $tv->model;  this will give an error without function

echo $tv->getModel();
echo '<br />';

// Now this will work
$tv_one = new plasma();
echo $tv_one->getModel();

// echo $tv_one->$model; this won't work in protected
?>
