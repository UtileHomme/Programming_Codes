<?php

require_once('video4(log).php');

$Log = new Log();
$Log->Write('test.txt','raghav');
echo $Log->Read('test.txt');
 ?>
