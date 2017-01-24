<?php
require_once('video6(character).php');
require_once('video6(wolf).php');
require_once('video6(dragon).php');
require_once('video6(human).php');

$character = new Dragon();
$character->Setup(150,330,30);
$character->Attack();

?>
