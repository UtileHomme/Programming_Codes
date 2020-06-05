<?php

require 'connect.php';

class UserDetails
{
  public $firstname, $surname, $entry;

  public function _construct()
  {
    $this->entry = "{$this->firstname} posted {$this->surname}";
  }

}
$query = $conn->query('SELECT * from users');

$query->setFetchMode(PDO::FETCH_CLASS, 'UserDetails');
// Set fetch mode
//hello
while($r = $query->fetch())
{
  echo $r->entry.'<br />';
}


 ?>
