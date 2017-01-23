<?php
//valid for video 113-116

require 'video113(connect.inc).php';
?>

<?php
    $query = "SELECT `food` , `calories` FROM `food` ORDER BY `id` DESC";

    $result = $conn->prepare($query); //helps avoid sql injection
    $result->bindParam(':uh', $uh, PDO::PARAM_STR); //putting parameters in place of actual data
    if($result->execute())
    {
      $result->setFetchMode(PDO::FETCH_ASSOC);
      while($row= $result->fetch())
      {
        $food = $row['food'];
        $calories = $row['calories'];

        echo $food.' has '.$calories.' calories'.'<br />';
      }
    }
    else {
      echo 'Query failed';
    }



?>
