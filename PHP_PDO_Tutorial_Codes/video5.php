<?php

require 'connect.php';

$query = $conn->query('SELECT * from users');

$results = $query->fetchAll(PDO::FETCH_ASSOC);

if(count($results))
{
  echo 'There are results';
}
else
{
  echo 'There are no results';
}
 ?>
