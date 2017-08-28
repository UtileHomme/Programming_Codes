<?php
//valid for video 54 - 57

$offset = 0;
if(isset($_POST['text']) && isset($_POST['searchfor']) && isset($_POST['replacewith']))
{
  $text = $_POST['text'];
  $searchfor = $_POST['searchfor'];
  $replacewith = $_POST['replacewith'];

//search length is the length of the string we are searching for
  $search_length = strlen($searchfor);
  echo '<br />';


  if(!empty($text) && !empty($replacewith) && !empty($searchfor) )
  {
     //find the position of the first occurrence of that substring
     //offset is the place we need to start the search from
    while($strpos = strpos($text, $searchfor, $offset))
    {
      $strpos.'<br />';

     //increment the offset so that it starts from a position after the substring
      $offset = $strpos + $search_length;
      $text = substr_replace($text, $replacewith, $strpos, $search_length);
    }
    echo $text;
  }
  else
  {
    echo 'Please fill in all fields';
  }
}

 ?>

<form action="video54.php" method="POST">
    <textarea name="text" rows="6" cols="30"></textarea><br /><br />
    Search for:<br />
    <input type="text" name="searchfor" /><br /><br />
    Replace with<br />
    <input type="text" name="replacewith" /><br /><br />
    <input type="submit" value="Find and Replace" />
</form>
