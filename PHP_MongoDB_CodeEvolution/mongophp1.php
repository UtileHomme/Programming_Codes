<?php

$m = new MongoDB\Driver\Manager("mongodb://localhost:27017");

$db = $m->company;

echo "Connected to db company";
 ?>
