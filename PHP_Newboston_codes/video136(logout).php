<?php
require 'video136(core.inc).php';

//echo $http_referer;
//this will tell us where we came from

session_destroy();   //will destroy the session

header('Location: '.$http_referer);
 ?>
