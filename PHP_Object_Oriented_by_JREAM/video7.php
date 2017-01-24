<?php

require_once('video7(character).php');
require_once('video7(human).php');
// new Character();   - won't work

$user = new Human();
$user->Attack();
$user->Setup(1,2);
 ?>
