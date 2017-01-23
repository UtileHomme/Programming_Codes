<?php

require 'connect.php';

$query = $conn->query('SELECT * from users');

while($row = $query->fetch())
{
  echo $row['id'].'<br />';
}


 ?>
