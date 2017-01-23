<?php
//valid for video 132-134

require 'video113(connect.inc).php';

if(isset($_POST['search_name']))
{
  $search_name= $_POST['search_name'];
  if(!empty($search_name))
  {
    if(strlen($search_name)>=4)
    {
    $query = "SELECT `name` FROM `names` WHERE `name` LIKE ?";
    $result = $conn->prepare($query);
    $result->bindValue(1,"%$search_name%", PDO::PARAM_STR);
    $result->execute();

    if($result->execute())
    {
      $num_of_rows = $result->rowCount();

      if($num_of_rows>=1)
      {
        echo $num_of_rows.' '.'Results found<br />';
        $result->setFetchMode(PDO::FETCH_ASSOC);
        while($row=$result->fetch())
        {
          echo $row['name'].'<br />';
        }
      }
      else
      {
        echo 'No results found';
      }
    }

  }
  else
  {
    echo 'Your keyword must be 4 characters or more';
  }
  }
    else
    {
      echo 'Query failed';
    }

}
?>

<form action="video132.php" method="POST">
  Name: <input type="text" name="search_name" />
  <input type="submit" value="Submit" />
</form>
