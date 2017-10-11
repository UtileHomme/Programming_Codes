<?php
//valid for video 118-119

require 'video113(connect.inc).php';
?>

Choose a food type:
<form action="video118.php" method="GET">
  <select name="uh">
    <option value="u">Unhealthy</option>
    <option value="h">Healthy</option>
  </select><br /><br />
  <input type="submit" value="Submit" />
</form>
<?php

if(isset($_GET['uh']) && !empty($_GET['uh']))
{
  $uh = strtolower($_GET['uh']);
  if($uh == 'u' || $uh=='h')
  {
    $query = "SELECT `food` , `calories` FROM `food` WHERE healthy_unhealthy=:uh ORDER BY `id` DESC";
    $result = $conn->prepare($query); //helps avoid sql injection
    $result->bindParam(':uh', $uh, PDO::PARAM_STR); //putting parameters in place of actual data

    $execute = $result->execute();
    if($execute)
    {
      $num_of_rows = $result->rowCount(); //this will count the rows affected in the last execution of the query
      //which are returned after executing the sql statement

      if($num_of_rows==0)
      {
        echo 'No results found';
      }
      else
      {
        $result->setFetchMode(PDO::FETCH_ASSOC);
        while($row= $result->fetch())
        {
          $food = $row['food'];
          $calories = $row['calories'];
          echo $food.' has '.$calories.' calories'.'<br />';
        }
      }
    }
    else
    {
      echo 'Query failed';
    }
  }
}



?>
