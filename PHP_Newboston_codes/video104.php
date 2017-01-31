<?php

//valid for video 104-105

//how to include xml file
$xml = simplexml_load_file('video104(example).xml');

//everything in xml is case sensitive
echo $xml->producer[1]->name.' is '.$xml->producer[1]->age;

echo '<br /><br />Using foreach <br /><br />';

foreach($xml->producer as $producer)
{
  echo $producer->name.' is '.$producer->age.'<br />';
}

 ?>
