<?php
//valid for video 117

require 'video113(connect.inc).php';
?>

<?php
    $query = "SELECT `food` , `calories` FROM `food` WHERE `healthy_unhealthy`='u' ORDER BY `id` DESC";

    $result = $conn->prepare($query); //helps avoid sql injection
    //$result->bindParam(':uh', $uh, PDO::PARAM_STR); //putting parameters in place of actual data
    if($result->execute())
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
    else {
      echo 'Query failed';
    }



?>
