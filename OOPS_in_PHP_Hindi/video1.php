<!-- Objects and Classes -->

<?php

class TV
{
    public $model = 'xyz';
    public $volume = 1;

    function volumeUp()
    {
        $this->volume++;
    }

    function volumeDown()
    {
        $this->volume--;
    }
}

$tv_one = new TV;
$tv_two = new TV;

echo $tv_one->volume;
$tv_one->volumeUp();
echo '<br />';
echo $tv_one->volume;

?>
