<!-- Autoload -->

<?php

function my_autoloader($class) {
    include 'classes/'. $class .'.php';
}

spl_autoload_register('my_autoloader');

$xyz = new XYZ();
$xyz->hello();
 ?>
