<?php

header('Content-Type: application/json');

$users =
[
  ['name' => 'Dale','username'=>'dale'],
  ['name' => 'Mohammad','username'=>'mohammad'],
  ['name' => 'Vihaan','username'=>'vihaan'],

];

echo json_encode($users);

 ?>
