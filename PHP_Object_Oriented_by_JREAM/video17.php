<?php

require('video17(Cupcake).php');
$cupcake = new Cupcake();

$cupcake->Nuts('10')
              ->Frosting('chocolate')
              ->Sprinkles('200');

var_dump($cupcake->Cupcake);




 ?>
