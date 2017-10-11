<?php
require 'video113(connect.inc).php';

if(isset($_GET['search_text']))
{
  $search_text = $_GET['search_text'];
}

if(!empty($search_text))
{
  $query = "SELECT `name` FROM `names` WHERE `name` LIKE ?";
  $result = $conn->prepare($query);
  $result->bindValue(1, "$search_text%",PDO::PARAM_STR);
  if($result->execute())
  {
    $result->setFetchMode(PDO::FETCH_ASSOC);
    while($row=$result->fetch())
    {
      echo $name = '<a href="anotherpage.php?search_text='.$row['name']. '">'.$row['name'].'</a><br />';
    }
  }
}
?>
