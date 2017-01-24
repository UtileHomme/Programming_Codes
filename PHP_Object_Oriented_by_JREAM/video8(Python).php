<?php


class Python implements DotSyntax
{
  public function __construct()
  {
    echo 'Python was created';
    $this->UsesDotSyntax();
  }

    public function UsesDotSyntax()
    {
      echo 'Yes, it looks like this : Object.Method()';
    }
}
 ?>
