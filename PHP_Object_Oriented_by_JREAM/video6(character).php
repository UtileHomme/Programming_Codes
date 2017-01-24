<?php

class Character
{
  protected $hp = 100;
  protected $dmg = 10;
  protected $armor = 10;

  protected function __construct()
  {
    echo 'The Character was created<br />';
  }

  public function Attack()
  {
    echo 'We attacked for '.$this->dmg;
  }
}
 ?>
