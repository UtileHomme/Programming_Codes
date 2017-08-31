<?php
//htmlentities ensures that no html code can be put in the form
//valid for video 69 and 72

if(isset($_GET['day']) && isset($_GET['date']) && isset($_GET['year']))
{
  $day = htmlentities($_GET['day']);
  $date = htmlentities($_GET['date']);
  $year = htmlentities($_GET['year']);

  if(!empty($day) && !empty($date) &&!empty($year))
  {
    echo 'It is '.$day.' '.$date.' '.$year;
  }
  else {
    echo 'Fill in all fields';
  }
}
?>

<form action="video69.php" method="GET">
  Day:<br /><input type="text" name="day" /><br />
  Date:<br /><input type="text" name="date" /><br />
  Year:<br /><input type="text" name="year" /><br /><br />
  <input type="submit" value="Submit" />
</form>
