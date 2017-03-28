<?php

function sanitize($data)
{

}

function output_errors($errors)
{
  $output = array();
  foreach($errors as $error)
  {
    $output[] = '<li>'.$error.'</li>';
  }
  return '<ul>'.implode(' ',$output).'</ul>';
}
 ?>
