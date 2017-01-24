<?php

class Java implements DotSyntax,Compiled
{
  public function __construct()
  {
    echo 'Java is good<br />';
    $this->UsesDotSyntax();
  }

  public function UsesDotSyntax()
  {
    echo 'Yes it looks like this<br />';
  }

  public function isCompiled()
 {
   echo 'Yes it creates jar fiiles<br />';
 }
}
 ?>
