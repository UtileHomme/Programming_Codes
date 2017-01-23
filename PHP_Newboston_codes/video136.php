<?php
  require 'video136(connect.inc).php';
  include_once('video136(core.inc).php');

  //valid for video 136-142

  if(loggedin())
  {
    echo 'You are logged in. ';
    //echo getfield1(['firstname' 'surname'], $conn);
    $firstname = getfield1('firstname',$conn);
    $surname = getfield1('surname',$conn);
    echo $firstname.' '. $surname;
    echo '<br />';
    echo '<a href ="video136(logout).php">Log Out</a>' ;
  }
  else
  {
    include 'video136(loginform.inc).php';
  }
 ?>
