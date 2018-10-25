<!-- https://stackoverflow.com/questions/37353313/mongodb-and-php-connectivity-ubuntu-16-04 -->

<?php

$m = new MongoDB\Driver\Manager("mongodb://localhost:27017");

$bulk = new MongoDB\Driver\BulkWrite;

$doc = array(
  "name" => "duck",
  "color" => "brown"
);

$bulk->insert($doc);

$m->executeBulkWrite('birds.pets', $bulk);

echo "data inserted";

$query = new MongoDB\Driver\Query([]);

$rows = $m->executeQuery("birds.pets", $query);

foreach ($rows as $row)
    {
         echo "$row->name - $row->color\n";
    }
 ?>
