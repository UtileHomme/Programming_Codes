<?php

class Cupcake
{
  public $Cupcake = array();

  public function Frosting($str)
  {
    $this->Cupcake['Frosting']=$str;
    return $this;
  }

  public function Nuts($int)
  {
    $this->Cupcake['Nuts'] = (int)$int;
    return $this;
  }

    public function Sprinkles($int)
    {
      $this->Cupcake['Sprinkles'] = (int)$int;
      return $this;
    }



}
 ?>
